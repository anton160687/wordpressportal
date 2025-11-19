<?php
/**
 * Sidebar layout for landing pages.
 *
 * @package Segeja
 */
?>
<!--begin::Sidebar-->
<div id="kt_app_sidebar"
     class="app-sidebar flex-column"
     data-kt-drawer="true"
     data-kt-drawer-name="app-sidebar"
     data-kt-drawer-activate="{default: true, lg: false}"
     data-kt-drawer-overlay="true"
     data-kt-drawer-width="225px"
     data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <a href="<?php echo esc_url( home_url('/') ); ?>">
            <img alt="Logo"
                 src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/media/logos/logo-color.svg' ); ?>"
                 class="h-65px app-sidebar-logo-default" />
            <img alt="Logo"
                 src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/media/logos/logo-color.svg' ); ?>"
                 class="h-20px app-sidebar-logo-minimize" />
        </a>
        <div id="kt_app_sidebar_toggle"
             class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
             data-kt-toggle="true"
             data-kt-toggle-state="active"
             data-kt-toggle-target="body"
             data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
    </div>
    <!--end::Logo-->

    <!--begin::Menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
            <div id="kt_app_sidebar_menu_scroll"
                 class="scroll-y my-5 mx-3"
                 data-kt-scroll="true"
                 data-kt-scroll-height="auto"
                 data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                 data-kt-scroll-wrappers="#kt_app_sidebar_menu"
                 data-kt-scroll-offset="5px"
                 data-kt-scroll-save-state="true">
                <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                     id="#kt_app_sidebar_menu"
                     data-kt-menu="true"
                     data-kt-menu-expand="false">
                    <div class="menu-item here show menu-accordion">
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
                        <?php
                        wp_nav_menu(
                            [
                                'theme_location' => 'sidebar-menu',
                                'menu_class'     => 'menu-sub menu-sub-accordion',
                                'container'      => '',
                                'fallback_cb'    => '__return_false',
                                'walker'         => new My_Custom_Walker(),
                            ]
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Menu-->

    <!--begin::Footer-->
    <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
        <a href="https://segezha-group.com/about/" target="_blank" rel="noreferrer noopener"
           class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100">
            <span class="btn-label">Сегежа Групп</span>
            <i class="ki-duotone ki-arrow-right fs-2 m-0">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </a>
    </div>
    <!--end::Footer-->
</div>
<!--end::Sidebar-->

