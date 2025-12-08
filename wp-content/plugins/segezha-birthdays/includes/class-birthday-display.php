<?php
/**
 * Отображение дней рождений
 *
 * @package SegezhaBirthdays
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Segezha_Birthday_Display {
	private static $instance = null;
	public $birthday_manager;

	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	private function __construct() {
		if ( class_exists( 'Segezha_Birthday_Manager' ) ) {
			$this->birthday_manager = Segezha_Birthday_Manager::get_instance();
		}
		$this->init_hooks();
	}

	private function init_hooks() {
		add_shortcode( 'segezha_birthdays', array( $this, 'render_birthdays_shortcode' ) );
	}

	public function render_main_page_birthdays( $organization_tags = array(), $limit = 6 ) {
		// Временно пустая функция
	}

	public function render_lk_birthdays( $user_id ) {
		// Временно пустая функция
	}

	public function render_birthdays_shortcode( $atts ) {
		return '';
	}
}

