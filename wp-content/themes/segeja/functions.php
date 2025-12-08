<?php


    class My_Custom_Walker extends Walker_Nav_Menu {
        /**
         * @see Walker::start_el()
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param object $item Menu item data object.
         * @param int $depth Depth of menu item. May be used for padding.
         * @param stdClass $args Additional arguments.
         * @param int $id Current item ID.
         */
        public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
            global $wp_query;
            $indent = str_repeat("\t", $depth);

            // Проверяем активный пункт меню
            $current_page_id = isset($wp_query->queried_object->ID) ? $wp_query->queried_object->ID : '';
            $active_class = ($item->object_id == $current_page_id || in_array('current-menu-item', $item->classes)) ? 'active' : '';

            // Основная конструкция меню
            $output .= $indent . '<div class="menu-item">' . "\n";
            $output .= $indent . '<!-- begin: Menu Link -->' . "\n";
            $output .= $indent . '<a class="menu-link ' . $active_class . '" href="' . esc_url($item->url) . '">' . "\n";
            $output .= $indent . '<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>' . "\n";
            $output .= $indent . '<span class="menu-title">' . esc_html($item->title) . '</span>' . "\n";
            $output .= $indent . '</a>' . "\n";
            $output .= $indent . '<!-- end: Menu Link -->' . "\n";
            $output .= $indent . '</div>' . "\n";
        }
    }

    // Регистрация меню
    function register_my_menus() {
        register_nav_menus(array(
                'sidebar-menu' => 'Боковое меню',
            ));
        }
    add_action('init', 'register_my_menus');

    if (!function_exists('segeja_get_page_link')) {
        /**
         * Возвращает ссылку на страницу по слагу с запасным вариантом.
         *
         * @param string $slug
         * @param string $fallback
         *
         * @return string
         */
        function segeja_get_page_link(string $slug, string $fallback = ''): string {
            $page = get_page_by_path($slug);

            if ($page) {
                return get_permalink($page->ID);
            }

            if (!empty($fallback)) {
                return $fallback;
            }

            $slug = '/' . ltrim($slug, '/');

            return home_url($slug . '/');
        }
    }

    if (!function_exists('segeja_theme_palette')) {
        /**
         * Центральное хранилище цветовой палитры темы.
         *
         * @return array{button_gradient: string, nav_link: string}
         */
        function segeja_theme_palette(): array {
            return [
                'button_gradient' => 'linear-gradient(90deg, #197b2c, #58a42a)',
                'nav_link'        => '#28853a',
            ];
        }
    }

    /**
     * Вывод CSS-переменных и глобальных стилей на базе палитры.
     */
    function segeja_print_theme_palette(): void {
        $palette = segeja_theme_palette();
        ?>
        <style id="segeja-theme-palette">
            :root {
                --segeja-button-gradient: <?php echo esc_html( $palette['button_gradient'] ); ?>;
                --segeja-nav-link: <?php echo esc_html( $palette['nav_link'] ); ?>;
            }

            .btn.btn-primary,
            .btn.btn-light-primary,
            .btn.btn-sm.btn-primary {
                background-image: var(--segeja-button-gradient) !important;
                background-color: transparent !important;
                border-color: transparent !important;
                color: #ffffff !important;
            }

            .btn.btn-primary:hover,
            .btn.btn-light-primary:hover,
            .btn.btn-sm.btn-primary:hover {
                filter: brightness(1.05);
            }

            .desktop-menu__link,
            .app-sidebar .menu-link,
            .menu.menu-rounded .menu-link .menu-title,
            .menu.menu-rounded .menu-link,
            .menu.menu-column .menu-link {
                color: var(--segeja-nav-link) !important;
            }

            .desktop-menu__link:hover,
            .app-sidebar .menu-link:hover,
            .menu.menu-rounded .menu-link:hover {
                color: #1d6a2f !important;
            }
        </style>
        <?php
    }
    add_action('wp_head', 'segeja_print_theme_palette', 20);

    /**
     * Регистрация Custom Post Type для новостей
     *
     * @return void
     */
    function segeja_register_news_post_type() {
        $labels = array(
            'name'                  => 'Новости',
            'singular_name'         => 'Новость',
            'menu_name'             => 'Новости',
            'name_admin_bar'        => 'Новость',
            'add_new'               => 'Добавить новую',
            'add_new_item'          => 'Добавить новую новость',
            'new_item'              => 'Новая новость',
            'edit_item'             => 'Редактировать новость',
            'view_item'             => 'Просмотреть новость',
            'all_items'             => 'Все новости',
            'search_items'          => 'Искать новости',
            'not_found'             => 'Новости не найдены',
            'not_found_in_trash'    => 'В корзине новостей не найдено',
        );

        $args = array(
            'labels'                => $labels,
            'public'                => true,
            'publicly_queryable'    => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'query_var'             => true,
            'rewrite'               => array('slug' => 'news'),
            'capability_type'        => 'post',
            'has_archive'           => true,
            'hierarchical'          => false,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-megaphone',
            'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
            'show_in_rest'          => true,
            'taxonomies'            => array('post_tag'), // Поддержка тегов
        );

        register_post_type('news', $args);
    }
    add_action('init', 'segeja_register_news_post_type');

    /**
     * Получить новости с фильтрацией по тегам
     *
     * @param array $tag_slugs Массив слагов тегов для фильтрации
     * @param int   $limit    Количество новостей для вывода
     *
     * @return WP_Query
     */
    function segeja_get_news_by_tags($tag_slugs = array(), $limit = -1) {
        $args = array(
            'post_type'      => 'news',
            'posts_per_page' => $limit,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        );

        // Если указаны теги, добавляем таксономию
        if (!empty($tag_slugs) && is_array($tag_slugs)) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'post_tag',
                    'field'    => 'slug',
                    'terms'    => $tag_slugs,
                    'operator' => 'IN',
                ),
            );
        }

        return new WP_Query($args);
    }

    /**
     * Получить все теги организаций
     *
     * @return array Массив объектов тегов
     */
    function segeja_get_organization_tags() {
        return get_terms(array(
            'taxonomy'   => 'post_tag',
            'hide_empty' => false,
        ));
    }

    /**
     * Вывести новости с фильтрацией по тегам
     *
     * @param array $tag_slugs Массив слагов тегов для фильтрации
     * @param int   $limit    Количество новостей для вывода
     *
     * @return void
     */
    function segeja_render_news_list($tag_slugs = array(), $limit = 4) {
        $news_query = segeja_get_news_by_tags($tag_slugs, $limit);
        
        if ($news_query->have_posts()) {
            while ($news_query->have_posts()) {
                $news_query->the_post();
                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                if (!$thumbnail_url) {
                    $thumbnail_url = get_stylesheet_directory_uri() . '/assets/media/stock/600x400/img-1.jpg';
                }
                ?>
                <div class="d-flex align-items-sm-center mb-7">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-60px symbol-2by3 me-4">
                        <div class="symbol-label" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>')"></div>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Content-->
                    <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                        <!--begin::Title-->
                        <div class="flex-grow-1 my-lg-0 my-2 me-2">
                            <a href="<?php echo esc_url(get_permalink()); ?>" class="text-gray-800 fw-bold text-hover-primary fs-6"><?php echo esc_html(get_the_title()); ?></a>
                            <span class="text-muted fw-semibold d-block pt-1"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 15)); ?></span>
                        </div>
                        <!--end::Title-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <div class="me-6">
                                <i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
                                <span class="text-gray-800 fw-bold"><?php echo esc_html(get_comments_number()); ?></span>
                            </div>
                            <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-icon btn-light btn-sm border-0">
                                <i class="ki-duotone ki-arrow-right fs-2 text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Content-->
                </div>
                <?php
            }
            wp_reset_postdata();
        } else {
            ?>
            <div class="text-center py-10">
                <p class="text-muted">Новости не найдены</p>
            </div>
            <?php
        }
    }

    /**
     * Вывести фильтр по тегам организаций
     *
     * @param string $container_id ID контейнера для фильтра
     *
     * @return void
     */
    function segeja_render_news_filter($container_id = 'news-filter-menu') {
        $tags = segeja_get_organization_tags();
        if (empty($tags) || is_wp_error($tags)) {
            return;
        }
        ?>
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-300px py-3" data-kt-menu="true" id="<?php echo esc_attr($container_id); ?>">
            <!--begin::Heading-->
            <div class="menu-item px-3">
                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Фильтр по организациям</div>
            </div>
            <!--end::Heading-->
            <!--begin::Menu separator-->
            <div class="separator mb-3 opacity-75"></div>
            <!--end::Menu separator-->
            <?php foreach ($tags as $tag) : ?>
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <label class="form-check form-check-custom form-check-solid">
                        <input 
                            class="form-check-input news-filter-checkbox" 
                            type="checkbox" 
                            value="<?php echo esc_attr($tag->slug); ?>" 
                            data-tag-slug="<?php echo esc_attr($tag->slug); ?>"
                        />
                        <span class="form-check-label text-gray-700"><?php echo esc_html($tag->name); ?></span>
                    </label>
                </div>
                <!--end::Menu item-->
            <?php endforeach; ?>
            <!--begin::Menu separator-->
            <div class="separator my-3 opacity-75"></div>
            <!--end::Menu separator-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <button type="button" class="btn btn-sm btn-primary w-100" id="apply-news-filter">
                    Применить фильтр
                </button>
            </div>
            <!--end::Menu item-->
        </div>
        <?php
    }

    /**
     * AJAX обработчик для загрузки аватара пользователя
     *
     * @return void
     */
    function segezha_handle_upload_user_avatar() {
        // Проверяем nonce
        if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'segezha_upload_avatar')) {
            wp_send_json_error(array('message' => 'Ошибка безопасности'));
            return;
        }

        // Проверяем, что пользователь авторизован
        if (!is_user_logged_in()) {
            wp_send_json_error(array('message' => 'Необходима авторизация'));
            return;
        }

        $user_id = get_current_user_id();

        // Проверяем наличие файла
        if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
            wp_send_json_error(array('message' => 'Ошибка загрузки файла'));
            return;
        }

        // Загружаем файл через WordPress
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        require_once(ABSPATH . 'wp-admin/includes/file.php');
        require_once(ABSPATH . 'wp-admin/includes/media.php');

        $attachment_id = media_handle_upload('file', 0);

        if (is_wp_error($attachment_id)) {
            wp_send_json_error(array('message' => $attachment_id->get_error_message()));
            return;
        }

        // Сохраняем ID изображения в мета-поле пользователя
        $fields_manager = Segezha_User_Fields_Manager::get_instance();
        $fields_manager->set_user_field($user_id, 'user_image_id', $attachment_id);

        // Получаем URL изображения
        $image_url = wp_get_attachment_image_url($attachment_id, 'thumbnail');

        wp_send_json_success(array(
            'url' => $image_url,
            'attachment_id' => $attachment_id
        ));
    }
    add_action('wp_ajax_segezha_upload_user_avatar', 'segezha_handle_upload_user_avatar');