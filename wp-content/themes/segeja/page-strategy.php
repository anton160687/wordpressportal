<?php
/**
 * Шаблон страницы «Стратегия».
 *
 * Template Name: Сегежа — Стратегия
 *
 * @package Segeja
 */

get_header();

$pillars = [
    [
        'title' => 'Наращивание и эффективное использование ресурсной базы',
        'image' => 'https://segezha-group.com/upload/Frame%20158-min.jpg',
        'bullets' => [
            'Увеличение расчётной лесосеки и закрепление ресурсной базы.',
            'Инвестиции в современную технику и технологии лесозаготовки.',
            'Внедрение моделей интенсивного лесопользования и воспроизводства лесов.',
            'Повышение эффективности воспроизводства благодаря собственным питомникам.',
        ],
    ],
    [
        'title' => 'Производственные активы',
        'image' => 'https://segezha-group.com/upload/Frame%20156-min.jpg',
        'bullets' => [
            'Модернизация действующих производств для повышения выхода продукции.',
            'Запуск мощностей по переработке отходов и низкосортной древесины.',
            'Строительство новых линий с акцентом на высокую добавленную стоимость.',
            'Расширение линейки глубокой переработки и готовой упаковки.',
        ],
    ],
    [
        'title' => 'Устойчивое развитие',
        'image' => 'https://segezha-group.com/upload/Frame%20157-min.jpg',
        'bullets' => [
            'Повышение безопасности и культуры производства.',
            'Применение наилучших доступных экологических практик.',
            'Рост энергоэффективности предприятий и снижение выбросов.',
            'Приверженность ESG-принципам и диалогу с сообществами.',
        ],
    ],
    [
        'title' => 'Инновации и цифровизация',
        'image' => 'https://segezha-group.com/upload/Frame%20155-min.jpg',
        'bullets' => [
            'Цифровая трансформация всей цепочки создания стоимости.',
            'Использование новых технологий переработки древесины.',
            'Создание инновационных продуктов из древесины и биополимеров.',
        ],
    ],
];
?>

<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <?php get_sidebar('landing'); ?>
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <div class="card border-0 shadow-sm mb-10">
                        <div class="card-body p-10">
                            <span class="badge badge-light-success mb-3">Планы до 2027 года</span>
                            <h1 class="text-gray-900 fw-bold mb-5">Стратегия Segezha Group</h1>
                            <p class="fs-5 text-gray-600 mb-0">
                                Стратегия развития до 2027 года утверждена советом директоров и обновлена в 2021 году.
                                Цель — максимальная добавленная стоимость на вложенный капитал и лидерство по эффективности,
                                безопасности и технологичности в лесной отрасли.
                            </p>
                        </div>
                    </div>

                    <div class="row g-6 mb-10">
                        <?php foreach ($pillars as $pillar) : ?>
                            <div class="col-xl-6">
                                <div class="card card-flush h-100 border-dashed">
                                    <div class="card-body p-6 d-flex flex-column gap-5">
                                        <div class="d-flex gap-4">
                                            <div class="symbol symbol-100px symbol-lg-120px">
                                                <img src="<?php echo esc_url( $pillar['image'] ); ?>" alt="<?php echo esc_attr( $pillar['title'] ); ?>">
                                            </div>
                                            <div>
                                                <h3 class="fw-bold text-gray-900 mb-3"><?php echo esc_html( $pillar['title'] ); ?></h3>
                                                <ul class="mb-0 ps-3">
                                                    <?php foreach ($pillar['bullets'] as $bullet) : ?>
                                                        <li class="text-gray-700 mb-2"><?php echo esc_html( $bullet ); ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="card card-flush border-dashed">
                        <div class="card-body p-8">
                            <div class="row g-8">
                                <div class="col-md-6">
                                    <h3 class="text-gray-900 fw-bold mb-4">Целевые показатели</h3>
                                    <p class="text-gray-600 fs-5">
                                        Инвестиционные проекты формируют основу роста: расширение экспортной выручки,
                                        увеличение объёмов выпуска фанеры и CLT, развитие переработки древесины
                                        и поддержка безотходной бизнес-модели.
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="row g-5">
                                        <div class="col-6">
                                            <div class="p-5 bg-light-primary rounded">
                                                <div class="fs-2hx fw-bold text-gray-900">5+</div>
                                                <p class="text-gray-600 mb-0">ключевых инвестиционных кластеров в регионах присутствия</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-5 bg-light-success rounded">
                                                <div class="fs-2hx fw-bold text-gray-900">100%</div>
                                                <p class="text-gray-600 mb-0">соответствие политике устойчивого развития и ESG-целям</p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="p-5 bg-light-warning rounded">
                                                <div class="fs-2hx fw-bold text-gray-900">2027</div>
                                                <p class="text-gray-600 mb-0">горизонт стратегии с регулярным обновлением проектов и KPI</p>
                                            </div>
                                        </div>
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

