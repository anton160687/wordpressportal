<?php
/**
 * Template Name: My Custom Elementor Page
 *
 * Description: A custom page template designed specifically for editing pages with Elementor.
 */

// Включаем поддержку Elementor для этого шаблона
add_filter('elementor_allow_editor_in_custom_templates', '__return_true');

// Получаем контент страницы и передаем его в шаблон
$template_id = get_the_ID();
$content = apply_filters('the_content', get_post_field('post_content', $template_id));

?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Здесь отображаем область, которую можно редактировать -->
<main id="primary" class="site-main">
    <?php echo $content; ?>
</main>

<?php wp_footer(); ?>
</body>
</html>