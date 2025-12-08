<?php
/**
 * Настройки фильтрации
 *
 * @package SegezhaBirthdays
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Segezha_Filter_Settings {
	private static $instance = null;

	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	private function __construct() {
		$this->init_hooks();
	}

	private function init_hooks() {
		add_action( 'show_user_profile', array( $this, 'add_filter_settings_fields' ) );
		add_action( 'edit_user_profile', array( $this, 'add_filter_settings_fields' ) );
		add_action( 'personal_options_update', array( $this, 'save_filter_settings_fields' ) );
		add_action( 'edit_user_profile_update', array( $this, 'save_filter_settings_fields' ) );
	}

	public function get_user_filter_settings( $user_id ) {
		$organizations = get_user_meta( $user_id, 'segezha_filter_organizations', true );
		$departments   = get_user_meta( $user_id, 'segezha_filter_departments', true );

		if ( empty( $organizations ) && class_exists( 'Segezha_User_Organizations' ) ) {
			$user_orgs = Segezha_User_Organizations::get_instance()->get_user_organizations( $user_id );
			$organizations = $user_orgs;
		}

		if ( empty( $departments ) && class_exists( 'Segezha_User_Organizations' ) ) {
			$user_depts = Segezha_User_Organizations::get_instance()->get_user_departments( $user_id );
			$departments = $user_depts;
		}

		return array(
			'organizations' => is_array( $organizations ) ? $organizations : array( $organizations ),
			'departments'   => is_array( $departments ) ? $departments : array( $departments ),
		);
	}

	public function add_filter_settings_fields( $user ) {
		// Временно пустая функция
	}

	public function save_filter_settings_fields( $user_id ) {
		// Временно пустая функция
	}
}

