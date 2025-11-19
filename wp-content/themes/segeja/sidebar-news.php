<!--begin::Wrapper-->

<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Sidebar-->
    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
        <!--begin::Logo-->
        <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
            <!--begin::Logo image-->
            <a href="index.html">
                <img alt="Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/<?php echo get_stylesheet_directory_uri(); ?>/assets/media/logos/logo-color.svg" class="h-65px app-sidebar-logo-default" />
                <img alt="Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/<?php echo get_stylesheet_directory_uri(); ?>/assets/media/logos/logo-color.svg" class="h-20px app-sidebar-logo-minimize" />
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
                <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
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
                            <?php wp_nav_menu([
                                                  'theme_location' => 'sidebar-menu',
                                                  'menu_class'     => 'menu-sub menu-sub-accordion',
                                                  'container'      => '',          // Убираем контейнер
                                                  'walker'         => new My_Custom_Walker(),
                                              ]); ?>


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
            <a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="Более 200 встроенных компонентов и сторонних плагинов">
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
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0"><?php the_title(); ?></h1>
                        <!--end::Title-->

                        <?php
                        // Проверяем, является ли текущая страница главной страницей сайта
                        if (!is_front_page()) : ?>
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="<?php echo esc_url(home_url()); ?>" class="text-muted text-hover-primary">Главная</a>
                                </li>
                                <!--end::Item-->
                                <?php if (is_single() || is_page() && !is_front_page()) : ?>
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <?php
                                        global $post;
                                        $ancestors = get_ancestors($post->ID, 'page');
                                        foreach ($ancestors as $ancestor_id) :
                                            $parent = get_post($ancestor_id);
                                            echo '<a href="' . esc_url(get_permalink($parent->ID)) . '" class="text-muted text-hover-primary">' . esc_html($parent->post_title) . '</a>';
                                            echo '<li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>';
                                        endforeach;
                                        ?>
                                        <strong><?php single_post_title(); ?></strong>
                                    </li>
                                    <!--end::Item-->
                                <?php elseif (is_category()) : ?>
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <strong><?php single_cat_title('', false); ?></strong>
                                    </li>
                                    <!--end::Item-->
                                <?php else : ?>
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted"><?php the_title(); ?></li>
                                    <!--end::Item-->
                                <?php endif; ?>
                            </ul>
                            <!--end::Breadcrumb-->
                        <?php endif; ?>

                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Filter menu-->
                        <div class="m-0">
                            <!--begin::Menu toggle-->
                            <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Фильтр</a>
                            <!--end::Menu toggle-->
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a121509dab7">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-gray-900 fw-bold">Опции фильтра</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Тип новостей:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Выберите опцию" data-dropdown-parent="#kt_menu_65a121509dab7" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Новости компании</option>
                                                <option value="2">Новости организации</option>

                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Автор:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                                <span class="form-check-label">Мои новости</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                <span class="form-check-label">Другие авторы</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Только по организации:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                            <label class="form-check-label">Включить</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Очистить</button>
                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Применить</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
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
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Home card-->
                <div class="card">
                    <!--begin::Body-->
                    <div class="card-body p-lg-20">
                        <!--begin::Section-->
                        <div class="mb-17">
                            <!--begin::Title-->
                            <h3 class="text-gray-900 mb-7">Последние статьи, новости и обновления</h3>
                            <!--end::Title-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-9"></div>
                            <!--end::Separator-->
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <!--begin::Feature post-->
                                    <div class="h-100 d-flex flex-column justify-content-between pe-lg-6 mb-lg-0 mb-10">
                                        <!--begin::Video-->
                                        <div class="mb-3">
                                            <iframe class="embed-responsive-item card-rounded h-275px w-100" src="https://rutube.ru/play/embed/f9311d000cdc41438d3cb3315adb054b/" allowfullscreen="allowfullscreen"></iframe>
                                        </div>
                                        <!--end::Video-->
                                        <!--begin::Body-->
                                        <div class="mb-5">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-2 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Админ-панель: пошаговое руководство по запуску.
                                                <br>Создавайте легко настраиваемые приложения</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-4">Мы подробно показываем переход с версии v4 на v5, делимся реальными сценариями и подсказками, чтобы старт прошёл без стресса. Из видео вы узнаете, как адаптировать шаблон под собственные процессы и сформировать понятную дорожную карту запуска.</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack flex-wrap">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center pe-2">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-3">
                                                    <img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-9.jpg">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Text-->
                                                <div class="fs-5 fw-bold">
                                                    <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">David Morgan</a>
                                                    <span class="text-muted">27 апреля 2021</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light-primary fw-bold my-2">ОБУЧЕНИЕ</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Feature post-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 justify-content-between d-flex flex-column">
                                    <!--begin::Post-->
                                    <div class="ps-lg-6 mb-16 mt-md-0 mt-17">
                                        <!--begin::Body-->
                                        <div class="mb-6">
                                            <!--begin::Title-->
                                            <a href="#" class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">Bootstrap: тема админ-панели и быстрый старт</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900">Рассказываем, как развернуть шаблон, адаптировать компоненты под процессы компании и получить аккуратный интерфейс без переписывания кода.</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack flex-wrap">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center pe-2">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-3">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-20.jpg" class="" alt="">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Text-->
                                                <div class="fs-5 fw-bold">
                                                    <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                                    <span class="text-muted">27 апреля 2021</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light-info fw-bold my-2">БЛОГ</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Post-->
                                    <!--begin::Post-->
                                    <div class="ps-lg-6 mb-16">
                                        <!--begin::Body-->
                                        <div class="mb-6">
                                            <!--begin::Title-->
                                            <a href="#" class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">Angular: как адаптировать тему админ-панели</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900">Подробно объясняем настройку маршрутов, работу с состоянием и подключение готовых модулей, чтобы ускорить разработку дашборда.</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack flex-wrap">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center pe-2">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-3">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-9.jpg" class="" alt="">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Text-->
                                                <div class="fs-5 fw-bold">
                                                    <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Cris Morgan</a>
                                                    <span class="text-muted">14 марта 2021</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light-primary fw-bold my-2">ОБУЧЕНИЕ</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Post-->
                                    <!--begin::Post-->
                                    <div class="ps-lg-6">
                                        <!--begin::Body-->
                                        <div class="mb-6">
                                            <!--begin::Title-->
                                            <a href="#" class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">React: создаём удобную админ-панель</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900">Делимся практиками по организации компонентов, подключению API и оптимизации производительности при работе с большими данными.</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack flex-wrap">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center pe-2">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-3">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-19.jpg" class="" alt="">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Text-->
                                                <div class="fs-5 fw-bold">
                                                    <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Cris Morgan</a>
                                                    <span class="text-muted">14 марта 2021</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light-warning fw-bold my-2">НОВОСТИ</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Post-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--begin::Row-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="mb-17">
                            <!--begin::Content-->
                            <div class="d-flex flex-stack mb-5">
                                <!--begin::Title-->
                                <h3 class="text-gray-900">Видео-контент</h3>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <a href="#" class="fs-6 fw-semibold link-primary">Все видеоуроки</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-9"></div>
                            <!--end::Separator-->
                            <!--begin::Row-->
                            <div class="row g-10">
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Feature post-->
                                    <div class="card-xl-stretch me-md-6">
                                        <!--begin::Image-->
                                        <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/600x400/img-73.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://rutube.ru/video/7e17c7b9765a4ce59101cf15f183e5a4/">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="">
                                        </a>
                                        <!--end::Image-->
                                        <!--begin::Body-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Админ-панель: создаём рабочий дашборд</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">Показываем, как собрать понятный дашборд, подключить виджеты аналитики и настроить права доступа для команды.</div>
                                            <!--end::Text-->
                                            <!--begin::Content-->
                                            <div class="fs-6 fw-bold">
                                                <!--begin::Author-->
                                                <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                                <!--end::Author-->
                                                <!--begin::Date-->
                                                <span class="text-muted">21 марта 2021</span>
                                                <!--end::Date-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Feature post-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Feature post-->
                                    <div class="card-xl-stretch mx-md-3">
                                        <!--begin::Image-->
                                        <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/600x400/img-74.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://rutube.ru/video/c5d26d2c2d0e4ed09d4a50bd892d9d8d/">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="">
                                        </a>
                                        <!--end::Image-->
                                        <!--begin::Body-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Сценарии аналитики в панели администратора</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">Разбираем типовые отчёты, настраиваем фильтры и делимся готовыми пресетами для мониторинга KPI.</div>
                                            <!--end::Text-->
                                            <!--begin::Content-->
                                            <div class="fs-6 fw-bold">
                                                <!--begin::Author-->
                                                <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Cris Morgan</a>
                                                <!--end::Author-->
                                                <!--begin::Date-->
                                                <span class="text-muted">14 апреля 2021</span>
                                                <!--end::Date-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Feature post-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Feature post-->
                                    <div class="card-xl-stretch ms-md-6">
                                        <!--begin::Image-->
                                        <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/600x400/img-47.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://rutube.ru/video/c121b708ac7d476aac6f80752d856939/">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="">
                                        </a>
                                        <!--end::Image-->
                                        <!--begin::Body-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Настраиваем уведомления и сценарии реагирования</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">Обсуждаем, как построить центр уведомлений, подключить push и почтовые каналы, а также автоматизировать реакции.</div>
                                            <!--end::Text-->
                                            <!--begin::Content-->
                                            <div class="fs-6 fw-bold">
                                                <!--begin::Author-->
                                                <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Carles Nilson</a>
                                                <!--end::Author-->
                                                <!--begin::Date-->
                                                <span class="text-muted">14 мая 2021</span>
                                                <!--end::Date-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Feature post-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="mb-17">
                            <!--begin::Content-->
                            <div class="d-flex flex-stack mb-5">
                                <!--begin::Title-->
                                <h3 class="text-gray-900">Самые интересные новости</h3>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <a href="#" class="fs-6 fw-semibold link-primary">Все новости</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-9"></div>
                            <!--end::Separator-->
                            <!--begin::Row-->
                            <div class="row g-10">
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Hot sales post-->
                                    <div class="card-xl-stretch me-md-6">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/600x400/img-23.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/600x400/img-23.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="ki-duotone ki-eye fs-2x text-white">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Overlay-->
                                        <!--begin::Body-->
                                        <div class="mt-5">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Пакет из 25 продуктов со скидкой 50%</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">Самые популярные темы, шаблоны и UI-компоненты в одном комплекте для ускорения запуска новых сервисов.</div>
                                            <!--end::Text-->
                                            <!--begin::Text-->
                                            <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                                <!--begin::Label-->
                                               

                                                <!--end::Label-->
                                                <!--begin::Action-->
                                                <a href="#" class="btn btn-sm btn-primary">Подробнее</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Hot sales post-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Hot sales post-->
                                    <div class="card-xl-stretch mx-md-3">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/600x600/img-14.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/600x600/img-14.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="ki-duotone ki-eye fs-2x text-white">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Overlay-->
                                        <!--begin::Body-->
                                        <div class="mt-5">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Премиальный набор из 25 решений со скидкой 50%</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">Подходит для корпоративных порталов, маркетинговых сайтов и внутренних кабинетов с готовыми сценариями.</div>
                                            <!--end::Text-->
                                            <!--begin::Text-->
                                            <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                                <!--begin::Label-->

                                                <!--end::Label-->
                                                <!--begin::Action-->
                                                <a href="#" class="btn btn-sm btn-primary">Подробнее</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Hot sales post-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Hot sales post-->
                                    <div class="card-xl-stretch ms-md-6">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/600x400/img-71.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/600x400/img-71.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="ki-duotone ki-eye fs-2x text-white">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Overlay-->
                                        <!--begin::Body-->
                                        <div class="mt-5">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Технологический комплект из 25 продуктов со скидкой 50%</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">Расширенные UI-библиотеки, дизайн-системы и пакеты иконок для быстрых экспериментов и прототипов.</div>
                                            <!--end::Text-->
                                            <!--begin::Text-->
                                            <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                                <!--begin::Label-->
                                              
                                                <!--end::Label-->
                                                <!--begin::Action-->
                                                <a href="#" class="btn btn-sm btn-primary">Подробнее</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Hot sales post-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Section-->
                        <!--begin::latest instagram-->
                        <div class="">
                            <!--begin::Section-->
                            <div class="m-0">
                                <!--begin::Content-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900">Последние публикации в Телеграмм</h3>
                                    <!--end::Title-->
                                    <!--begin::Link-->
                                    <a href="#" class="fs-6 fw-semibold link-primary">Перейти в Телеграмм</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed border-gray-300 mb-9 mt-5"></div>
                                <!--end::Separator-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Row-->
                            <div class="row g-10 row-cols-2 row-cols-lg-5">
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/900x600/16.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/900x600/16.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/900x600/13.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/900x600/13.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/900x600/19.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/900x600/19.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/900x600/15.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/900x600/15.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/900x600/12.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/900x600/12.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--begin::Row-->
                        </div>
                        <!--end::latest instagram-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Home card-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <?php get_template_part('template-parts/app-footer'); ?>
    </div>
    <!--end:::Main-->
</div>
<!--end::Wrapper-->