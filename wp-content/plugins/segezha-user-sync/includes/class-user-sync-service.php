<?php
/**
 * Сервис синхронизации пользователей
 *
 * Обеспечивает синхронизацию пользователей с внешними системами и 1С ЗУП
 *
 * @package SegezhaUserSync
 * @since 1.0.0
 */

// Если файл вызывается напрямую, прерываем выполнение
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Класс для синхронизации пользователей
 *
 * @since 1.0.0
 */
class Segezha_User_Sync_Service {

	/**
	 * Единственный экземпляр класса (Singleton)
	 *
	 * @var Segezha_User_Sync_Service
	 */
	private static $instance = null;

	/**
	 * Менеджер полей пользователя
	 *
	 * @var Segezha_User_Fields_Manager
	 */
	private $fields_manager;

	/**
	 * Получить единственный экземпляр класса
	 *
	 * @return Segezha_User_Sync_Service
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Конструктор класса
	 */
	private function __construct() {
		$this->fields_manager = Segezha_User_Fields_Manager::get_instance();
	}

	/**
	 * Синхронизирует пользователя из данных JSON
	 *
	 * @param array $user_data Данные пользователя из JSON
	 *
	 * @return int|WP_Error ID пользователя или объект ошибки
	 */
	public function sync_user_from_json( $user_data ) {
		// Валидация данных
		if ( empty( $user_data['login'] ) || empty( $user_data['1c_id'] ) ) {
			return new WP_Error( 'invalid_data', 'Отсутствуют обязательные поля: login или 1c_id' );
		}

		$login = sanitize_user( $user_data['login'] );
		$email = isset( $user_data['email'] ) ? sanitize_email( $user_data['email'] ) : '';
		$user_1c_id = sanitize_text_field( $user_data['1c_id'] );

		// Ищем пользователя по ID из 1С
		$user = $this->find_user_by_1c_id( $user_1c_id );

		// Если пользователь не найден, ищем по логину
		if ( ! $user ) {
			$user = get_user_by( 'login', $login );
		}

		// Если пользователь не найден, создаем нового
		if ( ! $user ) {
			$user_id = $this->create_user( $login, $email, $user_data );
		} else {
			$user_id = $user->ID;
			$this->update_user( $user_id, $user_data );
		}

		return $user_id;
	}

	/**
	 * Находит пользователя по ID из 1С
	 *
	 * @param string $user_1c_id ID пользователя из 1С
	 *
	 * @return WP_User|false Объект пользователя или false
	 */
	private function find_user_by_1c_id( $user_1c_id ) {
		$users = get_users(
			array(
				'meta_key'   => 'segezha_user_1c_id',
				'meta_value' => $user_1c_id,
				'number'     => 1,
			)
		);

		return ! empty( $users ) ? $users[0] : false;
	}

	/**
	 * Создает нового пользователя
	 *
	 * @param string $login     Логин пользователя
	 * @param string $email     Email пользователя
	 * @param array  $user_data Данные пользователя
	 *
	 * @return int|WP_Error ID пользователя или объект ошибки
	 */
	private function create_user( $login, $email, $user_data ) {
		// Генерируем случайный пароль, если не указан
		$password = isset( $user_data['password'] ) ? $user_data['password'] : wp_generate_password( 12, false );

		// Если email не указан, создаем на основе логина
		if ( empty( $email ) ) {
			$email = $login . '@segezha-group.local';
		}

		$user_id = wp_create_user( $login, $password, $email );

		if ( is_wp_error( $user_id ) ) {
			return $user_id;
		}

		// Обновляем данные пользователя
		$this->update_user( $user_id, $user_data );

		return $user_id;
	}

	/**
	 * Обновляет данные пользователя
	 *
	 * @param int   $user_id   ID пользователя
	 * @param array $user_data Данные пользователя
	 *
	 * @return void
	 */
	private function update_user( $user_id, $user_data ) {
		// Обновляем основные поля
		$user_update = array( 'ID' => $user_id );

		if ( isset( $user_data['email'] ) ) {
			$user_update['user_email'] = sanitize_email( $user_data['email'] );
		}

		if ( isset( $user_data['display_name'] ) ) {
			$user_update['display_name'] = sanitize_text_field( $user_data['display_name'] );
		}

		if ( isset( $user_data['first_name'] ) ) {
			$user_update['first_name'] = sanitize_text_field( $user_data['first_name'] );
		}

		if ( isset( $user_data['last_name'] ) ) {
			$user_update['last_name'] = sanitize_text_field( $user_data['last_name'] );
		}

		wp_update_user( $user_update );

		// Обновляем дополнительные поля
		$field_mapping = array(
			'organization_name'  => 'organization_name',
			'department_name'    => 'department_name',
			'position'           => 'position',
			'birth_date'         => 'birth_date',
			'external_image_url' => 'external_image_url',
			'user_1c_id'         => '1c_id',
			'manager_login'      => 'manager_login',
		);

		foreach ( $field_mapping as $field_key => $data_key ) {
			if ( isset( $user_data[ $data_key ] ) ) {
				$this->fields_manager->set_user_field( $user_id, $field_key, $user_data[ $data_key ] );
			}
		}
	}

	/**
	 * Синхронизирует пользователей из JSON файла
	 *
	 * @param string $json_file_path Путь к JSON файлу
	 *
	 * @return array Результат синхронизации
	 */
	public function sync_users_from_json_file( $json_file_path ) {
		if ( ! file_exists( $json_file_path ) ) {
			return array(
				'success' => false,
				'message' => 'Файл не найден: ' . $json_file_path,
			);
		}

		$json_content = file_get_contents( $json_file_path );
		$users_data = json_decode( $json_content, true );

		if ( json_last_error() !== JSON_ERROR_NONE ) {
			return array(
				'success' => false,
				'message' => 'Ошибка парсинга JSON: ' . json_last_error_msg(),
			);
		}

		if ( ! is_array( $users_data ) ) {
			return array(
				'success' => false,
				'message' => 'Неверный формат данных JSON',
			);
		}

		$results = array(
			'success' => true,
			'processed' => 0,
			'created' => 0,
			'updated' => 0,
			'errors' => array(),
		);

		foreach ( $users_data as $user_data ) {
			$result = $this->sync_user_from_json( $user_data );

			if ( is_wp_error( $result ) ) {
				$results['errors'][] = array(
					'login' => isset( $user_data['login'] ) ? $user_data['login'] : 'unknown',
					'error' => $result->get_error_message(),
				);
			} else {
				$results['processed']++;
				// Определяем, был ли пользователь создан или обновлен
				// (упрощенная логика - можно улучшить)
				$user = get_user_by( 'id', $result );
				if ( $user && strtotime( $user->user_registered ) > ( time() - 60 ) ) {
					$results['created']++;
				} else {
					$results['updated']++;
				}
			}
		}

		return $results;
	}
}

