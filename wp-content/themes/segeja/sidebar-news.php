<!--begin::Wrapper-->

<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Sidebar-->
    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
        <!--begin::Logo-->
        <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
            <!--begin::Logo image-->
            <a href="index.html">
                <img alt="Logo" src="https://wp.segezha-group.com/wp-content/themes/segeja/https://wp.segezha-group.com/wp-content/themes/segeja/assets/media/logos/logo-color.svg" class="h-65px app-sidebar-logo-default">
                <img alt="Logo" src="https://wp.segezha-group.com/wp-content/themes/segeja/https://wp.segezha-group.com/wp-content/themes/segeja/assets/media/logos/logo-color.svg" class="h-20px app-sidebar-logo-minimize">
            </a>
            <!--end::Logo image-->
            <!--begin::Sidebar toggle-->
            <!--begin::Minimized sidebar setup:
    if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
        1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
        2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
        3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
        4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
    }
-->
            <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
                <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
            <!--end::Sidebar toggle-->
        </div>
        <!--end::Logo-->
        <!--begin::sidebar menu-->
        <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
            <!--begin::Menu wrapper-->
            <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
                <!--begin::Scroll wrapper-->
                <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true" style="height: 217px;">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">

                            <!--begin:Menu link-->
                            <span class="menu-link">
												<span class="menu-icon">
													<i class="ki-duotone ki-element-11 fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
												<span class="menu-title">Меню</span>
												<span class="menu-arrow"></span>
											</span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <ul id="menu-%d0%bb%d0%b5%d0%b2%d0%be%d0%b5-%d0%bc%d0%b5%d0%bd%d1%8e" class="menu-sub menu-sub-accordion"><div class="menu-item">
<!-- begin: Menu Link -->
<a class="menu-link " href="https://wp.segezha-group.com">
<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
<span class="menu-title">Главная</span>
</a>
<!-- end: Menu Link -->
</div>

<div class="menu-item">
<!-- begin: Menu Link -->
<a class="menu-link active" href="https://wp.segezha-group.com/news/">
<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
<span class="menu-title">Новости</span>
</a>
<!-- end: Menu Link -->
</div>

<div class="menu-item">
<!-- begin: Menu Link -->
<a class="menu-link " href="https://wp.segezha-group.com/lk/">
<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
<span class="menu-title">Личный кабинет</span>
</a>
<!-- end: Menu Link -->
</div>

<div class="menu-item">
<!-- begin: Menu Link -->
<a class="menu-link " href="https://wp.segezha-group.com/%d0%bf%d0%be%d0%bb%d1%8c%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d0%b8/admin/profile/">
<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
<span class="menu-title">Профиль</span>
</a>
<!-- end: Menu Link -->
</div>

<div class="menu-item">
<!-- begin: Menu Link -->
<a class="menu-link " href="https://wp.segezha-group.com/%d0%bf%d0%be%d0%bb%d1%8c%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d0%b8/admin/settings/">
<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
<span class="menu-title">Настройки</span>
</a>
<!-- end: Menu Link -->
</div>

<div class="menu-item">
<!-- begin: Menu Link -->
<a class="menu-link " href="https://wp.segezha-group.com/%d0%bf%d0%be%d0%bb%d1%8c%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d0%b8/admin/friends/">
<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
<span class="menu-title">Друзья</span>
</a>
<!-- end: Menu Link -->
</div>

<div class="menu-item">
<!-- begin: Menu Link -->
<a class="menu-link " href="https://wp.segezha-group.com/%d0%bf%d0%be%d0%bb%d1%8c%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d0%b8/admin/messages/">
<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
<span class="menu-title">Сообщения</span>
</a>
<!-- end: Menu Link -->
</div>

</ul>

                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->

                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Scroll wrapper-->
            </div>
            <!--end::Menu wrapper-->
        </div>
        <!--end::sidebar menu-->
        <!--begin::Footer-->
        <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
            <a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" data-bs-original-title="Более 200 встроенных компонентов и сторонних плагинов" data-kt-initialized="1">
                <span class="btn-label">Документация и компоненты</span>
                <i class="ki-duotone ki-document btn-icon fs-2 m-0">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </a>
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Sidebar-->
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Привет, мир!</h1>
                        <!--end::Title-->

                                                    <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="https://wp.segezha-group.com" class="text-muted text-hover-primary">Главная</a>
                                </li>
                                <!--end::Item-->
                                                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Привет, мир!</li>
                                    <!--end::Item-->
                                                            </ul>
                            <!--end::Breadcrumb-->
                        
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Filter menu-->
                        <div class="m-0">
                            <!--begin::Menu toggle-->
                            <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" id="kt_news_filter_toggle">
                                <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Фильтр</a>
                            <!--end::Menu toggle-->
                            <?php segeja_render_news_filter('kt_news_filter_menu'); ?>
                        </div>
                        <!--end::Filter menu-->
                        <!--begin::Secondary button-->
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Добавить</a>
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <?php
        // Получаем настройки фильтрации текущего пользователя
        $current_user = wp_get_current_user();
        $selected_tag_slugs = array();
        
        // Если есть параметры в URL, используем их (приоритет)
        if (isset($_GET['news_tags']) && !empty($_GET['news_tags'])) {
            $selected_tag_slugs = array_map('trim', explode(',', sanitize_text_field($_GET['news_tags'])));
        } elseif ($current_user->ID) {
            // Получаем организации из настроек фильтра пользователя
            $filter_settings = class_exists('Segezha_Filter_Settings') ? Segezha_Filter_Settings::get_instance() : null;
            if ($filter_settings) {
                $user_filters = $filter_settings->get_user_filter_settings($current_user->ID);
                $user_orgs = !empty($user_filters['organizations']) ? $user_filters['organizations'] : array();
                
                // Преобразуем названия организаций в слаги тегов
                if (!empty($user_orgs)) {
                    $all_tags = segeja_get_organization_tags();
                    foreach ($all_tags as $tag) {
                        if (in_array($tag->name, $user_orgs)) {
                            $selected_tag_slugs[] = $tag->slug;
                        }
                    }
                }
            }
        }
        
        // Получаем новости
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $posts_per_page = get_option('posts_per_page', 10);
        
        // Создаем запрос с пагинацией
        $args = array(
            'post_type'      => 'news',
            'posts_per_page' => $posts_per_page,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
            'paged'          => $paged,
        );
        
        // Если указаны теги, добавляем таксономию
        if (!empty($selected_tag_slugs) && is_array($selected_tag_slugs)) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'post_tag',
                    'field'    => 'slug',
                    'terms'    => $selected_tag_slugs,
                    'operator' => 'IN',
                ),
            );
        }
        
        $news_query = new WP_Query($args);
        ?>
        
        <!--begin::Row-->
        <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-12 mb-md-5 mb-xl-10">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Body-->
                    <div class="card-body p-lg-20">
                        <!--begin::Section-->
                        <div class="mb-17">
                            <!--begin::Title-->
                            <h3 class="text-gray-900 mb-7">Новости</h3>
                            <!--end::Title-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-9"></div>
                            <!--end::Separator-->
                            
                            <!--begin::News List-->
                            <div class="row g-6" id="news-list-container">
                                <?php
                                if ($news_query->have_posts()) {
                                    while ($news_query->have_posts()) {
                                        $news_query->the_post();
                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                                        if (!$thumbnail_url) {
                                            $thumbnail_url = get_stylesheet_directory_uri() . '/assets/media/stock/600x400/img-1.jpg';
                                        }
                                        $tags = get_the_tags();
                                        ?>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card h-100">
                                                <?php if ($thumbnail_url) : ?>
                                                <div class="card-header border-0 pt-0">
                                                    <a href="<?php echo esc_url(get_permalink()); ?>">
                                                        <img src="<?php echo esc_url($thumbnail_url); ?>" class="card-img-top" alt="<?php echo esc_attr(get_the_title()); ?>" style="height: 200px; object-fit: cover;">
                                                    </a>
                                                </div>
                                                <?php endif; ?>
                                                <div class="card-body d-flex flex-column">
                                                    <?php if ($tags) : ?>
                                                    <div class="mb-3">
                                                        <?php foreach ($tags as $tag) : ?>
                                                        <span class="badge badge-light-primary me-1"><?php echo esc_html($tag->name); ?></span>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <?php endif; ?>
                                                    <h5 class="card-title">
                                                        <a href="<?php echo esc_url(get_permalink()); ?>" class="text-gray-900 text-hover-primary">
                                                            <?php echo esc_html(get_the_title()); ?>
                                                        </a>
                                                    </h5>
                                                    <p class="card-text text-gray-600 flex-grow-1">
                                                        <?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?>
                                                    </p>
                                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                                        <small class="text-muted">
                                                            <?php echo get_the_date('d F Y'); ?>
                                                        </small>
                                                        <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-sm btn-primary">
                                                            Читать
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    wp_reset_postdata();
                                } else {
                                    ?>
                                    <div class="col-12">
                                        <div class="alert alert-info">
                                            <p class="mb-0">Новости не найдены. Попробуйте изменить фильтры.</p>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <!--end::News List-->
                            
                            <!--begin::Pagination-->
                            <?php
                            if ($news_query->max_num_pages > 1) {
                                ?>
                                <div class="d-flex justify-content-center mt-10">
                                    <?php
                                    echo paginate_links(array(
                                        'total' => $news_query->max_num_pages,
                                        'current' => $paged,
                                        'prev_text' => '&laquo; Предыдущая',
                                        'next_text' => 'Следующая &raquo;',
                                        'type' => 'list',
                                        'end_size' => 2,
                                        'mid_size' => 1,
                                    ));
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                            <!--end::Pagination-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Home card-->
            </div></div></div></div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <div id="kt_app_footer" class="app-footer">
    <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 gap-3 gap-md-0">
        <div class="text-gray-900 order-2 order-md-1 text-center text-md-start">
            <span class="text-muted fw-semibold me-2">2025 ©</span>
            <span class="text-gray-800 fw-semibold">Segezha Group</span>
        </div>
        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1 flex-wrap justify-content-center">
            <li class="menu-item">
                <a href="https://segezha-group.com/about/" target="_blank" rel="noreferrer noopener" class="menu-link px-2">О компании</a>
            </li>
            <li class="menu-item">
                <a href="https://segezha-group.com/product/" target="_blank" rel="noreferrer noopener" class="menu-link px-2">Продукты</a>
            </li>
            <li class="menu-item">
                <a href="https://segezha-group.com/sustainable-development/" target="_blank" rel="noreferrer noopener" class="menu-link px-2">Устойчивое развитие</a>
            </li>
            <li class="menu-item">
                <a href="https://segezha-group.com/investors/" target="_blank" rel="noreferrer noopener" class="menu-link px-2">Инвесторам</a>
            </li>
            <li class="menu-item">
                <a href="https://segezha-group.com/press-center/" target="_blank" rel="noreferrer noopener" class="menu-link px-2">Пресс-центр</a>
            </li>
        </ul>
    </div>
</div>

    </div>
    <!--end:::Main-->
</div>
<!--end::Wrapper-->

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Обработчик для фильтра новостей
    const filterToggle = document.getElementById('kt_news_filter_toggle');
    const filterMenu = document.getElementById('kt_news_filter_menu');
    
    if (filterToggle && filterMenu) {
        const applyButton = filterMenu.querySelector('#apply-news-filter');
        const clearButton = filterMenu.querySelector('#clear-news-filter');
        
        if (applyButton) {
            applyButton.addEventListener('click', function(e) {
                e.preventDefault();
                const selectedTags = Array.from(filterMenu.querySelectorAll('.news-filter-checkbox:checked'))
                    .map(checkbox => checkbox.value);
                
                // Обновляем URL с параметрами фильтра
                const url = new URL(window.location.href);
                if (selectedTags.length > 0) {
                    url.searchParams.set('news_tags', selectedTags.join(','));
                } else {
                    url.searchParams.delete('news_tags');
                }
                window.location.href = url.toString();
            });
        }
        
        if (clearButton) {
            clearButton.addEventListener('click', function(e) {
                e.preventDefault();
                const checkboxes = filterMenu.querySelectorAll('.news-filter-checkbox');
                checkboxes.forEach(cb => cb.checked = false);
                
                const url = new URL(window.location.href);
                url.searchParams.delete('news_tags');
                window.location.href = url.toString();
            });
        }
    }
    
    // Восстанавливаем выбранные теги из URL
    const urlParams = new URLSearchParams(window.location.search);
    const newsTags = urlParams.get('news_tags');
    if (newsTags && filterMenu) {
        const tags = newsTags.split(',');
        tags.forEach(function(tag) {
            const checkbox = filterMenu.querySelector('.news-filter-checkbox[value="' + tag.trim() + '"]');
            if (checkbox) {
                checkbox.checked = true;
            }
        });
    }
});
</script>