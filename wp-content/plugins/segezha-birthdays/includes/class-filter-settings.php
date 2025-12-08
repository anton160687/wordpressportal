<?php
/**
 * Настройки фильтрации
 *
 * Управляет настройками фильтрации для пользователей
 *
 * @package SegezhaBirthdays
 * @since 1.0.0
 */

// Если файл вызывается напрямую, прерываем выполнение
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Класс для управления настройками фильтрации
 *
 * @since 1.0.0
 */
class Segezha_Filter_Settings {

	/**
	 * Единственный экземпляр класса (Singleton)
	 *
	 * @var Segezha_Filter_Settings
	 */
	private static $instance = null;

	/**
	 * Получить единственный экземпляр класса
	 *
	 * @return Segezha_Filter_Settings
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
		add_action( 'show_user_profile', array( $this, 'add_filter_settings_fields' ) );
		add_action( 'edit_user_profile', array( $this, 'add_filter_settings_fields' ) );

		// Сохраняем поля
		add_action( 'personal_options_update', array( $this, 'save_filter_settings_fields' ) );
		add_action( 'edit_user_profile_update', array( $this, 'save_filter_settings_fields' ) );
	}

	/**
	 * Получить настройки фильтрации пользователя
	 *
	 * @param int $user_id ID пользователя
	 *
	 * @return array Массив настроек фильтрации
	 */
	public function get_user_filter_settings( $user_id ) {
		$organizations = get_user_meta( $user_id, 'segezha_filter_organizations', true );
		$departments   = get_user_meta( $user_id, 'segezha_filter_departments', true );

		// Если настройки не заданы, копируем из профиля
		if ( empty( $organizations ) ) {
			$user_orgs = Segezha_User_Organizations::get_instance()->get_user_organizations( $user_id );
			$organizations = $user_orgs;
		}

		if ( empty( $departments ) ) {
			$user_depts = Segezha_User_Organizations::get_instance()->get_user_departments( $user_id );
			$departments = $user_depts;
		}

		return array(
			'organizations' => is_array( $organizations ) ? $organizations : array( $organizations ),
			'departments'   => is_array( $departments ) ? $departments : array( $departments ),
		);
	}

	/**
	 * Добавить поля настроек фильтрации в профиль пользователя
	 *
	 * @param WP_User $user Объект пользователя
	 *
	 * @return void
	 */
	public function add_filter_settings_fields( $user ) {
		$filter_settings = $this->get_user_filter_settings( $user->ID );
		$show_birthday   = get_user_meta( $user->ID, 'segezha_show_birthday', true );
		?>
		<h3><?php esc_html_e( 'Настройки фильтрации и приватности', 'segezha-birthdays' ); ?></h3>
		<table class="form-table">
			<tr>
				<th>
					<label for="segezha_filter_organizations">
						<?php esc_html_e( 'Организации для фильтрации', 'segezha-birthdays' ); ?>
					</label>
				</th>
				<td>
					<p class="description">
						<?php esc_html_e( 'Выберите организации, новости и события которых вы хотите видеть. По умолчанию используются организации из вашего профиля.', 'segezha-birthdays' ); ?>
					</p>
					<textarea
						name="segezha_filter_organizations"
						id="segezha_filter_organizations"
						rows="3"
						class="large-text"
					><?php echo esc_textarea( implode( "\n", $filter_settings['organizations'] ) ); ?></textarea>
					<p class="description">
						<button type="button" class="button" id="copy-orgs-from-profile">
							<?php esc_html_e( 'Скопировать из профиля', 'segezha-birthdays' ); ?>
						</button>
					</p>
				</td>
			</tr>
			<tr>
				<th>
					<label for="segezha_filter_departments">
						<?php esc_html_e( 'Подразделения для фильтрации', 'segezha-birthdays' ); ?>
					</label>
				</th>
				<td>
					<p class="description">
						<?php esc_html_e( 'Выберите подразделения, новости и события которых вы хотите видеть. По умолчанию используются подразделения из вашего профиля.', 'segezha-birthdays' ); ?>
					</p>
					<textarea
						name="segezha_filter_departments"
						id="segezha_filter_departments"
						rows="3"
						class="large-text"
					><?php echo esc_textarea( implode( "\n", $filter_settings['departments'] ) ); ?></textarea>
					<p class="description">
						<button type="button" class="button" id="copy-depts-from-profile">
							<?php esc_html_e( 'Скопировать из профиля', 'segezha-birthdays' ); ?>
						</button>
					</p>
				</td>
			</tr>
			<tr>
				<th>
					<label for="segezha_show_birthday">
						<?php esc_html_e( 'Показывать мой день рождения', 'segezha-birthdays' ); ?>
					</label>
				</th>
				<td>
					<label for="segezha_show_birthday">
						<input
							type="checkbox"
							name="segezha_show_birthday"
							id="segezha_show_birthday"
							value="1"
							<?php checked( $show_birthday, '1' ); ?>
						/>
						<?php esc_html_e( 'Разрешить показывать мой день рождения другим пользователям', 'segezha-birthdays' ); ?>
					</label>
					<p class="description">
						<?php esc_html_e( 'Если галочка выключена, ваш день рождения не будет отображаться нигде на сайте.', 'segezha-birthdays' ); ?>
					</p>
				</td>
			</tr>
		</table>
		<script>
		jQuery(document).ready(function($) {
			$('#copy-orgs-from-profile').on('click', function() {
				var profileOrgs = $('#segezha_organizations').val();
				$('#segezha_filter_organizations').val(profileOrgs);
			});
			$('#copy-depts-from-profile').on('click', function() {
				var profileDepts = $('#segezha_departments').val();
				$('#segezha_filter_departments').val(profileDepts);
			});
		});
		</script>
		<?php
	}

	/**
	 * Сохранить настройки фильтрации
	 *
	 * @param int $user_id ID пользователя
	 *
	 * @return void
	 */
	public function save_filter_settings_fields( $user_id ) {
		if ( ! current_user_can( 'edit_user', $user_id ) ) {
			return;
		}

		// Сохраняем организации для фильтрации
		if ( isset( $_POST['segezha_filter_organizations'] ) ) {
			$organizations_text = sanitize_textarea_field( $_POST['segezha_filter_organizations'] );
			$organizations      = $this->parse_multiline_field( $organizations_text );
			update_user_meta( $user_id, 'segezha_filter_organizations', $organizations );
		}

		// Сохраняем подразделения для фильтрации
		if ( isset( $_POST['segezha_filter_departments'] ) ) {
			$departments_text = sanitize_textarea_field( $_POST['segezha_filter_departments'] );
			$departments      = $this->parse_multiline_field( $departments_text );
			update_user_meta( $user_id, 'segezha_filter_departments', $departments );
		}

		// Сохраняем настройку показа дня рождения
		$show_birthday = isset( $_POST['segezha_show_birthday'] ) ? '1' : '0';
		update_user_meta( $user_id, 'segezha_show_birthday', $show_birthday );
	}

	/**
	 * Парсит многострочное поле
	 *
	 * @param string $text Текст для парсинга
	 *
	 * @return array Массив значений
	 */
	private function parse_multiline_field( $text ) {
		if ( empty( $text ) ) {
			return array();
		}

		$lines = preg_split( '/[\r\n,]+/', $text );
		$lines = array_map( 'trim', $lines );
		$lines = array_filter( $lines );

		return array_values( $lines );
	}
}

