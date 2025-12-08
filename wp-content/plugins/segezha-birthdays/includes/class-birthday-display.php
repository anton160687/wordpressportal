<?php
/**
 * Отображение дней рождений
 *
 * Управляет выводом дней рождений в различных местах сайта
 *
 * @package SegezhaBirthdays
 * @since 1.0.0
 */

// Если файл вызывается напрямую, прерываем выполнение
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Класс для отображения дней рождений
 *
 * @since 1.0.0
 */
class Segezha_Birthday_Display {

	/**
	 * Единственный экземпляр класса (Singleton)
	 *
	 * @var Segezha_Birthday_Display
	 */
	private static $instance = null;

	/**
	 * Менеджер дней рождений
	 *
	 * @var Segezha_Birthday_Manager
	 */
	private $birthday_manager;

	/**
	 * Получить единственный экземпляр класса
	 *
	 * @return Segezha_Birthday_Display
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
		$this->birthday_manager = Segezha_Birthday_Manager::get_instance();
		$this->init_hooks();
	}

	/**
	 * Инициализирует хуки WordPress
	 *
	 * @return void
	 */
	private function init_hooks() {
		// Добавляем шорткод для вывода дней рождений
		add_shortcode( 'segezha_birthdays', array( $this, 'render_birthdays_shortcode' ) );
	}

	/**
	 * Вывести блок дней рождений для главной страницы
	 *
	 * @param array $organization_tags Теги организаций для фильтрации
	 * @param int   $limit            Количество записей
	 *
	 * @return void
	 */
	public function render_main_page_birthdays( $organization_tags = array(), $limit = 6 ) {
		$current_user = wp_get_current_user();
		if ( ! $current_user->ID ) {
			return;
		}

		// Получаем настройки фильтра пользователя
		$filter_settings = Segezha_Filter_Settings::get_instance();
		$user_filters    = $filter_settings->get_user_filter_settings( $current_user->ID );

		// Если фильтр не настроен, используем организации пользователя
		if ( empty( $user_filters['organizations'] ) ) {
			$user_orgs = Segezha_User_Organizations::get_instance()->get_user_organizations( $current_user->ID );
			$organization_tags = ! empty( $organization_tags ) ? $organization_tags : $user_orgs;
		} else {
			$organization_tags = $user_filters['organizations'];
		}

		$birthdays = $this->birthday_manager->get_birthdays_by_organizations( $organization_tags, $limit );

		if ( empty( $birthdays ) ) {
			return;
		}

		$this->render_birthdays_list( $birthdays );
	}

	/**
	 * Вывести дни рождения в личном кабинете
	 *
	 * @param int $user_id ID пользователя
	 *
	 * @return void
	 */
	public function render_lk_birthdays( $user_id ) {
		// Дни рождения коллег из подразделения
		$department_birthdays = $this->birthday_manager->get_department_birthdays( $user_id, 10 );

		// Дни рождения руководителей
		$managers_birthdays = $this->birthday_manager->get_managers_birthdays( $user_id, 10 );

		// Объединяем и сортируем
		$all_birthdays = array_merge( $department_birthdays, $managers_birthdays );

		// Удаляем дубликаты
		$unique_birthdays = array();
		$seen_ids = array();
		foreach ( $all_birthdays as $birthday ) {
			if ( ! in_array( $birthday['user_id'], $seen_ids, true ) ) {
				$unique_birthdays[] = $birthday;
				$seen_ids[] = $birthday['user_id'];
			}
		}

		// Сортируем по дате
		usort( $unique_birthdays, function( $a, $b ) {
			return $a['days_until'] - $b['days_until'];
		} );

		$this->render_birthdays_list( $unique_birthdays );
	}

	/**
	 * Вывести список дней рождений
	 *
	 * @param array $birthdays Массив данных о днях рождения
	 *
	 * @return void
	 */
	private function render_birthdays_list( $birthdays ) {
		if ( empty( $birthdays ) ) {
			echo '<p class="text-muted">Нет предстоящих дней рождений</p>';
			return;
		}

		foreach ( $birthdays as $birthday ) {
			$initial = mb_substr( $birthday['name'], 0, 1 );
			?>
			<div class="col-md-6 col-xxl-4 mb-6">
				<div class="card h-100">
					<div class="card-body d-flex flex-center flex-column text-center py-9 px-5">
						<div class="symbol symbol-65px symbol-circle mb-5 position-relative">
							<?php if ( ! empty( $birthday['avatar'] ) ) : ?>
								<img src="<?php echo esc_url( $birthday['avatar'] ); ?>" alt="<?php echo esc_attr( $birthday['name'] ); ?>">
							<?php else : ?>
								<span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">
									<?php echo esc_html( mb_strtoupper( $initial ) ); ?>
								</span>
							<?php endif; ?>
						</div>
						<a href="#" class="fs-4 text-gray-900 text-hover-primary fw-bold mb-1">
							<?php echo esc_html( $birthday['name'] ); ?>
						</a>
						<?php if ( ! empty( $birthday['position'] ) ) : ?>
							<div class="fw-semibold text-gray-500 mb-4"><?php echo esc_html( $birthday['position'] ); ?></div>
						<?php endif; ?>
						<div class="d-flex flex-column align-items-center mb-4">
							<span class="badge badge-light-primary fs-7 fw-bold mb-2">
								<?php echo esc_html( $birthday['birthday'] ); ?>
							</span>
							<?php if ( ! empty( $birthday['department'] ) ) : ?>
								<span class="text-gray-600 fw-semibold"><?php echo esc_html( $birthday['department'] ); ?></span>
							<?php endif; ?>
							<?php if ( ! empty( $birthday['organization'] ) ) : ?>
								<span class="text-gray-500"><?php echo esc_html( $birthday['organization'] ); ?></span>
							<?php endif; ?>
						</div>
						<button class="btn btn-sm btn-light-primary btn-flex btn-center w-100">
							<i class="ki-duotone ki-message-text-2 fs-3 me-2">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
							</i>
							Поздравить
						</button>
					</div>
				</div>
			</div>
			<?php
		}
	}

	/**
	 * Шорткод для вывода дней рождений
	 *
	 * @param array $atts Атрибуты шорткода
	 *
	 * @return string HTML код
	 */
	public function render_birthdays_shortcode( $atts ) {
		$atts = shortcode_atts(
			array(
				'limit'            => 6,
				'organization_tags' => '',
				'type'             => 'main', // main, department, managers
			),
			$atts,
			'segezha_birthdays'
		);

		$current_user = wp_get_current_user();
		if ( ! $current_user->ID ) {
			return '';
		}

		ob_start();

		$organization_tags = ! empty( $atts['organization_tags'] ) ? explode( ',', $atts['organization_tags'] ) : array();

		switch ( $atts['type'] ) {
			case 'department':
				$birthdays = $this->birthday_manager->get_department_birthdays( $current_user->ID, intval( $atts['limit'] ) );
				break;
			case 'managers':
				$birthdays = $this->birthday_manager->get_managers_birthdays( $current_user->ID, intval( $atts['limit'] ) );
				break;
			default:
				$birthdays = $this->birthday_manager->get_birthdays_by_organizations( $organization_tags, intval( $atts['limit'] ) );
		}

		echo '<div class="row g-6">';
		$this->render_birthdays_list( $birthdays );
		echo '</div>';

		return ob_get_clean();
	}
}

