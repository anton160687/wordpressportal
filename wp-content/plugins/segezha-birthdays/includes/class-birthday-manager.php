<?php
/**
 * Менеджер дней рождений
 *
 * Управляет логикой работы с днями рождения пользователей
 *
 * @package SegezhaBirthdays
 * @since 1.0.0
 */

// Если файл вызывается напрямую, прерываем выполнение
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Класс для управления днями рождения
 *
 * @since 1.0.0
 */
class Segezha_Birthday_Manager {

	/**
	 * Единственный экземпляр класса (Singleton)
	 *
	 * @var Segezha_Birthday_Manager
	 */
	private static $instance = null;

	/**
	 * Получить единственный экземпляр класса
	 *
	 * @return Segezha_Birthday_Manager
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
		// Инициализация при необходимости
	}

	/**
	 * Получить дни рождения пользователей по организации
	 *
	 * @param array $organization_tags Массив тегов организаций для фильтрации
	 * @param int   $limit            Количество записей для вывода
	 * @param int   $days_ahead       Количество дней вперед для поиска
	 *
	 * @return array Массив пользователей с днями рождения
	 */
	public function get_birthdays_by_organizations( $organization_tags = array(), $limit = 10, $days_ahead = 30 ) {
		$users = array();

		// Получаем всех пользователей
		$args = array(
			'meta_query' => array(
				'relation' => 'AND',
				array(
					'key'     => 'segezha_birth_date',
					'compare' => 'EXISTS',
				),
				array(
					'key'     => 'segezha_show_birthday',
					'value'   => '1',
					'compare' => '=',
				),
			),
		);

		// Если указаны теги организаций, фильтруем по ним
		if ( ! empty( $organization_tags ) && is_array( $organization_tags ) ) {
			// Получаем пользователей с указанными организациями в настройках фильтра
			$filtered_user_ids = $this->get_users_by_filter_organizations( $organization_tags );
			if ( ! empty( $filtered_user_ids ) ) {
				$args['include'] = $filtered_user_ids;
			} else {
				return array(); // Нет пользователей с такими организациями
			}
		}

		$wp_users = get_users( $args );

		$current_date = new DateTime();
		$end_date     = clone $current_date;
		$end_date->modify( "+{$days_ahead} days" );

		foreach ( $wp_users as $user ) {
			$birth_date_str = get_user_meta( $user->ID, 'segezha_birth_date', true );
			if ( empty( $birth_date_str ) ) {
				continue;
			}

			$birth_date = DateTime::createFromFormat( 'Y-m-d', $birth_date_str );
			if ( ! $birth_date ) {
				continue;
			}

			// Вычисляем день рождения в текущем году
			$this_year_birthday = clone $birth_date;
			$this_year_birthday->setDate( $current_date->format( 'Y' ), $birth_date->format( 'm' ), $birth_date->format( 'd' ) );

			// Если день рождения уже прошел в этом году, берем следующий год
			if ( $this_year_birthday < $current_date ) {
				$this_year_birthday->modify( '+1 year' );
			}

			// Проверяем, попадает ли день рождения в диапазон
			if ( $this_year_birthday >= $current_date && $this_year_birthday <= $end_date ) {
				$users[] = array(
					'user_id'      => $user->ID,
					'name'         => $user->display_name,
					'birth_date'   => $birth_date_str,
					'birthday'     => $this_year_birthday->format( 'd F' ),
					'days_until'   => $current_date->diff( $this_year_birthday )->days,
					'organization' => get_user_meta( $user->ID, 'segezha_organization_name', true ),
					'department'   => get_user_meta( $user->ID, 'segezha_department_name', true ),
					'position'     => get_user_meta( $user->ID, 'segezha_position', true ),
					'avatar'       => $this->get_user_avatar_url( $user->ID ),
				);
			}
		}

		// Сортируем по дате дня рождения
		usort( $users, array( $this, 'sort_by_birthday' ) );

		// Ограничиваем количество
		return array_slice( $users, 0, $limit );
	}

	/**
	 * Получить дни рождения коллег из подразделения
	 *
	 * @param int $user_id ID пользователя
	 * @param int $limit   Количество записей
	 *
	 * @return array Массив пользователей с днями рождения
	 */
	public function get_department_birthdays( $user_id, $limit = 10 ) {
		$user_organizations = Segezha_User_Organizations::get_instance();
		$user_departments   = $user_organizations->get_user_departments( $user_id );

		if ( empty( $user_departments ) ) {
			return array();
		}

		$args = array(
			'meta_query' => array(
				'relation' => 'AND',
				array(
					'key'     => 'segezha_birth_date',
					'compare' => 'EXISTS',
				),
				array(
					'key'     => 'segezha_show_birthday',
					'value'   => '1',
					'compare' => '=',
				),
				array(
					'key'     => 'segezha_department_name',
					'value'   => $user_departments,
					'compare' => 'IN',
				),
			),
			'exclude'    => array( $user_id ), // Исключаем самого пользователя
		);

		return $this->get_birthdays_from_users( get_users( $args ), $limit );
	}

	/**
	 * Получить дни рождения руководителей
	 *
	 * @param int $user_id ID пользователя
	 * @param int $limit   Количество записей
	 *
	 * @return array Массив пользователей с днями рождения
	 */
	public function get_managers_birthdays( $user_id, $limit = 10 ) {
		$manager_logins = get_user_meta( $user_id, 'segezha_manager_login', true );

		if ( empty( $manager_logins ) ) {
			return array();
		}

		// Поддерживаем множественных руководителей (через запятую или массив)
		if ( is_string( $manager_logins ) ) {
			$manager_logins = array_map( 'trim', explode( ',', $manager_logins ) );
		}

		$manager_ids = array();
		foreach ( $manager_logins as $login ) {
			$manager = get_user_by( 'login', $login );
			if ( $manager ) {
				$manager_ids[] = $manager->ID;
			}
		}

		if ( empty( $manager_ids ) ) {
			return array();
		}

		$args = array(
			'include'    => $manager_ids,
			'meta_query' => array(
				'relation' => 'AND',
				array(
					'key'     => 'segezha_birth_date',
					'compare' => 'EXISTS',
				),
				array(
					'key'     => 'segezha_show_birthday',
					'value'   => '1',
					'compare' => '=',
				),
			),
		);

		return $this->get_birthdays_from_users( get_users( $args ), $limit );
	}

	/**
	 * Получить дни рождения из массива пользователей
	 *
	 * @param array $wp_users Массив объектов WP_User
	 * @param int   $limit    Количество записей
	 *
	 * @return array Массив пользователей с днями рождения
	 */
	private function get_birthdays_from_users( $wp_users, $limit = 10 ) {
		$users = array();

		$current_date = new DateTime();
		$end_date     = clone $current_date;
		$end_date->modify( '+30 days' );

		foreach ( $wp_users as $user ) {
			$birth_date_str = get_user_meta( $user->ID, 'segezha_birth_date', true );
			if ( empty( $birth_date_str ) ) {
				continue;
			}

			$birth_date = DateTime::createFromFormat( 'Y-m-d', $birth_date_str );
			if ( ! $birth_date ) {
				continue;
			}

			// Вычисляем день рождения в текущем году
			$this_year_birthday = clone $birth_date;
			$this_year_birthday->setDate( $current_date->format( 'Y' ), $birth_date->format( 'm' ), $birth_date->format( 'd' ) );

			if ( $this_year_birthday < $current_date ) {
				$this_year_birthday->modify( '+1 year' );
			}

			if ( $this_year_birthday >= $current_date && $this_year_birthday <= $end_date ) {
				$users[] = array(
					'user_id'      => $user->ID,
					'name'         => $user->display_name,
					'birth_date'   => $birth_date_str,
					'birthday'     => $this_year_birthday->format( 'd F' ),
					'days_until'   => $current_date->diff( $this_year_birthday )->days,
					'organization' => get_user_meta( $user->ID, 'segezha_organization_name', true ),
					'department'   => get_user_meta( $user->ID, 'segezha_department_name', true ),
					'position'     => get_user_meta( $user->ID, 'segezha_position', true ),
					'avatar'       => $this->get_user_avatar_url( $user->ID ),
				);
			}
		}

		usort( $users, array( $this, 'sort_by_birthday' ) );

		return array_slice( $users, 0, $limit );
	}

	/**
	 * Получить пользователей по организациям из настроек фильтра
	 *
	 * @param array $organization_tags Массив тегов организаций
	 *
	 * @return array Массив ID пользователей
	 */
	private function get_users_by_filter_organizations( $organization_tags ) {
		$user_ids = array();

		// Получаем всех пользователей с настройками фильтра
		$users = get_users(
			array(
				'meta_key' => 'segezha_filter_organizations',
			)
		);

		foreach ( $users as $user ) {
			$filter_orgs = get_user_meta( $user->ID, 'segezha_filter_organizations', true );
			if ( empty( $filter_orgs ) ) {
				// Если фильтр не настроен, используем организации из профиля
				$user_orgs = Segezha_User_Organizations::get_instance()->get_user_organizations( $user->ID );
				$filter_orgs = $user_orgs;
			}

			// Проверяем пересечение тегов
			if ( ! empty( array_intersect( $organization_tags, $filter_orgs ) ) ) {
				$user_ids[] = $user->ID;
			}
		}

		return $user_ids;
	}

	/**
	 * Получить URL аватара пользователя
	 *
	 * @param int $user_id ID пользователя
	 *
	 * @return string URL аватара
	 */
	private function get_user_avatar_url( $user_id ) {
		if ( class_exists( 'Segezha_User_Fields_Manager' ) ) {
			$fields_manager = Segezha_User_Fields_Manager::get_instance();
			$user_image_id  = $fields_manager->get_user_field( $user_id, 'user_image_id' );
			$external_url   = $fields_manager->get_user_field( $user_id, 'external_image_url' );

			if ( $user_image_id ) {
				return wp_get_attachment_image_url( $user_image_id, 'thumbnail' );
			} elseif ( $external_url ) {
				return esc_url( $external_url );
			}
		}

		return get_avatar_url( $user_id );
	}

	/**
	 * Сортировка по дню рождения
	 *
	 * @param array $a Первый пользователь
	 * @param array $b Второй пользователь
	 *
	 * @return int Результат сравнения
	 */
	private function sort_by_birthday( $a, $b ) {
		return $a['days_until'] - $b['days_until'];
	}
}

