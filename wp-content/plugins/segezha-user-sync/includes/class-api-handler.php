<?php
/**
 * Обработчик API
 *
 * Обеспечивает REST API для синхронизации пользователей
 *
 * @package SegezhaUserSync
 * @since 1.0.0
 */

// Если файл вызывается напрямую, прерываем выполнение
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Класс для обработки API запросов
 *
 * @since 1.0.0
 */
class Segezha_API_Handler {

	/**
	 * Единственный экземпляр класса (Singleton)
	 *
	 * @var Segezha_API_Handler
	 */
	private static $instance = null;

	/**
	 * Namespace для REST API
	 *
	 * @var string
	 */
	private $namespace = 'segezha/v1';

	/**
	 * Получить единственный экземпляр класса
	 *
	 * @return Segezha_API_Handler
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
		$this->init_hooks();
	}

	/**
	 * Инициализирует хуки WordPress
	 *
	 * @return void
	 */
	private function init_hooks() {
		add_action( 'rest_api_init', array( $this, 'register_routes' ) );
	}

	/**
	 * Регистрирует маршруты REST API
	 *
	 * @return void
	 */
	public function register_routes() {
		// Эндпоинт для синхронизации одного пользователя
		register_rest_route(
			$this->namespace,
			'/sync-user',
			array(
				'methods'             => 'POST',
				'callback'           => array( $this, 'sync_user' ),
				'permission_callback' => array( $this, 'check_permissions' ),
				'args'                => array(
					'login' => array(
						'required' => true,
						'type'     => 'string',
					),
					'1c_id' => array(
						'required' => true,
						'type'     => 'string',
					),
				),
			)
		);

		// Эндпоинт для получения статуса последней синхронизации
		register_rest_route(
			$this->namespace,
			'/sync-status',
			array(
				'methods'             => 'GET',
				'callback'           => array( $this, 'get_sync_status' ),
				'permission_callback' => array( $this, 'check_permissions' ),
			)
		);
	}

	/**
	 * Проверяет права доступа к API
	 *
	 * @param WP_REST_Request $request Объект запроса
	 *
	 * @return bool
	 */
	public function check_permissions( $request ) {
		// Здесь можно добавить проверку токена или других механизмов аутентификации
		// Пока разрешаем только для администраторов
		return current_user_can( 'manage_options' );
	}

	/**
	 * Синхронизирует пользователя через API
	 *
	 * @param WP_REST_Request $request Объект запроса
	 *
	 * @return WP_REST_Response|WP_Error
	 */
	public function sync_user( $request ) {
		$user_data = $request->get_json_params();

		if ( empty( $user_data ) ) {
			return new WP_Error(
				'invalid_data',
				'Данные пользователя не предоставлены',
				array( 'status' => 400 )
			);
		}

		$sync_service = Segezha_User_Sync_Service::get_instance();
		$result = $sync_service->sync_user_from_json( $user_data );

		if ( is_wp_error( $result ) ) {
			return new WP_REST_Response(
				array(
					'success' => false,
					'message' => $result->get_error_message(),
				),
				400
			);
		}

		return new WP_REST_Response(
			array(
				'success' => true,
				'user_id' => $result,
				'message' => 'Пользователь успешно синхронизирован',
			),
			200
		);
	}

	/**
	 * Возвращает статус последней синхронизации
	 *
	 * @param WP_REST_Request $request Объект запроса
	 *
	 * @return WP_REST_Response
	 */
	public function get_sync_status( $request ) {
		$last_sync_result = get_option( 'segezha_last_sync_result', array() );
		$last_sync_time = get_option( 'segezha_last_sync_time', '' );

		return new WP_REST_Response(
			array(
				'last_sync_time' => $last_sync_time,
				'last_sync_result' => $last_sync_result,
			),
			200
		);
	}
}

