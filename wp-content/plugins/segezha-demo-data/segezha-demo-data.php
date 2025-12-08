<?php
/**
 * Plugin Name: Segezha Demo Data
 * Plugin URI: https://segezha-group.com
 * Description: Генератор демо-данных для портала Segezha: пользователи и новости
 * Version: 1.0.0
 * Author: Segezha Group
 * License: GPL v2 or later
 * Text Domain: segezha-demo-data
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Segezha_Demo_Data {
	
	private static $instance = null;
	
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	private function __construct() {
		add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
		add_action( 'admin_init', array( $this, 'handle_generate' ) );
	}
	
	public function add_admin_menu() {
		add_management_page(
			'Демо-данные Segezha',
			'Демо-данные Segezha',
			'manage_options',
			'segezha-demo-data',
			array( $this, 'render_admin_page' )
		);
	}
	
	public function handle_generate() {
		if ( ! isset( $_POST['segezha_generate_demo'] ) || ! current_user_can( 'manage_options' ) ) {
			return;
		}
		
		check_admin_referer( 'segezha_demo_data' );
		
		$action = sanitize_text_field( $_POST['action_type'] );
		
		if ( $action === 'users' ) {
			$this->generate_users();
		} elseif ( $action === 'news' ) {
			$this->generate_news();
		} elseif ( $action === 'all' ) {
			$this->generate_users();
			$this->generate_news();
		}
		
		wp_redirect( add_query_arg( 'demo_generated', '1', admin_url( 'tools.php?page=segezha-demo-data' ) ) );
		exit;
	}
	
	public function render_admin_page() {
		?>
		<div class="wrap">
			<h1>Генератор демо-данных Segezha</h1>
			
			<?php if ( isset( $_GET['demo_generated'] ) ) : ?>
				<div class="notice notice-success is-dismissible">
					<p>Демо-данные успешно созданы!</p>
				</div>
			<?php endif; ?>
			
			<div class="card" style="max-width: 800px;">
				<h2>Генерация пользователей</h2>
				<p>Создаст 20 пользователей с заполненными полями:</p>
				<ul>
					<li>Название организации</li>
					<li>Название подразделения</li>
					<li>Должность</li>
					<li>Дата рождения</li>
					<li>Множественные организации и подразделения</li>
					<li>Настройки фильтрации</li>
				</ul>
				
				<h2>Генерация новостей</h2>
				<p>Создаст 30 новостей с тегами организаций</p>
				
				<form method="post" action="">
					<?php wp_nonce_field( 'segezha_demo_data' ); ?>
					<p>
						<label>
							<input type="radio" name="action_type" value="users" checked>
							Только пользователи
						</label>
					</p>
					<p>
						<label>
							<input type="radio" name="action_type" value="news">
							Только новости
						</label>
					</p>
					<p>
						<label>
							<input type="radio" name="action_type" value="all">
							Все данные
						</label>
					</p>
					<p>
						<button type="submit" name="segezha_generate_demo" class="button button-primary">
							Сгенерировать демо-данные
						</button>
					</p>
				</form>
			</div>
		</div>
		<?php
	}
	
	private function generate_users() {
		$organizations = array(
			'ГК «Сегежа»',
			'ООО «Интеграл»',
			'ООО «Сегежа Пак»',
			'ООО «Сегежа Лес»',
			'ООО «Сегежа ПМ»',
		);
		
		$departments = array(
			'Дирекция цифровых решений',
			'Маркетинг и коммуникации',
			'HR и корпоративная культура',
			'Финансовый департамент',
			'Отдел продаж',
			'Производственный отдел',
			'Отдел логистики',
			'Юридический отдел',
		);
		
		$positions = array(
			'Руководитель проектов',
			'Ведущий разработчик',
			'HR Business Partner',
			'Финансовый директор',
			'Менеджер по продажам',
			'Инженер-технолог',
			'Логист',
			'Юрист',
			'Маркетолог',
			'Аналитик',
		);
		
		$first_names = array(
			'Анна', 'Дмитрий', 'Екатерина', 'Иван', 'Мария',
			'Александр', 'Ольга', 'Сергей', 'Наталья', 'Андрей',
			'Елена', 'Павел', 'Татьяна', 'Михаил', 'Юлия',
			'Владимир', 'Светлана', 'Алексей', 'Ирина', 'Николай',
		);
		
		$last_names = array(
			'Иванова', 'Петров', 'Сидорова', 'Козлов', 'Морозова',
			'Волков', 'Соколова', 'Лебедев', 'Новикова', 'Федорова',
			'Михайлов', 'Павлова', 'Семенов', 'Фролова', 'Александрова',
			'Орлов', 'Романова', 'Степанов', 'Николаева', 'Орлова',
		);
		
		$fields_manager = class_exists( 'Segezha_User_Fields_Manager' ) 
			? Segezha_User_Fields_Manager::get_instance() 
			: null;
		
		for ( $i = 0; $i < 20; $i++ ) {
			$first_name = $first_names[ array_rand( $first_names ) ];
			$last_name = $last_names[ array_rand( $last_names ) ];
			$username = sanitize_user( strtolower( $first_name . '_' . $last_name . '_' . $i ) );
			$email = $username . '@segezha-group.com';
			
			// Проверяем, существует ли пользователь
			if ( username_exists( $username ) || email_exists( $email ) ) {
				continue;
			}
			
			$user_id = wp_create_user( $username, 'demo123456', $email );
			
			if ( is_wp_error( $user_id ) ) {
				continue;
			}
			
			// Обновляем имя
			wp_update_user( array(
				'ID' => $user_id,
				'display_name' => $first_name . ' ' . $last_name,
				'first_name' => $first_name,
				'last_name' => $last_name,
			) );
			
			// Заполняем кастомные поля
			$org = $organizations[ array_rand( $organizations ) ];
			$dept = $departments[ array_rand( $departments ) ];
			$pos = $positions[ array_rand( $positions ) ];
			
			// Основные поля
			update_user_meta( $user_id, 'segezha_organization_name', $org );
			update_user_meta( $user_id, 'segezha_department_name', $dept );
			update_user_meta( $user_id, 'segezha_position', $pos );
			
			// Множественные организации (1-2 организации)
			$user_orgs = array( $org );
			if ( rand( 0, 1 ) ) {
				$user_orgs[] = $organizations[ array_rand( $organizations ) ];
			}
			update_user_meta( $user_id, 'segezha_organizations', array_unique( $user_orgs ) );
			
			// Множественные подразделения (1-2 подразделения)
			$user_depts = array( $dept );
			if ( rand( 0, 1 ) ) {
				$user_depts[] = $departments[ array_rand( $departments ) ];
			}
			update_user_meta( $user_id, 'segezha_departments', array_unique( $user_depts ) );
			
			// Дата рождения (случайная дата в диапазоне 25-55 лет)
			$birth_year = date( 'Y' ) - rand( 25, 55 );
			$birth_month = str_pad( rand( 1, 12 ), 2, '0', STR_PAD_LEFT );
			$birth_day = str_pad( rand( 1, 28 ), 2, '0', STR_PAD_LEFT );
			$birth_date = $birth_year . '-' . $birth_month . '-' . $birth_day;
			update_user_meta( $user_id, 'segezha_birth_date', $birth_date );
			
			// Показывать день рождения (80% показывают)
			update_user_meta( $user_id, 'segezha_show_birthday', rand( 0, 10 ) < 8 ? '1' : '0' );
			
			// Настройки фильтрации (копируем из профиля или оставляем пустыми)
			if ( rand( 0, 1 ) ) {
				update_user_meta( $user_id, 'segezha_filter_organizations', $user_orgs );
				update_user_meta( $user_id, 'segezha_filter_departments', $user_depts );
			}
			
			// 1C ID (демо)
			update_user_meta( $user_id, 'segezha_1c_user_id', '1C-' . str_pad( $user_id, 6, '0', STR_PAD_LEFT ) );
			
			// Руководитель (для некоторых пользователей)
			if ( $i > 5 && rand( 0, 1 ) ) {
				$manager_id = rand( 1, min( $i, 5 ) );
				$manager = get_user_by( 'id', $manager_id );
				if ( $manager ) {
					update_user_meta( $user_id, 'segezha_manager_login', $manager->user_login );
				}
			}
		}
	}
	
	private function generate_news() {
		// Создаем теги организаций, если их нет
		$org_tags = array(
			'gk-segezha' => 'ГК «Сегежа»',
			'integral' => 'ООО «Интеграл»',
			'segezha-pak' => 'ООО «Сегежа Пак»',
			'segezha-les' => 'ООО «Сегежа Лес»',
			'segezha-pm' => 'ООО «Сегежа ПМ»',
		);
		
		foreach ( $org_tags as $slug => $name ) {
			if ( ! term_exists( $slug, 'post_tag' ) ) {
				wp_insert_term( $name, 'post_tag', array( 'slug' => $slug ) );
			}
		}
		
		$news_titles = array(
			'Новые достижения в области устойчивого развития',
			'Запуск нового производственного комплекса',
			'Стратегическое партнерство с международными компаниями',
			'Инновации в переработке древесины',
			'Корпоративные программы развития персонала',
			'Экологические инициативы компании',
			'Расширение географии поставок',
			'Технологические обновления на производстве',
			'Социальные проекты в регионах присутствия',
			'Достижения в области качества продукции',
			'Новые инвестиционные проекты',
			'Развитие цифровых решений',
			'Корпоративная культура и ценности',
			'Международные выставки и конференции',
			'Программы по охране труда',
			'Сотрудничество с образовательными учреждениями',
			'Модернизация производственных мощностей',
			'Развитие логистической инфраструктуры',
			'Корпоративные спортивные мероприятия',
			'Новые стандарты качества',
			'Работа с местными сообществами',
			'Инвестиции в исследования и разработки',
			'Программы по развитию талантов',
			'Устойчивое лесопользование',
			'Цифровая трансформация бизнеса',
			'Корпоративная социальная ответственность',
			'Международное признание',
			'Развитие экспортных направлений',
			'Инновационные упаковочные решения',
			'Экологическая сертификация продукции',
		);
		
		$news_content = array(
			'Компания продолжает развивать свои производственные мощности и внедрять инновационные технологии для повышения эффективности и качества продукции.',
			'В рамках стратегии устойчивого развития мы реализуем проекты, направленные на минимизацию воздействия на окружающую среду.',
			'Наши сотрудники - главный актив компании. Мы инвестируем в их развитие и создаем условия для профессионального роста.',
			'Технологические инновации позволяют нам оставаться лидерами рынка и предлагать клиентам продукцию высочайшего качества.',
			'Социальная ответственность - неотъемлемая часть нашей корпоративной культуры и бизнес-стратегии.',
		);
		
		$users = get_users( array( 'number' => 20 ) );
		
		for ( $i = 0; $i < 30; $i++ ) {
			$title = $news_titles[ array_rand( $news_titles ) ];
			$content = $news_content[ array_rand( $news_content ) ];
			$author = $users[ array_rand( $users ) ];
			
			// Случайная дата в последние 3 месяца
			$date = date( 'Y-m-d H:i:s', strtotime( '-' . rand( 0, 90 ) . ' days' ) );
			
			$post_id = wp_insert_post( array(
				'post_title' => $title,
				'post_content' => $content . ' ' . $this->generate_lorem_ipsum( rand( 50, 200 ) ),
				'post_status' => 'publish',
				'post_type' => 'news',
				'post_author' => $author->ID,
				'post_date' => $date,
			) );
			
			if ( is_wp_error( $post_id ) ) {
				continue;
			}
			
			// Добавляем теги (1-3 организации)
			$selected_tags = array_rand( $org_tags, rand( 1, 3 ) );
			if ( ! is_array( $selected_tags ) ) {
				$selected_tags = array( $selected_tags );
			}
			
			$tag_ids = array();
			foreach ( $selected_tags as $index ) {
				$tag_slug = array_keys( $org_tags )[ $index ];
				$tag = get_term_by( 'slug', $tag_slug, 'post_tag' );
				if ( $tag ) {
					$tag_ids[] = $tag->term_id;
				}
			}
			
			if ( ! empty( $tag_ids ) ) {
				wp_set_post_terms( $post_id, $tag_ids, 'post_tag' );
			}
		}
	}
	
	private function generate_lorem_ipsum( $word_count ) {
		$words = array(
			'лесопромышленный', 'холдинг', 'производство', 'продукция', 'качество',
			'инновации', 'технологии', 'развитие', 'инвестиции', 'проект',
			'компания', 'бизнес', 'рынок', 'клиенты', 'партнеры',
			'экология', 'устойчивость', 'ответственность', 'социальный', 'программа',
			'персонал', 'команда', 'профессионализм', 'опыт', 'результат',
		);
		
		$text = '';
		for ( $i = 0; $i < $word_count; $i++ ) {
			$text .= $words[ array_rand( $words ) ] . ' ';
		}
		
		return trim( $text );
	}
}

// Инициализация
Segezha_Demo_Data::get_instance();

