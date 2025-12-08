<?php
/**
 * Plugin Name: Segezha Birthdays
 * Plugin URI: https://segezha-group.com
 * Description: Плагин для управления и отображения дней рождений сотрудников. Поддерживает множественные организации и подразделения, настройки фильтрации и приватности.
 * Version: 1.0.0
 * Author: Segezha Group
 * Author URI: https://segezha-group.com
 * License: GPL v2 or later
 * Text Domain: segezha-birthdays
 * Domain Path: /languages
 * Requires at least: 5.8
 * Requires PHP: 7.4
 *
 * @package SegezhaBirthdays
 * @since 1.0.0
 */

// Если файл вызывается напрямую, прерываем выполнение
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Определяем константы плагина
define( 'SEGEZHA_BIRTHDAYS_VERSION', '1.0.0' );
define( 'SEGEZHA_BIRTHDAYS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SEGEZHA_BIRTHDAYS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'SEGEZHA_BIRTHDAYS_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

/**
 * Главный класс плагина
 *
 * @since 1.0.0
 */
class Segezha_Birthdays {
	/**
	 * Единственный экземпляр класса (Singleton)
	 *
	 * @var Segezha_Birthdays
	 */
	private static $instance = null;

	/**
	 * Получить единственный экземпляр класса
	 *
	 * @return Segezha_Birthdays
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
		$includes_dir = SEGEZHA_BIRTHDAYS_PLUGIN_DIR . 'includes/';
		
		if ( file_exists( $includes_dir . 'class-birthday-manager.php' ) ) {
			require_once $includes_dir . 'class-birthday-manager.php';
		}
		if ( file_exists( $includes_dir . 'class-birthday-display.php' ) ) {
			require_once $includes_dir . 'class-birthday-display.php';
		}
		if ( file_exists( $includes_dir . 'class-user-organizations.php' ) ) {
			require_once $includes_dir . 'class-user-organizations.php';
		}
		if ( file_exists( $includes_dir . 'class-filter-settings.php' ) ) {
			require_once $includes_dir . 'class-filter-settings.php';
		}
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
		// Инициализируем менеджер дней рождений
		if ( class_exists( 'Segezha_Birthday_Manager' ) ) {
			Segezha_Birthday_Manager::get_instance();
		}

		// Инициализируем отображение дней рождений
		if ( class_exists( 'Segezha_Birthday_Display' ) ) {
			Segezha_Birthday_Display::get_instance();
		}

		// Инициализируем управление организациями пользователя
		if ( class_exists( 'Segezha_User_Organizations' ) ) {
			Segezha_User_Organizations::get_instance();
		}

		// Инициализируем настройки фильтрации
		if ( class_exists( 'Segezha_Filter_Settings' ) ) {
			Segezha_Filter_Settings::get_instance();
		}
	}

	/**
	 * Активация плагина
	 *
	 * Выполняется при активации плагина
	 *
	 * @return void
	 */
	public function activate() {
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
		flush_rewrite_rules();
	}
}

/**
 * Инициализация плагина
 *
 * @return Segezha_Birthdays
 */
function segezha_birthdays() {
	return Segezha_Birthdays::get_instance();
}

// Запускаем плагин
segezha_birthdays();

