<?php
/**
 * Менеджер дней рождений
 *
 * @package SegezhaBirthdays
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Segezha_Birthday_Manager {
	private static $instance = null;

	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	private function __construct() {
	}

	public function get_birthdays_by_organizations( $organization_tags = array(), $limit = 10, $days_ahead = 30 ) {
		return array(); // Временно возвращаем пустой массив
	}

	public function get_department_birthdays( $user_id, $limit = 10 ) {
		return array(); // Временно возвращаем пустой массив
	}

	public function get_managers_birthdays( $user_id, $limit = 10 ) {
		return array(); // Временно возвращаем пустой массив
	}
}

