<?php
/**
 * Plugin Name: Segezha User Sync
 * Plugin URI: https://segezha-group.com
 * Description: Плагин для синхронизации пользователей с внешними системами и 1С ЗУП. Добавляет дополнительные поля пользователей и обеспечивает автоматическую синхронизацию данных.
 * Version: 1.0.0
 * Author: Segezha Group
 * Author URI: https://segezha-group.com
 * License: GPL v2 or later
 * Text Domain: segezha-user-sync
 * Domain Path: /languages
 * Requires at least: 5.8
 * Requires PHP: 7.4
 *
 * @package SegezhaUserSync
 * @since 1.0.0
 */

// Если файл вызывается напрямую, прерываем выполнение
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Определяем константы плагина
define( 'SEGEZHA_USER_SYNC_VERSION', '1.0.0' );
define( 'SEGEZHA_USER_SYNC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SEGEZHA_USER_SYNC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'SEGEZHA_USER_SYNC_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

/**
 * Главный класс плагина
 *
 * @since 1.0.0
 */
class Segezha_User_Sync {
	/**
	 * Единственный экземпляр класса (Singleton)
	 *
	 * @var Segezha_User_Sync
	 */
	private static $instance = null;

	/**
	 * Получить единственный экземпляр класса
	 *
	 * @return Segezha_User_Sync
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Конструктор класса
	 *
	 * Инициализирует плагин и подключает необходимые компоненты
	 */
	private function __construct() {
		$this->load_dependencies();
		$this->init_hooks();
	}

	/**
	 * Загружает зависимости плагина
	 *
	 * @return void
	 */
	private function load_dependencies() {
		require_once SEGEZHA_USER_SYNC_PLUGIN_DIR . 'includes/class-user-fields-manager.php';
		require_once SEGEZHA_USER_SYNC_PLUGIN_DIR . 'includes/class-user-sync-service.php';
		require_once SEGEZHA_USER_SYNC_PLUGIN_DIR . 'includes/class-cron-manager.php';
		require_once SEGEZHA_USER_SYNC_PLUGIN_DIR . 'includes/class-api-handler.php';
	}

	/**
	 * Инициализирует хуки WordPress
	 *
	 * @return void
	 */
	private function init_hooks() {
		add_action( 'plugins_loaded', array( $this, 'init' ) );
		register_activation_hook( __FILE__, array( $this, 'activate' ) );
		register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );
	}

	/**
	 * Инициализация плагина после загрузки WordPress
	 *
	 * @return void
	 */
	public function init() {
		// Инициализируем менеджер полей пользователя
		Segezha_User_Fields_Manager::get_instance();

		// Инициализируем сервис синхронизации
		Segezha_User_Sync_Service::get_instance();

		// Инициализируем менеджер кронов
		Segezha_Cron_Manager::get_instance();

		// Инициализируем обработчик API
		Segezha_API_Handler::get_instance();
	}

	/**
	 * Активация плагина
	 *
	 * Выполняется при активации плагина
	 *
	 * @return void
	 */
	public function activate() {
		// Создаем таблицы, если необходимо
		// Устанавливаем кроны
		Segezha_Cron_Manager::get_instance()->schedule_cron();
		flush_rewrite_rules();
	}

	/**
	 * Деактивация плагина
	 *
	 * Выполняется при деактивации плагина
	 *
	 * @return void
	 */
	public function deactivate() {
		// Удаляем кроны
		Segezha_Cron_Manager::get_instance()->unschedule_cron();
		flush_rewrite_rules();
	}
}

/**
 * Инициализация плагина
 *
 * @return Segezha_User_Sync
 */
function segezha_user_sync() {
	return Segezha_User_Sync::get_instance();
}

// Запускаем плагин
segezha_user_sync();

