<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <?php the_content(); ?>

        <!--begin::Row-->
        <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">

            <!--begin::Col-->
            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

                <!-- Code Weather Forecast rusmeteo.net  -->
                <link href="https://api.rusmeteo.net/service/informers/css/widget-kit-2.min.css" rel="stylesheet" type="text/css">
                <a href="https://rusmeteo.net/weather/kirov/" class="rm-kit-informer" id="54bee23efaa01b5ceccf808d870593c7" style="width:280px">Погода в Кирове</a>
                <script async src="https://rusmeteo.net/api/informerV2/54bee23efaa01b5ceccf808d870593c7/" type="text/javascript"></script>
                <!-- End Code Weather Forecast rusmeteo.net -->
                <!--begin::Card widget 20-->

                <!--end::Card widget 20-->

            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                <!--begin::Card widget 17-->
                <!--begin::Card widget 7-->
                <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">357</span>
                            <!--end::Amount-->
                            <!--begin::Subtitle-->
                            <span class="text-gray-500 pt-1 fw-semibold fs-6">Сотрудников в организации</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column justify-content-end pe-0">
                        <!--begin::Title-->
                        <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Новые сотрудники</span>
                        <!--end::Title-->
                        <!--begin::Users group-->
                        <div class="symbol-group symbol-hover flex-nowrap">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                <img alt="Pic" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-11.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                <img alt="Pic" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-2.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                <img alt="Pic" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-12.jpg" />
                            </div>
                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                            </a>
                        </div>
                        <!--end::Users group-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 7-->
                <!--end::Card widget 17-->
                <!--begin::List widget 26-->
                <div class="card card-flush h-lg-50">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title text-gray-800 fw-bold">Важные ссылки</h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <a href="#" class="text-primary fw-semibold fs-6 me-2">Портал поддержки</a>
                            <!--end::Section-->
                            <!--begin::Action-->
                            <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                <i class="ki-duotone ki-exit-right-corner fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                            <!--end::Action-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <a href="#" class="text-primary fw-semibold fs-6 me-2">HRLink</a>
                            <!--end::Section-->
                            <!--begin::Action-->
                            <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                <i class="ki-duotone ki-exit-right-corner fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                            <!--end::Action-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <a href="#" class="text-primary fw-semibold fs-6 me-2">СЭД</a>
                            <!--end::Section-->
                            <!--begin::Action-->
                            <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                <i class="ki-duotone ki-exit-right-corner fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                            <!--end::Action-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::LIst widget 26-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xxl-6">
                <!--begin::Engage widget 10-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900">Поздравляем с Днем Рождения!</span>
                            <span class="text-muted mt-1 fw-semibold fs-7">Наши именниники</span>
                        </h3>
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                <i class="ki-duotone ki-dots-square fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-11.jpg" class="h-50 align-self-center" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <!--begin:Author-->
                                <div class="flex-grow-1 me-2">
                                    <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Иванов Иван</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Отдел поддержки</span>
                                </div>
                                <!--end:Author-->
                                <!--begin:Action-->
                                <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Поздравить</a>
                                <!--end:Action-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-4"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-2.jpg" class="h-50 align-self-center" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <!--begin:Author-->
                                <div class="flex-grow-1 me-2">
                                    <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Петрова Анна</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Подразделение 1С</span>
                                </div>
                                <!--end:Author-->
                                <!--begin:Action-->
                                <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Поздравить</a>
                                <!--end:Action-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-4"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-7.jpg" class="h-50 align-self-center" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <!--begin:Author-->
                                <div class="flex-grow-1 me-2">
                                    <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Попов Гавриил</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Главное подразделения отдела кадров</span>
                                </div>
                                <!--end:Author-->
                                <!--begin:Action-->
                                <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Поздравить</a>
                                <!--end:Action-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-4"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-9.jpg" class="h-50 align-self-center" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <!--begin:Author-->
                                <div class="flex-grow-1 me-2">
                                    <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Кукушкина Василиса</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Бухгалтерия</span>
                                </div>
                                <!--end:Author-->
                                <!--begin:Action-->
                                <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Поздравить</a>
                                <!--end:Action-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-4"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-12.jpg" class="h-50 align-self-center" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <!--begin:Author-->
                                <div class="flex-grow-1 me-2">
                                    <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Деревянкина Дана</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Отдел деревообработки</span>
                                </div>
                                <!--end:Author-->
                                <!--begin:Action-->
                                <a href="pages/user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bold">Поздравить</a>
                                <!--end:Action-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Engage widget 10-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row gx-5 gx-xl-10">
            <!--begin::Col-->
            <div class="col-xxl-6 mb-5 mb-xl-10">

                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bold text-gray-900">Сотрудник месяца</h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-category fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-6.jpg" class="" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Text-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Эмма Смит</a>
                                <span class="text-muted d-block fw-bold">Project Manager</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-5.jpg" class="" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Text-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Сиен Бэн</a>
                                <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-11.jpg" class="" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Text-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Брайн Кох</a>
                                <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-9.jpg" class="" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Text-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Франциз Михам</a>
                                <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-23.jpg" class="" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Text-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Дан Вильсон</a>
                                <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-6 mb-5 mb-xl-10">
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header align-items-center border-0 mt-4">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="fw-bold text-gray-900">Новости организации</span>
                            <span class="text-muted mt-1 fw-semibold fs-7">ООО Сегежа Цифровые Решения</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Filter button-->
                            <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" id="news-filter-trigger">
                                <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Фильтр</a>
                            <?php segeja_render_news_filter('news-filter-menu-org'); ?>
                            <!--end::Filter button-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-3" id="news-container-org">
                        <?php 
                        // Получаем выбранные теги из URL параметра или сессии
                        $selected_tags = isset($_GET['news_tags']) ? explode(',', sanitize_text_field($_GET['news_tags'])) : array();
                        segeja_render_news_list($selected_tags, 4); 
                        ?>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Tables widget 16-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-xxl-6">
                <!--begin::Card widget 18-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header align-items-center border-0 mt-4">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="fw-bold text-gray-900">Новости компании</span>
                            <span class="text-muted mt-1 fw-semibold fs-7">ООО Сегежа Групп</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Filter button-->
                            <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" id="news-filter-trigger-company">
                                <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Фильтр</a>
                            <?php segeja_render_news_filter('news-filter-menu-company'); ?>
                            <!--end::Filter button-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-3" id="news-container-company">
                        <?php 
                        // Получаем выбранные теги из URL параметра или сессии
                        $selected_tags = isset($_GET['news_tags_company']) ? explode(',', sanitize_text_field($_GET['news_tags_company'])) : array();
                        segeja_render_news_list($selected_tags, 4); 
                        ?>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card widget 18-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-6">
                <!--begin::Chart widget 36-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bold text-gray-900">Сотрудник года</h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-category fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-6.jpg" class="" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Text-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Эмма Смит</a>
                                <span class="text-muted d-block fw-bold">Project Manager</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-5.jpg" class="" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Text-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Сиен Бэн</a>
                                <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-11.jpg" class="" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Text-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Брайн Кох</a>
                                <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-9.jpg" class="" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Text-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Франциз Михам</a>
                                <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/avatars/300-23.jpg" class="" alt="">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Text-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Дан Вильсон</a>
                                <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Chart Widget 35-->
                <div class="card card-flush h-md-100">
                    <!--begin::Header-->
                    <div class="card-header pt-5 mb-6">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <!--begin::Statistics-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Currency-->
                                <span class="fs-3 fw-semibold text-gray-500 align-self-start me-1">$</span>
                                <!--end::Currency-->
                                <!--begin::Value-->
                                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
                                <!--end::Value-->
                                <!--begin::Label-->
                                <span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>9.2%</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Description-->
                            <span class="fs-6 fw-semibold text-gray-500">Курс валюты</span>
                            <!--end::Description-->
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-0 px-0">
                        <!--begin::Nav-->
                        <ul class="nav d-flex justify-content-between mb-3 mx-9">
                            <!--begin::Item-->
                            <li class="nav-item mb-3">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_35_tab_1" href="#kt_charts_widget_35_tab_content_1">1d</a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mb-3">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_2" href="#kt_charts_widget_35_tab_content_2">5d</a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mb-3">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_3" href="#kt_charts_widget_35_tab_content_3">1m</a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mb-3">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_4" href="#kt_charts_widget_35_tab_content_4">6m</a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mb-3">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_5" href="#kt_charts_widget_35_tab_content_5">1y</a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Nav-->
                        <!--begin::Tab Content-->
                        <div class="tab-content mt-n6">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1">
                                <!--begin::Chart-->
                                <div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                <!--end::Chart-->
                                <!--begin::Table container-->
                                <div class="table-responsive mx-9 mt-n6">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">-139.34</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+576.24</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+124.03</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2">
                                <!--begin::Chart-->
                                <div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                <!--end::Chart-->
                                <!--begin::Table container-->
                                <div class="table-responsive mx-9 mt-n6">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+134.02</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">11:35 AM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">-124.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">+144.04</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3">
                                <!--begin::Chart-->
                                <div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                <!--end::Chart-->
                                <!--begin::Table container-->
                                <div class="table-responsive mx-9 mt-n6">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:20 AM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">+185.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">+124.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">-154.03</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_4">
                                <!--begin::Chart-->
                                <div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                <!--end::Chart-->
                                <!--begin::Table container-->
                                <div class="table-responsive mx-9 mt-n6">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-warning">+124.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">5:30 AM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-info">+144.65</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">+154.06</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_5">
                                <!--begin::Chart-->
                                <div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                <!--end::Chart-->
                                <!--begin::Table container-->
                                <div class="table-responsive mx-9 mt-n6">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-4">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-warning">+114.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:30 AM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">-124.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">10:30 PM</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-info">+165.86</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tap pane-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Chart Widget 35-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-8">
                <!--begin::Table widget 14-->
                <div class="card card-flush h-md-100">
                    <!--begin::Header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Новости финансов</span>
                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Обновлено 3 часа назад</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">History</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-6">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                <!--begin::Table head-->
                                <thead>
                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                    <th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
                                    <th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
                                    <th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
                                    <th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
                                    <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                    <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="https://yastatic.net/s3/fintech-icons/1/i/SGZH.svg" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">SGZH                                                    </a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Segezha Group</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$32,400</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
																		<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>9.2%</span>
                                        <!--end::Label-->
                                    </td>
                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/600x600/img-40.jpg" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Avionica</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Esther Howard</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$256,910</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger fs-base">
																		<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>0.4%</span>
                                        <!--end::Label-->
                                    </td>
                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/600x600/img-39.jpg" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Charto CRM</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Jenny Wilson</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$8,220</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
																		<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>9.2%</span>
                                        <!--end::Label-->
                                    </td>
                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/600x600/img-47.jpg" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tower Hill</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Cody Fisher</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$74,000</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
																		<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>9.2%</span>
                                        <!--end::Label-->
                                    </td>
                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/stock/600x600/img-48.jpg" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9 Degree</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Savannah Nguyen</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$183,300</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger fs-base">
																		<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>0.4%</span>
                                        <!--end::Label-->
                                    </td>
                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Table widget 14-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row gx-5 gx-xl-10">
            <!--begin::Col-->
            <div class="col-xl-4 mb-5 mb-xl-0">
                <!--begin::Chart widget 31-->

                <!--end::Chart widget 31-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-8">

                <!--end::Chart widget 24-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Content container-->
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Обработчик для фильтра новостей организации
    const filterTriggerOrg = document.getElementById('news-filter-trigger');
    const filterMenuOrg = document.getElementById('news-filter-menu-org');
    const newsContainerOrg = document.getElementById('news-container-org');
    
    if (filterTriggerOrg && filterMenuOrg) {
        const applyButtonOrg = filterMenuOrg.querySelector('#apply-news-filter');
        
        if (applyButtonOrg) {
            applyButtonOrg.addEventListener('click', function(e) {
                e.preventDefault();
                const selectedTags = Array.from(filterMenuOrg.querySelectorAll('.news-filter-checkbox:checked'))
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
    }
    
    // Обработчик для фильтра новостей компании
    const filterTriggerCompany = document.getElementById('news-filter-trigger-company');
    const filterMenuCompany = document.getElementById('news-filter-menu-company');
    const newsContainerCompany = document.getElementById('news-container-company');
    
    if (filterTriggerCompany && filterMenuCompany) {
        const applyButtonCompany = filterMenuCompany.querySelector('#apply-news-filter');
        
        if (applyButtonCompany) {
            applyButtonCompany.addEventListener('click', function(e) {
                e.preventDefault();
                const selectedTags = Array.from(filterMenuCompany.querySelectorAll('.news-filter-checkbox:checked'))
                    .map(checkbox => checkbox.value);
                
                // Обновляем URL с параметрами фильтра
                const url = new URL(window.location.href);
                if (selectedTags.length > 0) {
                    url.searchParams.set('news_tags_company', selectedTags.join(','));
                } else {
                    url.searchParams.delete('news_tags_company');
                }
                window.location.href = url.toString();
            });
        }
    }
});
</script>