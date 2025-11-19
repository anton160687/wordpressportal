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