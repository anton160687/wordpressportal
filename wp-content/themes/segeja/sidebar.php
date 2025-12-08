<!--begin::Wrapper-->

<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper" >
<!--begin::Sidebar-->
            <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                <!--begin::Logo-->
                <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                    <!--begin::Logo image-->
                    <a href="index.html">
                        <img alt="Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/logos/logo-color.svg" class="h-65px app-sidebar-logo-default" />
                        <img alt="Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/logos/logo-color.svg" class="h-20px app-sidebar-logo-minimize" />
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
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="ki-duotone ki-address-book fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
												<span class="menu-title">Сервисы</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion" kt-hidden-height="250" style="display: none; overflow: hidden;">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="pages/user-profile/overview.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Overview</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="pages/user-profile/projects.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Projects</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="pages/user-profile/campaigns.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Campaigns</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="pages/user-profile/documents.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Documents</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="pages/user-profile/followers.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Followers</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="pages/user-profile/activity.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Activity</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
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
                    <a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
                        <span class="btn-label">Docs & Components</span>
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
                        <a href="https://portal-stage.segezha-group.com/auth/sso.php " class="btn btn-sm fw-bold btn-primary" >Войти</a>
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <?php
            if (is_page('lk')) :
                // Загружаем специфичный сайдбар для страницы личного кабинета

                get_template_part('template-parts/sidebar', 'lk');
            elseif (is_page('post')) :

                // Загружаем специфичный сайдбар для страницы новостей
                get_template_part('template-parts/sidebar', 'post');
            else :

                // Стандартный сайдбар для всех остальных страниц
                get_template_part('template-parts/sidebar', 'main');
            endif;
            ?>

            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-gray-900 order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2024&copy;</span>
                    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item">
                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                    </li>
                    <li class="menu-item">
                        <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                    </li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end:::Main-->
</div>
<!--end::Wrapper-->