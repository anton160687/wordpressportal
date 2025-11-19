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