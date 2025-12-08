<?php
/**
 * Управление организациями пользователя
 *
 * Поддерживает множественные организации и подразделения для одного пользователя
 *
 * @package SegezhaBirthdays
 * @since 1.0.0
 */

// Если файл вызывается напрямую, прерываем выполнение
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Класс для управления организациями пользователя
 *
 * @since 1.0.0
 */
class Segezha_User_Organizations {

	/**
	 * Единственный экземпляр класса (Singleton)
	 *
	 * @var Segezha_User_Organizations
	 */
	private static $instance = null;

	/**
	 * Получить единственный экземпляр класса
	 *
	 * @return Segezha_User_Organizations
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
		// Добавляем поля в профиль пользователя
		add_action( 'show_user_profile', array( $this, 'add_organizations_fields' ) );
		add_action( 'edit_user_profile', array( $this, 'add_organizations_fields' ) );

		// Сохраняем поля
		add_action( 'personal_options_update', array( $this, 'save_organizations_fields' ) );
		add_action( 'edit_user_profile_update', array( $this, 'save_organizations_fields' ) );
	}

	/**
	 * Получить организации пользователя
	 *
	 * @param int $user_id ID пользователя
	 *
	 * @return array Массив названий организаций
	 */
	public function get_user_organizations( $user_id ) {
		$organizations = get_user_meta( $user_id, 'segezha_organizations', true );

		if ( empty( $organizations ) ) {
			// Если множественные организации не заданы, используем старую структуру
			$single_org = get_user_meta( $user_id, 'segezha_organization_name', true );
			return ! empty( $single_org ) ? array( $single_org ) : array();
		}

		return is_array( $organizations ) ? $organizations : array( $organizations );
	}

	/**
	 * Получить подразделения пользователя
	 *
	 * @param int $user_id ID пользователя
	 *
	 * @return array Массив названий подразделений
	 */
	public function get_user_departments( $user_id ) {
		$departments = get_user_meta( $user_id, 'segezha_departments', true );

		if ( empty( $departments ) ) {
			// Если множественные подразделения не заданы, используем старую структуру
			$single_dept = get_user_meta( $user_id, 'segezha_department_name', true );
			return ! empty( $single_dept ) ? array( $single_dept ) : array();
		}

		return is_array( $departments ) ? $departments : array( $departments );
	}

	/**
	 * Добавить поля организаций в профиль пользователя
	 *
	 * @param WP_User $user Объект пользователя
	 *
	 * @return void
	 */
	public function add_organizations_fields( $user ) {
		$organizations = $this->get_user_organizations( $user->ID );
		$departments   = $this->get_user_departments( $user->ID );
		?>
		<h3><?php esc_html_e( 'Организации и подразделения', 'segezha-birthdays' ); ?></h3>
		<table class="form-table">
			<tr>
				<th>
					<label for="segezha_organizations">
						<?php esc_html_e( 'Организации', 'segezha-birthdays' ); ?>
					</label>
				</th>
				<td>
					<p class="description">
						<?php esc_html_e( 'Пользователь может работать в нескольких организациях. Укажите каждую организацию с новой строки или через запятую.', 'segezha-birthdays' ); ?>
					</p>
					<textarea
						name="segezha_organizations"
						id="segezha_organizations"
						rows="3"
						class="large-text"
					><?php echo esc_textarea( implode( "\n", $organizations ) ); ?></textarea>
				</td>
			</tr>
			<tr>
				<th>
					<label for="segezha_departments">
						<?php esc_html_e( 'Подразделения', 'segezha-birthdays' ); ?>
					</label>
				</th>
				<td>
					<p class="description">
						<?php esc_html_e( 'Пользователь может работать в нескольких подразделениях. Укажите каждое подразделение с новой строки или через запятую.', 'segezha-birthdays' ); ?>
					</p>
					<textarea
						name="segezha_departments"
						id="segezha_departments"
						rows="3"
						class="large-text"
					><?php echo esc_textarea( implode( "\n", $departments ) ); ?></textarea>
				</td>
			</tr>
		</table>
		<?php
	}

	/**
	 * Сохранить поля организаций
	 *
	 * @param int $user_id ID пользователя
	 *
	 * @return void
	 */
	public function save_organizations_fields( $user_id ) {
		if ( ! current_user_can( 'edit_user', $user_id ) ) {
			return;
		}

		// Сохраняем организации
		if ( isset( $_POST['segezha_organizations'] ) ) {
			$organizations_text = sanitize_textarea_field( $_POST['segezha_organizations'] );
			$organizations      = $this->parse_multiline_field( $organizations_text );
			update_user_meta( $user_id, 'segezha_organizations', $organizations );
		}

		// Сохраняем подразделения
		if ( isset( $_POST['segezha_departments'] ) ) {
			$departments_text = sanitize_textarea_field( $_POST['segezha_departments'] );
			$departments      = $this->parse_multiline_field( $departments_text );
			update_user_meta( $user_id, 'segezha_departments', $departments );
		}
	}

	/**
	 * Парсит многострочное поле (разделители: перенос строки или запятая)
	 *
	 * @param string $text Текст для парсинга
	 *
	 * @return array Массив значений
	 */
	private function parse_multiline_field( $text ) {
		if ( empty( $text ) ) {
			return array();
		}

		// Разделяем по переносу строки или запятой
		$lines = preg_split( '/[\r\n,]+/', $text );
		$lines = array_map( 'trim', $lines );
		$lines = array_filter( $lines ); // Удаляем пустые значения

		return array_values( $lines );
	}
}

