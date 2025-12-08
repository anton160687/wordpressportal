<?php
get_header();

$landing_templates = [
    'page-about.php',
    'page-company-str.php',
    'page-history.php',
    'page-strategy.php',
    'page-feeds.php',
];

if (is_page_template($landing_templates)) {
    get_sidebar('landing');
} elseif (is_page('lk')) {
    get_sidebar('lk');
} elseif (is_page('post')) {
    get_sidebar('post');
} else {
    get_sidebar();
}

get_footer();


