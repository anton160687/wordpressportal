<?php
/**
 * Менеджер кронов
 *
 * Управляет расписанием автоматической синхронизации пользователей
 *
 * @package SegezhaUserSync
 * @since 1.0.0
 */

// Если файл вызывается напрямую, прерываем выполнение
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Класс для управления кронами синхронизации
 *
 * @since 1.0.0
 */
class Segezha_Cron_Manager {

	/**
	 * Единственный экземпляр класса (Singleton)
	 *
	 * @var Segezha_Cron_Manager
	 */
	private static $instance = null;

	/**
	 * Название хука крона
	 *
	 * @var string
	 */
	private $cron_hook = 'segezha_sync_users_cron';

	/**
	 * Получить единственный экземпляр класса
	 *
	 * @return Segezha_Cron_Manager
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
		add_action( $this->cron_hook, array( $this, 'run_sync' ) );
	}

	/**
	 * Планирует выполнение крона
	 *
	 * @return void
	 */
	public function schedule_cron() {
		if ( ! wp_next_scheduled( $this->cron_hook ) ) {
			// Запускаем синхронизацию каждый день в 2:00 ночи
			wp_schedule_event( time(), 'daily', $this->cron_hook );
		}
	}

	/**
	 * Отменяет выполнение крона
	 *
	 * @return void
	 */
	public function unschedule_cron() {
		$timestamp = wp_next_scheduled( $this->cron_hook );
		if ( $timestamp ) {
			wp_unschedule_event( $timestamp, $this->cron_hook );
		}
	}

	/**
	 * Выполняет синхронизацию пользователей
	 *
	 * @return void
	 */
	public function run_sync() {
		$sync_service = Segezha_User_Sync_Service::get_instance();

		// Получаем путь к JSON файлу из настроек
		$json_file_path = get_option( 'segezha_1c_json_path', '' );

		if ( empty( $json_file_path ) ) {
			error_log( 'Segezha User Sync: Путь к JSON файлу не настроен' );
			return;
		}

		$result = $sync_service->sync_users_from_json_file( $json_file_path );

		// Логируем результат
		if ( $result['success'] ) {
			error_log(
				sprintf(
					'Segezha User Sync: Обработано %d пользователей (создано: %d, обновлено: %d)',
					$result['processed'],
					$result['created'],
					$result['updated']
				)
			);
		} else {
			error_log( 'Segezha User Sync: Ошибка синхронизации - ' . $result['message'] );
		}

		// Сохраняем результат последней синхронизации
		update_option( 'segezha_last_sync_result', $result );
		update_option( 'segezha_last_sync_time', current_time( 'mysql' ) );
	}
}

