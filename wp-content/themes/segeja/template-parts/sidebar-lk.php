<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xxl-8">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-1.jpg" alt="изображение">
                            <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                        </div>
                    </div>
                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Антон Хохлачев</a>
                                    <a href="#">
                                        <i class="ki-duotone ki-verify fs-1 text-primary">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                </div>
                                <!--end::Name-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                    <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                        <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>Разработчик</a>
                                    <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                        <i class="ki-duotone ki-geolocation fs-4 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Сан-Франциско, район залива</a>
                                    <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                        <i class="ki-duotone ki-sms fs-4 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>max@kt.com</a>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                            <!--begin::Actions-->
                            <div class="d-flex my-4">
                                <a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
                                    <i class="ki-duotone ki-check fs-3 d-none"></i>
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Подписаться</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Пожалуйста, подождите...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </a>
                                <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Нанять меня</a>
                                <!--begin::Menu-->
                                <div class="me-0">
                                    <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Платежи</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Создать счет</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Создать платеж
                                                <span class="ms-2" data-bs-toggle="tooltip" aria-label="Укажите целевое имя для дальнейшего использования и ссылок" data-bs-original-title="Укажите целевое имя для дальнейшего использования и ссылок" data-kt-initialized="1">
																			<i class="ki-duotone ki-information fs-6">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Сформировать счет</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Подписка</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Тарифы</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Выставление счетов</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Выписки</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <!--begin::Switch-->
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                            <!--end::Input-->
                                                            <!--end::Label-->
                                                            <span class="form-check-label text-muted fs-6">Регулярно</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Настройки</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Title-->
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                <!--begin::Stats-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->

                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="flex-grow-1">
                                        <!--begin::Name-->
                                        <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">Подразделение 1С</a>
                                        <!--end::Name-->
                                        <!--begin::Date-->
                                        <span class="text-gray-500 fw-semibold d-block">Разработчик ПО</span>
                                        <!--end::Date-->
                                    </div>
                                    <!--end::Info-->
                                </div>

                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Progress-->
                            <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                    <span class="fw-semibold fs-6 text-gray-500">Профиль заполнен</span>
                                    <span class="fw-bold fs-6">50%</span>
                                </div>
                                <div class="h-5px mx-3 w-100 bg-light mb-3">
                                    <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->
                <!--begin::Navs-->
                <?php
                $lk_tabs = [
                    'overview' => [
                        'label'    => 'Основное',
                        'template' => 'overview',
                        'active'   => true,
                    ],
                    'forest'   => [
                        'label'    => 'Лес возможностей',
                        'template' => 'forest',
                    ],
                    'bethday'  => [
                        'label'    => 'Дни рождения',
                        'template' => 'bethday',
                    ],

                ];
                ?>
                <ul id="lk-tab-nav" class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold" role="tablist">
                    <?php foreach ( $lk_tabs as $slug => $tab ) :
                        $tab_target = 'lk-tab-' . sanitize_html_class( $slug );
                        $is_active  = ! empty( $tab['active'] );
                        ?>
                        <li class="nav-item mt-2" role="presentation">
                            <a
                                id="<?php echo esc_attr( $tab_target ); ?>-tab"
                                class="nav-link text-active-primary ms-0 me-10 py-5 <?php echo $is_active ? 'active' : ''; ?>"
                                href="#<?php echo esc_attr( $tab_target ); ?>"
                                data-lk-tab-target="<?php echo esc_attr( $tab_target ); ?>"
                                role="tab"
                                aria-controls="<?php echo esc_attr( $tab_target ); ?>"
                                aria-selected="<?php echo $is_active ? 'true' : 'false'; ?>"
                            >
                                <?php echo esc_html( $tab['label'] ); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <!--begin::Navs-->
            </div>
        </div>
        <!--end::Navbar-->
        <!--begin::Tabs Content-->
        <div class="tab-content" id="lk-tab-panels">
            <?php foreach ( $lk_tabs as $slug => $tab ) :
                $tab_target = 'lk-tab-' . sanitize_html_class( $slug );
                $is_active  = ! empty( $tab['active'] );
                ?>
                <div
                    class="tab-pane fade <?php echo $is_active ? 'show active' : ''; ?>"
                    id="<?php echo esc_attr( $tab_target ); ?>"
                    role="tabpanel"
                    aria-labelledby="<?php echo esc_attr( $tab_target ); ?>-tab"
                    data-lk-tab-panel="<?php echo esc_attr( $slug ); ?>"
                >
                    <?php get_template_part( 'template-parts/lk-tabs/tab', $tab['template'] ); ?>
                </div>
            <?php endforeach; ?>
        </div>
        <!--end::Tabs Content-->

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var tabNav = document.getElementById('lk-tab-nav');
                if (!tabNav) {
                    return;
                }
                var triggerSelector = '[data-lk-tab-target]';
                var panelSelector = '[data-lk-tab-panel]';

                tabNav.addEventListener('click', function (event) {
                    var trigger = event.target.closest(triggerSelector);
                    if (!trigger) {
                        return;
                    }
                    event.preventDefault();
                    var targetId = trigger.getAttribute('data-lk-tab-target');
                    if (!targetId) {
                        return;
                    }

                    var triggers = tabNav.querySelectorAll(triggerSelector);
                    triggers.forEach(function (link) {
                        var isActive = link === trigger;
                        link.classList.toggle('active', isActive);
                        link.setAttribute('aria-selected', isActive ? 'true' : 'false');
                    });

                    var panels = document.querySelectorAll(panelSelector);
                    panels.forEach(function (panel) {
                        var isTarget = panel.id === targetId;
                        panel.classList.toggle('show', isTarget);
                        panel.classList.toggle('active', isTarget);
                    });
                });
            });
        </script>

    </div>