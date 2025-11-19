<?php
/**
 * Шаблон страницы «История компании».
 *
 * Template Name: Сегежа — История компании
 *
 * @package Segeja
 */

get_header();

$history = [
    [
        'year' => '2021',
        'events' => [
            [
                'date' => 'Конец 2021',
                'title' => 'Завершено строительство Галичского фанерного комбината',
                'description' => 'Вводится в промышленную эксплуатацию второй фанерный завод с выпуском большеформатной фанеры размера «макси».',
            ],
            [
                'date' => 'Февраль 2021',
                'title' => 'Промышленный выпуск CLT-панелей на заводе Sokol CLT',
                'description' => 'Запущено первое в России масштабное производство CLT-панелей для деревянного домостроения.',
            ],
        ],
    ],
    [
        'year' => '2020',
        'events' => [
            [
                'date' => 'Январь 2020',
                'title' => 'Консолидация Карелиан Вуд Кампани',
                'description' => 'Укрепление лесопильного сегмента за счёт интеграции нового актива по заготовке и первичной обработке древесины.',
            ],
        ],
    ],
    [
        'year' => '2018',
        'events' => [
            [
                'date' => 'Декабрь 2018',
                'title' => 'Запуск производства биотоплива «Ксилотек Сибирь»',
                'description' => 'Введено предприятие по выпуску топливных гранул из отходов лесопиления и низкосортной древесины.',
            ],
        ],
    ],
    [
        'year' => '2016',
        'events' => [
            [
                'date' => 'Март 2016',
                'title' => 'Открытие завода «Сегежская упаковка» в Ростовской области',
                'description' => 'Новые мощности по производству бумажной упаковки в г. Сальск.',
            ],
            [
                'date' => 'Февраль 2016',
                'title' => 'Приобретение Лесосибирского ЛДК №1',
                'description' => 'Группа закрепляется среди лидеров по выпуску пиломатериалов и расширяет присутствие в Сибири.',
            ],
        ],
    ],
    [
        'year' => '2014',
        'events' => [
            [
                'date' => 'Сентябрь 2014',
                'title' => 'Консолидация активов в единый холдинг',
                'description' => 'ООО «ЛесИнвест» завершает сделку по объединению Сегежского ЦБК, Сегежской упаковки, Онегского ЛДК, Сокольского ЦБК и Вятского фанерного комбината.',
            ],
        ],
    ],
];
?>

<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <div class="card bg-light mb-10 border-0 shadow-sm">
                        <div class="card-body p-10">
                            <span class="badge badge-light-success mb-3">Segezha Group</span>
                            <h1 class="text-gray-900 fw-bold mb-5">История компании</h1>
                            <p class="fs-5 text-gray-600 mb-0">
                                Ключевые события развития Segezha Group: от консолидации активов и экспансии в новые регионы
                                до реализации крупных инвестиционных проектов в фанерном, упаковочном и CLT-направлениях.
                            </p>
                        </div>
                    </div>

                    <div class="row g-6">
                        <?php foreach ($history as $period) : ?>
                            <div class="col-xl-6">
                                <div class="card card-flush h-100 border-dashed">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="fw-bold text-gray-900"><?php echo esc_html( $period['year'] ); ?></h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="timeline">
                                            <?php foreach ($period['events'] as $event) : ?>
                                                <div class="timeline-item align-items-start">
                                                    <div class="timeline-label fw-semibold text-gray-700">
                                                        <?php echo esc_html( $event['date'] ); ?>
                                                    </div>
                                                    <div class="timeline-badge">
                                                        <i class="ki-duotone ki-time fs-2 text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </div>
                                                    <div class="timeline-content ps-3">
                                                        <h4 class="text-gray-900 fw-bold mb-2"><?php echo esc_html( $event['title'] ); ?></h4>
                                                        <p class="text-gray-600 mb-0"><?php echo esc_html( $event['description'] ); ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/app-footer'); ?>
    </div>
</div>

<?php
get_footer();

