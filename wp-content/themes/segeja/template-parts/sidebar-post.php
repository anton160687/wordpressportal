<div id="kt_app_content_container" class="app-container container-xxl">
    <!--begin::Post card-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-20 pb-lg-0">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-xl-row">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid me-xl-15">
                    <!--begin::Post content-->
                    <div class="mb-17">
                        <!--begin::Wrapper-->
                        <div class="mb-8">
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap mb-6">
                                <?php if (have_posts()) : the_post(); ?>
                                <!--begin::Item-->
                                <div class="me-9 my-1">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-element-11 text-primary fs-2 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <span class="fw-bold text-gray-500"><?php echo get_the_date('d F Y'); ?></span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <?php 
                                $tags = get_the_tags();
                                if ($tags) : 
                                    foreach ($tags as $tag) :
                                ?>
                                <!--begin::Item-->
                                <div class="me-9 my-1">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-briefcase text-primary fs-2 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <span class="fw-bold text-gray-500"><?php echo esc_html($tag->name); ?></span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <?php 
                                    endforeach;
                                endif;
                                ?>
                                <!--begin::Item-->
                                <div class="my-1">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-message-text-2 text-primary fs-2 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <span class="fw-bold text-gray-500"><?php echo get_comments_number(); ?> <?php echo _n('комментарий', 'комментария', get_comments_number(), 'segeja'); ?></span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Title-->
                            <h1 class="text-gray-900 text-hover-primary fs-2 fw-bold mb-3">
                                <?php echo esc_html(get_the_title()); ?>
                            </h1>
                            <!--end::Title-->
                            <?php 
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                            if ($thumbnail_url) :
                            ?>
                            <!--begin::Container-->
                            <div class="overlay mt-8">
                                <!--begin::Image-->
                                <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url('<?php echo esc_url($thumbnail_url); ?>')"></div>
                                <!--end::Image-->
                            </div>
                            <!--end::Container-->
                            <?php endif; ?>
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Description-->
                        <div class="fs-5 fw-semibold text-gray-600">
                            <?php the_content(); ?>
                        </div>
                        <!--end::Description-->
                        <?php 
                        $author_id = get_the_author_meta('ID');
                        $author_name = get_the_author();
                        $author_avatar = get_avatar_url($author_id, array('size' => 70));
                        $author_position = get_user_meta($author_id, 'segezha_position', true);
                        ?>
                        <!--begin::Block-->
                        <div class="d-flex align-items-center border-1 border-dashed card-rounded p-5 p-lg-10 mb-14">
                            <!--begin::Section-->
                            <div class="text-center flex-shrink-0 me-7 me-lg-13">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-70px symbol-circle mb-2">
                                    <img src="<?php echo esc_url($author_avatar); ?>" class="" alt="<?php echo esc_attr($author_name); ?>">
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Info-->
                                <div class="mb-0">
                                    <a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>" class="text-gray-700 fw-bold text-hover-primary">
                                        <?php echo esc_html($author_name); ?>
                                    </a>
                                    <?php if ($author_position) : ?>
                                    <span class="text-gray-500 fs-7 fw-semibold d-block mt-1"><?php echo esc_html($author_position); ?></span>
                                    <?php endif; ?>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Text-->
                            <div class="mb-0 fs-6">
                                <div class="text-muted fw-semibold lh-lg mb-2">
                                    <?php echo esc_html(get_the_author_meta('description')); ?>
                                </div>
                                <a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>" class="fw-semibold link-primary">Профиль автора</a>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Block-->
                        <?php endif; ?>
                        <!--begin::Icons-->
                        <div class="d-flex flex-center">
                            <!--begin::Icon-->
                            <a href="https://vk.com/segezha_group" class="mx-4" target="_blank" rel="noopener noreferrer">
                                <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px my-2" alt="">
                            </a>
                            <!--end::Icon-->
                            <!--begin::Icon-->
                            <a href="https://t.me/segezha_group" class="mx-4" target="_blank" rel="noopener noreferrer">
                                <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px my-2" alt="">
                            </a>
                            <!--end::Icon-->
                            <!--begin::Icon-->
                            <a href="https://dzen.ru/segezha_group" class="mx-4" target="_blank" rel="noopener noreferrer">
                                <img src="assets/media/svg/brand-logos/github.svg" class="h-20px my-2" alt="">
                            </a>
                            <!--end::Icon-->
                            <!--begin::Icon-->
                            <a href="https://segezha-group.com/press-center/press-kit/" class="mx-4" target="_blank" rel="noopener noreferrer">
                                <img src="assets/media/svg/brand-logos/behance.svg" class="h-20px my-2" alt="">
                            </a>
                            <!--end::Icon-->
                            <!--begin::Icon-->
                            <a href="https://segezha-group.com/press-center/photo/" class="mx-4" target="_blank" rel="noopener noreferrer">
                                <img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-20px my-2" alt="">
                            </a>
                            <!--end::Icon-->
                            <!--begin::Icon-->
                            <a href="https://www.youtube.com/@SegezhaGroup" class="mx-4" target="_blank" rel="noopener noreferrer">
                                <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px my-2" alt="">
                            </a>
                            <!--end::Icon-->
                            <!--begin::Icon-->
                            <a href="https://segezha-group.com/press-center/contacts/" class="mx-4" target="_blank" rel="noopener noreferrer">
                                <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px my-2" alt="">
                            </a>
                            <!--end::Icon-->
                        </div>
                        <!--end::Icons-->
                    </div>
                    <!--end::Post content-->
                </div>
                <!--end::Content-->
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                    <!--begin::Search blog-->
                    <div class="mb-16">
                        <h4 class="text-gray-900 mb-7">Поиск по блогу</h4>
                        <!--begin::Input group-->
                        <div class="position-relative">
                            <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Поиск">
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Search blog-->
                    <!--begin::Catigories-->
                    <div class="mb-16">
                        <h4 class="text-gray-900 mb-7">Категории</h4>
                        <!--begin::Item-->
                        <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                            <!--begin::Text-->
                            <a href="https://segezha-group.com/products/" class="text-muted text-hover-primary pe-2" target="_blank" rel="noopener noreferrer">Лесозаготовка</a>
                            <!--end::Text-->
                            <!--begin::Number-->
                            <div class="m-0">24</div>
                            <!--end::Number-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                            <!--begin::Text-->
                            <a href="https://segezha-group.com/press-center/news/" class="text-muted text-hover-primary pe-2" target="_blank" rel="noopener noreferrer">Новости Segezha Group</a>
                            <!--end::Text-->
                            <!--begin::Number-->
                            <div class="m-0">152</div>
                            <!--end::Number-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                            <!--begin::Text-->
                            <a href="https://segezha-group.com/press-center/" class="text-muted text-hover-primary pe-2" target="_blank" rel="noopener noreferrer">События и инициативы</a>
                            <!--end::Text-->
                            <!--begin::Number-->
                            <div class="m-0">52</div>
                            <!--end::Number-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                            <!--begin::Text-->
                            <a href="https://segezha-group.com/sustainable-development/ecology/" class="text-muted text-hover-primary pe-2" target="_blank" rel="noopener noreferrer">Экология и безопасность</a>
                            <!--end::Text-->
                            <!--begin::Number-->
                            <div class="m-0">305</div>
                            <!--end::Number-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                            <!--begin::Text-->
                            <a href="https://segezha-group.com/sustainable-development/lean-production/" class="text-muted text-hover-primary pe-2" target="_blank" rel="noopener noreferrer">Инновации</a>
                            <!--end::Text-->
                            <!--begin::Number-->
                            <div class="m-0">70</div>
                            <!--end::Number-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack fw-semibold fs-5 text-muted">
                            <!--begin::Text-->
                            <a href="https://segezha-group.com/products/packaging/" class="text-muted text-hover-primary pe-2" target="_blank" rel="noopener noreferrer">Обновления продукции</a>
                            <!--end::Text-->
                            <!--begin::Number-->
                            <div class="m-0">585</div>
                            <!--end::Number-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Catigories-->
                    <!--begin::Recent posts-->
                    <div class="m-0">
                        <div class="d-flex flex-stack mb-7">
                            <h4 class="text-gray-900">Недавние публикации</h4>
                            <!--begin::Filter button-->
                            <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" id="news-filter-trigger-post">
                                <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Фильтр</a>
                            <?php segeja_render_news_filter('news-filter-menu-post'); ?>
                            <!--end::Filter button-->
                        </div>
                        <div id="news-container-post">
                            <?php 
                            // Получаем выбранные теги из URL параметра
                            $selected_tags = isset($_GET['news_tags_post']) ? explode(',', sanitize_text_field($_GET['news_tags_post'])) : array();
                            $news_query = segeja_get_news_by_tags($selected_tags, 4);
                            
                            if ($news_query->have_posts()) {
                                while ($news_query->have_posts()) {
                                    $news_query->the_post();
                                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                                    if (!$thumbnail_url) {
                                        $thumbnail_url = get_stylesheet_directory_uri() . '/assets/media/stock/600x400/img-1.jpg';
                                    }
                                    ?>
                                    <div class="d-flex flex-stack mb-7">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-60px symbol-2by3 me-4">
                                            <div class="symbol-label" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>')"></div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="m-0">
                                            <a href="<?php echo esc_url(get_permalink()); ?>" class="text-gray-900 fw-bold text-hover-primary fs-6"><?php echo esc_html(get_the_title()); ?></a>
                                            <span class="text-gray-600 fw-semibold d-block pt-1 fs-7"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 15)); ?></span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <?php
                                }
                                wp_reset_postdata();
                            } else {
                                ?>
                                <div class="text-center py-10">
                                    <p class="text-muted">Новости не найдены</p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <!--end::Recent posts-->
                </div>
                <!--end::Sidebar-->
            </div>
            <!--end::Layout-->
            
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Обработчик для фильтра новостей в sidebar-post
                const filterTriggerPost = document.getElementById('news-filter-trigger-post');
                const filterMenuPost = document.getElementById('news-filter-menu-post');
                
                if (filterTriggerPost && filterMenuPost) {
                    const applyButtonPost = filterMenuPost.querySelector('#apply-news-filter');
                    
                    if (applyButtonPost) {
                        applyButtonPost.addEventListener('click', function(e) {
                            e.preventDefault();
                            const selectedTags = Array.from(filterMenuPost.querySelectorAll('.news-filter-checkbox:checked'))
                                .map(checkbox => checkbox.value);
                            
                            // Обновляем URL с параметрами фильтра
                            const url = new URL(window.location.href);
                            if (selectedTags.length > 0) {
                                url.searchParams.set('news_tags_post', selectedTags.join(','));
                            } else {
                                url.searchParams.delete('news_tags_post');
                            }
                            window.location.href = url.toString();
                        });
                    }
                }
            });
            </script>
            <!--begin::Section-->
            <div class="mb-17">
                <!--begin::Content-->
                <div class="d-flex flex-stack mb-5">
                    <!--begin::Title-->
                    <h3 class="text-gray-900">Видео о Segezha Group</h3>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <a href="https://segezha-group.com/press-center/video/" class="fs-6 fw-semibold link-primary" target="_blank" rel="noopener noreferrer">Смотреть все видео</a>
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
                            <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('https://segezha-group.com/upload/resize_cache/iblock/7a1/395_161_2/j6vwffvw6k43spki8z4avmwklh9etxo7.jpg')" href="https://segezha-group.com/press-center/video/" target="_blank" rel="noopener noreferrer">
                                <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="">
                            </a>
                            <!--end::Image-->
                            <!--begin::Body-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="https://segezha-group.com/press-center/video/" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base" target="_blank" rel="noopener noreferrer">Эксперты Segezha Group о безотходном производстве</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">Инженеры делятся опытом перехода к технологиям глубокой переработки и образованию высокомаржинальной продукции.</div>
                                <!--end::Text-->
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold">
                                    <!--begin::Author-->
                                    <a href="https://segezha-group.com/press-center/video/" class="text-gray-700 text-hover-primary" target="_blank" rel="noopener noreferrer">Олег Соколов</a>
                                    <!--end::Author-->
                                    <!--begin::Date-->
                                    <span class="text-muted">21 марта 2025</span>
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
                            <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('https://segezha-group.com/upload/resize_cache/iblock/d1a/395_161_2/0btmo3nmicn962rwfqk560wb9byp54bj.jpg')" href="https://segezha-group.com/press-center/video/" target="_blank" rel="noopener noreferrer">
                                <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="">
                            </a>
                            <!--end::Image-->
                            <!--begin::Body-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="https://segezha-group.com/press-center/video/" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base" target="_blank" rel="noopener noreferrer">CLT-панели и домокомплекты нового поколения</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">Обзор производственных мощностей по выпуску CLT-панелей и клеёного бруса, занимающих 1-е место в России.</div>
                                <!--end::Text-->
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold">
                                    <!--begin::Author-->
                                    <a href="https://segezha-group.com/press-center/video/" class="text-gray-700 text-hover-primary" target="_blank" rel="noopener noreferrer">Мария Козлова</a>
                                    <!--end::Author-->
                                    <!--begin::Date-->
                                    <span class="text-muted">14 апреля 2025</span>
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
                            <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('https://segezha-group.com/upload/resize_cache/iblock/4a1/395_161_2/1gczsel3h72bshe9mme60vw9nsuh0htg.jpg')" href="https://segezha-group.com/press-center/video/" target="_blank" rel="noopener noreferrer">
                                <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="">
                            </a>
                            <!--end::Image-->
                            <!--begin::Body-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="https://segezha-group.com/press-center/video/" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base" target="_blank" rel="noopener noreferrer">География поставок в 80+ стран</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">Как Segezha Group развивает экспорт берёзовой фанеры и бумажной продукции в новые регионы.</div>
                                <!--end::Text-->
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold">
                                    <!--begin::Author-->
                                    <a href="https://segezha-group.com/press-center/video/" class="text-gray-700 text-hover-primary" target="_blank" rel="noopener noreferrer">Ирина Петрова</a>
                                    <!--end::Author-->
                                    <!--begin::Date-->
                                    <span class="text-muted">14 мая 2025</span>
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
                    <h3 class="text-gray-900">Ключевые проекты</h3>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <a href="https://segezha-group.com/press-center/news/" class="fs-6 fw-semibold link-primary" target="_blank" rel="noopener noreferrer">Все проекты</a>
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
                            <a class="d-block overlay" href="https://segezha-group.com/press-center/news/" target="_blank" rel="noopener noreferrer">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('https://segezha-group.com/upload/resize_cache/iblock/db8/395_161_2/7l4o78vnw1ea22386qfpejqzewlt6vhx.jpg')"></div>
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
                                <a href="https://segezha-group.com/press-center/news/" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base" target="_blank" rel="noopener noreferrer">Модернизация бумажных комбинатов</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">Инвестиции в обновление производственных линий мешочной бумаги для удержания лидерства в России.</div>
                                <!--end::Text-->
                                <!--begin::Text-->
                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                    <!--begin::Label-->
                                    <span class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
																	<span class="fs-6 fw-semibold text-gray-500">₽</span>12 млрд</span>
                                    <!--end::Label-->
                                    <!--begin::Action-->
                                    <a href="https://segezha-group.com/press-center/news/" class="btn btn-sm btn-primary" target="_blank" rel="noopener noreferrer">Подробнее</a>
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
                            <a class="d-block overlay" href="https://segezha-group.com/press-center/news/" target="_blank" rel="noopener noreferrer">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('https://segezha-group.com/upload/resize_cache/iblock/fe3/395_161_2/y5k008omxicsvyhiu6erepkxsna8t1he.jpg')"></div>
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
                                <a href="https://segezha-group.com/press-center/news/" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base" target="_blank" rel="noopener noreferrer">Расширение экспортной географии</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">Программа выхода на рынки Мексики, Туниса и других стран сбыта фанеры и пиломатериалов.</div>
                                <!--end::Text-->
                                <!--begin::Text-->
                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                    <!--begin::Label-->
                                    <span class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
																	<span class="fs-6 fw-semibold text-gray-500">₽</span>8 млрд</span>
                                    <!--end::Label-->
                                    <!--begin::Action-->
                                    <a href="https://segezha-group.com/press-center/news/" class="btn btn-sm btn-primary" target="_blank" rel="noopener noreferrer">Подробнее</a>
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
                            <a class="d-block overlay" href="https://segezha-group.com/sustainable-development/" target="_blank" rel="noopener noreferrer">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('https://segezha-group.com/upload/resize_cache/iblock/7af/395_161_2/9tap5ehxaepx1nr0ibf4s9vl4j6oc4qw.jpg')"></div>
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
                                <a href="https://segezha-group.com/sustainable-development/" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base" target="_blank" rel="noopener noreferrer">Программы устойчивого развития</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">Комплекс инициатив по ответственному лесопользованию, охране труда и благотворительным проектам.</div>
                                <!--end::Text-->
                                <!--begin::Text-->
                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                    <!--begin::Label-->
                                    <span class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
																	<span class="fs-6 fw-semibold text-gray-500">₽</span>5 млрд</span>
                                    <!--end::Label-->
                                    <!--begin::Action-->
                                    <a href="https://segezha-group.com/sustainable-development/" class="btn btn-sm btn-primary" target="_blank" rel="noopener noreferrer">Подробнее</a>
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
        </div>
        <!--end::Body-->
    </div>
    <!--end::Post card-->
</div>