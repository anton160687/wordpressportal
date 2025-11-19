<?php
/**
 * Шаблон страницы «О компании».
 *
 * Template Name: Сегежа — О компании
 *
 * @package Segeja
 */

get_header();

$main_highlights = [
    'Полный цикл от лесозаготовки до глубокой переработки древесины',
    'Крупнейший российский вертикально-интегрированный лесопромышленный холдинг',
    'В фокусе — бумага, упаковка, фанера, CLT, пиломатериалы, биотопливо и лесохимия',
];

$nav_sections = [
    [
        'title' => 'Продукты',
        'description' => 'Бумага, упаковка, фанера, CLT, клееная балка, пиломатериалы, клееный брус, ДВП, биотопливо, лесохимия и лигносульфонаты.',
        'link' => 'https://segezha-group.com/product/',
    ],
    [
        'title' => 'Устойчивое развитие',
        'description' => 'Стратегия устойчивого развития, экологический и социальный блоки, благотворительные программы и международное признание.',
        'link' => 'https://segezha-group.com/sustainable-development/',
    ],
    [
        'title' => 'Карьера',
        'description' => 'Корпоративная культура, вакансии, предприятия, отзывы сотрудников и стипендиальная программа.',
        'link' => 'https://segezha-group.com/career/',
    ],
    [
        'title' => 'Инвесторам и акционерам',
        'description' => 'Финансовые результаты, отчётность, дивиденды, инвест-календарь и материалы для частных и долговых инвесторов.',
        'link' => 'https://segezha-group.com/investors/',
    ],
];

$internal_cards = [
    [
        'title' => 'Структура группы',
        'description' => 'Пять бизнес-дивизионов: бумага и упаковка, фанера и плиты, пиломатериалы, лесозаготовка, деревянное домостроение, а также сервисные и энергетические активы.',
        'slug' => 'company-str',
    ],
    [
        'title' => 'История',
        'description' => 'Ключевые этапы развития с момента консолидации активов в 2014 году и запуск крупных инвестиционных проектов по всей стране.',
        'slug' => 'history',
    ],
    [
        'title' => 'Стратегия',
        'description' => 'Планы до 2027 года по наращиванию сырьевой базы, модернизации производств, устойчивому развитию и инновациям.',
        'slug' => 'strategy',
    ],
];

$contacts = [
    [
        'label' => 'Адрес',
        'value' => '123112, Россия, г. Москва, Пресненская набережная, д. 10, блок С',
    ],
    [
        'label' => 'Электронная почта',
        'value' => 'welcome@segezha-group.com',
        'link' => 'mailto:welcome@segezha-group.com',
    ],
    [
        'label' => 'Телефон',
        'value' => '+7 (499) 962 82 00',
        'link' => 'tel:+74999628200',
    ],
];

$social_links = [
    ['label' => 'ВКонтакте', 'link' => 'https://vk.com/segezhagroup'],
    ['label' => 'Telegram', 'link' => 'https://t.me/segezha_group'],
    ['label' => 'Яндекс Дзен', 'link' => 'https://zen.yandex.ru/segezhagroup'],
];
?>

<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <div class="card bg-light-primary border-0 shadow-sm mb-10">
                        <div class="card-body p-10 p-lg-15 d-flex flex-column flex-lg-row align-items-lg-center">
                            <div class="flex-grow-1 pe-lg-15 mb-10 mb-lg-0">
                                <span class="badge badge-light-success mb-3">Segezha Group</span>
                                <h1 class="text-gray-900 fw-bold fs-1 mb-5">О компании</h1>
                                <p class="fs-5 text-gray-700 mb-6">
                                    Segezha Group — один из крупнейших российских лесопромышленных холдингов
                                    с полной вертикальной интеграцией, объединяющий предприятия лесной,
                                    деревообрабатывающей, целлюлозно-бумажной отраслей и производства упаковки.
                                </p>
                                <div class="row g-5">
                                    <?php foreach ($main_highlights as $highlight) : ?>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-check fs-2 text-success me-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <span class="fw-semibold text-gray-800"><?php echo esc_html( $highlight ); ?></span>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="min-w-250px">
                                <div class="card border-0 bg-white shadow-sm p-5">
                                    <p class="text-muted fw-semibold mb-4">Основные реквизиты</p>
                                    <div class="fs-4 fw-bold text-gray-900 mb-1">ПАО «Сегежа Групп»</div>
                                    <div class="text-gray-600 fw-semibold">Segezha Group PJSC</div>
                                    <div class="separator separator-dashed my-5"></div>
                                    <p class="text-muted mb-0">Полный цикл переработки древесины и выпуск продукции с высокой добавленной стоимостью.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-15">
                        <div class="d-flex flex-stack mb-6">
                            <h2 class="text-gray-900 fw-bold">Основные направления</h2>
                            <span class="text-muted">Структура публичного сайта Segezha Group</span>
                        </div>
                        <div class="row g-6">
                            <?php foreach ($nav_sections as $section) : ?>
                                <div class="col-md-6">
                                    <div class="card h-100 card-flush">
                                        <div class="card-body p-6">
                                            <span class="badge badge-light-primary mb-3"><?php echo esc_html( $section['title'] ); ?></span>
                                            <p class="text-gray-700 fw-semibold mb-5"><?php echo esc_html( $section['description'] ); ?></p>
                                            <a class="btn btn-sm btn-primary" target="_blank" rel="noreferrer noopener" href="<?php echo esc_url( $section['link'] ); ?>">Перейти на раздел</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="mb-15">
                        <div class="d-flex flex-stack mb-6">
                            <h2 class="text-gray-900 fw-bold">Внутренние страницы темы</h2>
                            <span class="text-muted">Быстрый доступ к созданным копиям</span>
                        </div>
                        <div class="row g-6">
                            <?php foreach ($internal_cards as $card) :
                                $link = segeja_get_page_link($card['slug']);
                                ?>
                                <div class="col-md-4">
                                    <div class="card card-flush h-100 border-dashed">
                                        <div class="card-body p-6 d-flex flex-column">
                                            <h3 class="text-gray-900 fw-bold mb-3"><?php echo esc_html( $card['title'] ); ?></h3>
                                            <p class="text-gray-600 flex-grow-1"><?php echo esc_html( $card['description'] ); ?></p>
                                            <a class="btn btn-sm btn-light-primary mt-5 align-self-start" href="<?php echo esc_url( $link ); ?>">Открыть страницу</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="row g-6">
                        <div class="col-lg-6">
                            <div class="card card-flush h-100">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="fw-bold text-gray-900">Контактная информация</h3>
                                    </div>
                                </div>
                                <div class="card-body p-6">
                                    <?php foreach ($contacts as $contact) : ?>
                                        <div class="d-flex flex-column mb-5">
                                            <span class="text-muted fw-semibold fs-7 text-uppercase"><?php echo esc_html( $contact['label'] ); ?></span>
                                            <?php if (!empty($contact['link'])) : ?>
                                                <a class="fs-5 fw-bold text-gray-900 text-hover-primary" href="<?php echo esc_url( $contact['link'] ); ?>">
                                                    <?php echo esc_html( $contact['value'] ); ?>
                                                </a>
                                            <?php else : ?>
                                                <span class="fs-5 fw-bold text-gray-900"><?php echo esc_html( $contact['value'] ); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card card-flush h-100">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="fw-bold text-gray-900">Социальные сети</h3>
                                    </div>
                                </div>
                                <div class="card-body p-6">
                                    <p class="text-gray-600 mb-5">Следите за новостями Segezha Group в официальных источниках.</p>
                                    <div class="d-flex flex-column gap-4">
                                        <?php foreach ($social_links as $channel) : ?>
                                            <a class="btn btn-light fw-semibold justify-content-start" target="_blank" rel="noreferrer noopener" href="<?php echo esc_url( $channel['link'] ); ?>">
                                                <i class="ki-duotone ki-exit-right-corner fs-2 text-primary me-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <?php echo esc_html( $channel['label'] ); ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/app-footer'); ?>
    </div>
</div>

<?php
get_footer();

