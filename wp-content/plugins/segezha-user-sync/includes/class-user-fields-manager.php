<?php
/**
 * Менеджер пользовательских полей
 *
 * Управляет дополнительными полями пользователей WordPress
 *
 * @package SegezhaUserSync
 * @since 1.0.0
 */

// Если файл вызывается напрямую, прерываем выполнение
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Класс для управления дополнительными полями пользователей
 *
 * @since 1.0.0
 */
class Segezha_User_Fields_Manager {

	/**
	 * Единственный экземпляр класса (Singleton)
	 *
	 * @var Segezha_User_Fields_Manager
	 */
	private static $instance = null;

	/**
	 * Мета-ключи для пользовательских полей
	 *
	 * @var array
	 */
	private $meta_keys = array(
		'organization_name'      => 'segezha_organization_name',      // Название организации
		'department_name'        => 'segezha_department_name',        // Название подразделения
		'position'               => 'segezha_position',               // Должность
		'birth_date'             => 'segezha_birth_date',             // Дата рождения
		'external_image_url'     => 'segezha_external_image_url',     // Картинка из внешней системы
		'user_image_id'          => 'segezha_user_image_id',          // ID картинки пользователя из медиабиблиотеки
		'user_1c_id'             => 'segezha_user_1c_id',             // Идентификационный код пользователя из 1С
		'manager_login'         => 'segezha_manager_login',           // Логин непосредственного руководителя
	);

	/**
	 * Получить единственный экземпляр класса
	 *
	 * @return Segezha_User_Fields_Manager
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
	 * Инициализирует хуки WordPress
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
		add_action( 'show_user_profile', array( $this, 'add_user_fields' ) );
		add_action( 'edit_user_profile', array( $this, 'add_user_fields' ) );

		// Сохраняем поля при обновлении профиля
		add_action( 'personal_options_update', array( $this, 'save_user_fields' ) );
		add_action( 'edit_user_profile_update', array( $this, 'save_user_fields' ) );

		// Добавляем поля в REST API
		add_action( 'rest_api_init', array( $this, 'register_rest_fields' ) );
	}

	/**
	 * Добавляет дополнительные поля в профиль пользователя
	 *
	 * @param WP_User $user Объект пользователя
	 *
	 * @return void
	 */
	public function add_user_fields( $user ) {
		?>
		<h3><?php esc_html_e( 'Дополнительная информация Segezha', 'segezha-user-sync' ); ?></h3>
		<table class="form-table">
			<tr>
				<th>
					<label for="<?php echo esc_attr( $this->meta_keys['organization_name'] ); ?>">
						<?php esc_html_e( 'Название организации', 'segezha-user-sync' ); ?>
					</label>
				</th>
				<td>
					<input
						type="text"
						name="<?php echo esc_attr( $this->meta_keys['organization_name'] ); ?>"
						id="<?php echo esc_attr( $this->meta_keys['organization_name'] ); ?>"
						value="<?php echo esc_attr( get_user_meta( $user->ID, $this->meta_keys['organization_name'], true ) ); ?>"
						class="regular-text"
					/>
				</td>
			</tr>
			<tr>
				<th>
					<label for="<?php echo esc_attr( $this->meta_keys['department_name'] ); ?>">
						<?php esc_html_e( 'Название подразделения', 'segezha-user-sync' ); ?>
					</label>
				</th>
				<td>
					<input
						type="text"
						name="<?php echo esc_attr( $this->meta_keys['department_name'] ); ?>"
						id="<?php echo esc_attr( $this->meta_keys['department_name'] ); ?>"
						value="<?php echo esc_attr( get_user_meta( $user->ID, $this->meta_keys['department_name'], true ) ); ?>"
						class="regular-text"
					/>
				</td>
			</tr>
			<tr>
				<th>
					<label for="<?php echo esc_attr( $this->meta_keys['position'] ); ?>">
						<?php esc_html_e( 'Должность', 'segezha-user-sync' ); ?>
					</label>
				</th>
				<td>
					<input
						type="text"
						name="<?php echo esc_attr( $this->meta_keys['position'] ); ?>"
						id="<?php echo esc_attr( $this->meta_keys['position'] ); ?>"
						value="<?php echo esc_attr( get_user_meta( $user->ID, $this->meta_keys['position'], true ) ); ?>"
						class="regular-text"
					/>
				</td>
			</tr>
			<tr>
				<th>
					<label for="<?php echo esc_attr( $this->meta_keys['birth_date'] ); ?>">
						<?php esc_html_e( 'Дата рождения', 'segezha-user-sync' ); ?>
					</label>
				</th>
				<td>
					<input
						type="date"
						name="<?php echo esc_attr( $this->meta_keys['birth_date'] ); ?>"
						id="<?php echo esc_attr( $this->meta_keys['birth_date'] ); ?>"
						value="<?php echo esc_attr( get_user_meta( $user->ID, $this->meta_keys['birth_date'], true ) ); ?>"
						class="regular-text"
					/>
				</td>
			</tr>
			<tr>
				<th>
					<label for="<?php echo esc_attr( $this->meta_keys['external_image_url'] ); ?>">
						<?php esc_html_e( 'URL картинки из внешней системы', 'segezha-user-sync' ); ?>
					</label>
				</th>
				<td>
					<input
						type="url"
						name="<?php echo esc_attr( $this->meta_keys['external_image_url'] ); ?>"
						id="<?php echo esc_attr( $this->meta_keys['external_image_url'] ); ?>"
						value="<?php echo esc_url( get_user_meta( $user->ID, $this->meta_keys['external_image_url'], true ) ); ?>"
						class="regular-text"
					/>
					<?php
					$external_image = get_user_meta( $user->ID, $this->meta_keys['external_image_url'], true );
					if ( $external_image ) {
						echo '<br><img src="' . esc_url( $external_image ) . '" style="max-width: 200px; margin-top: 10px;" alt="External image">';
					}
					?>
				</td>
			</tr>
			<tr>
				<th>
					<label for="<?php echo esc_attr( $this->meta_keys['user_image_id'] ); ?>">
						<?php esc_html_e( 'Картинка пользователя', 'segezha-user-sync' ); ?>
					</label>
				</th>
				<td>
					<?php
					$image_id = get_user_meta( $user->ID, $this->meta_keys['user_image_id'], true );
					$image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'thumbnail' ) : '';
					?>
					<input
						type="hidden"
						name="<?php echo esc_attr( $this->meta_keys['user_image_id'] ); ?>"
						id="<?php echo esc_attr( $this->meta_keys['user_image_id'] ); ?>"
						value="<?php echo esc_attr( $image_id ); ?>"
					/>
					<button type="button" class="button segezha-upload-image-button" data-target="<?php echo esc_attr( $this->meta_keys['user_image_id'] ); ?>">
						<?php esc_html_e( 'Выбрать изображение', 'segezha-user-sync' ); ?>
					</button>
					<button type="button" class="button segezha-remove-image-button" data-target="<?php echo esc_attr( $this->meta_keys['user_image_id'] ); ?>" style="<?php echo $image_id ? '' : 'display:none;'; ?>">
						<?php esc_html_e( 'Удалить изображение', 'segezha-user-sync' ); ?>
					</button>
					<div class="segezha-image-preview" style="margin-top: 10px;">
						<?php if ( $image_url ) : ?>
							<img src="<?php echo esc_url( $image_url ); ?>" style="max-width: 200px;" alt="User image">
						<?php endif; ?>
					</div>
				</td>
			</tr>
			<tr>
				<th>
					<label for="<?php echo esc_attr( $this->meta_keys['user_1c_id'] ); ?>">
						<?php esc_html_e( 'ID пользователя из 1С', 'segezha-user-sync' ); ?>
					</label>
				</th>
				<td>
					<input
						type="text"
						name="<?php echo esc_attr( $this->meta_keys['user_1c_id'] ); ?>"
						id="<?php echo esc_attr( $this->meta_keys['user_1c_id'] ); ?>"
						value="<?php echo esc_attr( get_user_meta( $user->ID, $this->meta_keys['user_1c_id'], true ) ); ?>"
						class="regular-text"
						readonly
					/>
					<p class="description"><?php esc_html_e( 'Это поле заполняется автоматически при синхронизации с 1С', 'segezha-user-sync' ); ?></p>
				</td>
			</tr>
			<tr>
				<th>
					<label for="<?php echo esc_attr( $this->meta_keys['manager_login'] ); ?>">
						<?php esc_html_e( 'Логин непосредственного руководителя', 'segezha-user-sync' ); ?>
					</label>
				</th>
				<td>
					<input
						type="text"
						name="<?php echo esc_attr( $this->meta_keys['manager_login'] ); ?>"
						id="<?php echo esc_attr( $this->meta_keys['manager_login'] ); ?>"
						value="<?php echo esc_attr( get_user_meta( $user->ID, $this->meta_keys['manager_login'], true ) ); ?>"
						class="regular-text"
					/>
				</td>
			</tr>
		</table>
		<?php
		$this->enqueue_admin_scripts();
	}

	/**
	 * Сохраняет дополнительные поля пользователя
	 *
	 * @param int $user_id ID пользователя
	 *
	 * @return void
	 */
	public function save_user_fields( $user_id ) {
		// Проверяем права пользователя
		if ( ! current_user_can( 'edit_user', $user_id ) ) {
			return;
		}

		// Сохраняем каждое поле
		foreach ( $this->meta_keys as $key => $meta_key ) {
			if ( isset( $_POST[ $meta_key ] ) ) {
				$value = sanitize_text_field( $_POST[ $meta_key ] );
				update_user_meta( $user_id, $meta_key, $value );
			}
		}
	}

	/**
	 * Регистрирует поля в REST API
	 *
	 * @return void
	 */
	public function register_rest_fields() {
		foreach ( $this->meta_keys as $key => $meta_key ) {
			register_rest_field(
				'user',
				$key,
				array(
					'get_callback'    => function( $user ) use ( $meta_key ) {
						return get_user_meta( $user['id'], $meta_key, true );
					},
					'update_callback' => function( $value, $user ) use ( $meta_key ) {
						return update_user_meta( $user->ID, $meta_key, $value );
					},
					'schema'          => array(
						'type'        => 'string',
						'description' => sprintf( 'User meta field: %s', $key ),
						'context'     => array( 'view', 'edit' ),
					),
				)
			);
		}
	}

	/**
	 * Подключает скрипты для работы с медиабиблиотекой
	 *
	 * @return void
	 */
	private function enqueue_admin_scripts() {
		wp_enqueue_media();
		?>
		<script>
		jQuery(document).ready(function($) {
			var frame;

			$('.segezha-upload-image-button').on('click', function(e) {
				e.preventDefault();
				var targetField = $(this).data('target');
				var previewDiv = $(this).siblings('.segezha-image-preview');

				if (frame) {
					frame.open();
					return;
				}

				frame = wp.media({
					title: 'Выберите изображение',
					button: {
						text: 'Использовать это изображение'
					},
					multiple: false
				});

				frame.on('select', function() {
					var attachment = frame.state().get('selection').first().toJSON();
					$('#' + targetField).val(attachment.id);
					previewDiv.html('<img src="' + attachment.url + '" style="max-width: 200px;" alt="User image">');
					$('.segezha-remove-image-button[data-target="' + targetField + '"]').show();
				});

				frame.open();
			});

			$('.segezha-remove-image-button').on('click', function(e) {
				e.preventDefault();
				var targetField = $(this).data('target');
				var previewDiv = $(this).siblings('.segezha-image-preview');
				$('#' + targetField).val('');
				previewDiv.html('');
				$(this).hide();
			});
		});
		</script>
		<?php
	}

	/**
	 * Получить значение мета-поля пользователя
	 *
	 * @param int    $user_id ID пользователя
	 * @param string $field   Название поля (ключ из $meta_keys)
	 *
	 * @return mixed Значение поля или false, если поле не найдено
	 */
	public function get_user_field( $user_id, $field ) {
		if ( ! isset( $this->meta_keys[ $field ] ) ) {
			return false;
		}

		return get_user_meta( $user_id, $this->meta_keys[ $field ], true );
	}

	/**
	 * Установить значение мета-поля пользователя
	 *
	 * @param int    $user_id ID пользователя
	 * @param string $field   Название поля (ключ из $meta_keys)
	 * @param mixed  $value   Значение для сохранения
	 *
	 * @return bool|int Результат обновления
	 */
	public function set_user_field( $user_id, $field, $value ) {
		if ( ! isset( $this->meta_keys[ $field ] ) ) {
			return false;
		}

		return update_user_meta( $user_id, $this->meta_keys[ $field ], $value );
	}

	/**
	 * Получить все мета-ключи
	 *
	 * @return array Массив мета-ключей
	 */
	public function get_meta_keys() {
		return $this->meta_keys;
	}
}

