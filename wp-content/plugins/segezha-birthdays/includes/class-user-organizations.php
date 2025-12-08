<?php
/**
 * Управление организациями пользователя
 *
 * @package SegezhaBirthdays
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Segezha_User_Organizations {
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
		add_action( 'show_user_profile', array( $this, 'add_organizations_fields' ) );
		add_action( 'edit_user_profile', array( $this, 'add_organizations_fields' ) );
		add_action( 'personal_options_update', array( $this, 'save_organizations_fields' ) );
		add_action( 'edit_user_profile_update', array( $this, 'save_organizations_fields' ) );
	}

	public function get_user_organizations( $user_id ) {
		$organizations = get_user_meta( $user_id, 'segezha_organizations', true );
		if ( empty( $organizations ) ) {
			$single_org = get_user_meta( $user_id, 'segezha_organization_name', true );
			return ! empty( $single_org ) ? array( $single_org ) : array();
		}
		return is_array( $organizations ) ? $organizations : array( $organizations );
	}

	public function get_user_departments( $user_id ) {
		$departments = get_user_meta( $user_id, 'segezha_departments', true );
		if ( empty( $departments ) ) {
			$single_dept = get_user_meta( $user_id, 'segezha_department_name', true );
			return ! empty( $single_dept ) ? array( $single_dept ) : array();
		}
		return is_array( $departments ) ? $departments : array( $departments );
	}

	public function add_organizations_fields( $user ) {
		// Временно пустая функция
	}

	public function save_organizations_fields( $user_id ) {
		// Временно пустая функция
	}
}

