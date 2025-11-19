<?php
/**
 * Шаблон страницы «Структура группы».
 *
 * Template Name: Сегежа — Структура группы
 *
 * @package Segeja
 */

get_header();

$divisions = [
    [
        'title' => 'Бумага и упаковка',
        'description' => 'Базовые активы по выпуску целлюлозы, бумаги и крафт-упаковки с фокусом на экспорт и внутренний рынок.',
        'items' => [
            ['label' => 'Сегежский ЦБК', 'link' => 'https://segezha-group.com/about/factory/scbk/'],
            ['label' => 'Сокольский ЦБК', 'link' => 'https://segezha-group.com/about/factory/sokolskiy_tsellyulozno_bumazhnyy_kombinat/'],
            ['label' => 'Сегежская упаковка', 'link' => 'https://segezha-group.com/about/factory/segezhskaya_upakovka/'],
        ],
    ],
    [
        'title' => 'Фанера и плиты',
        'description' => 'Производство берёзовой фанеры, плитных материалов и решений для мебельной и строительной отраслей.',
        'items' => [
            ['label' => 'Лесосибирский ЛДК №1', 'link' => 'https://segezha-group.com/about/factory/ldk1/'],
            ['label' => 'Вятский фанерный комбинат', 'link' => 'https://segezha-group.com/about/factory/vyatskiy_fanernyy_kombinat/'],
            ['label' => 'Галичский фанерный комбинат', 'link' => 'https://segezha-group.com/about/factory/galichskiy_fanernyy_kombinat/'],
            ['label' => 'Фанерный завод «КРАСФАН»', 'link' => 'https://segezha-group.com/about/factory/krasfan/'],
        ],
    ],
    [
        'title' => 'Пиломатериалы',
        'description' => 'Комплекс предприятий по глубокой переработке хвойной древесины и поставкам пиломатериалов.',
        'items' => [
            ['label' => 'Сокольский ДОК', 'link' => 'https://segezha-group.com/about/factory/sokolskiy_derevoobrabatyvayushchiy_kombinat/'],
            ['label' => 'Онежский ЛДК', 'link' => 'https://segezha-group.com/about/factory/onezhskiy_ldk/'],
            ['label' => 'Карелиан Вуд Кампани', 'link' => 'https://segezha-group.com/about/factory/karelian_vud_kampani/'],
            ['label' => 'Ксилотек-Сибирь', 'link' => 'https://segezha-group.com/about/factory/ksilotek_sibir/'],
            ['label' => 'Новоенисейский ЛХК', 'link' => 'https://segezha-group.com/about/factory/novoeniseyskiy_lesokhimicheskiy_kombinat_/'],
            ['label' => 'Тимбер Транс', 'link' => 'https://segezha-group.com/about/factory/timber-trans/'],
            ['label' => 'Приангарский ЛПК', 'link' => 'https://segezha-group.com/about/factory/plpk/'],
            ['label' => 'Тайрику-Игирма', 'link' => 'https://segezha-group.com/about/factory/tayriku-igirma-grupp/'],
        ],
    ],
    [
        'title' => 'Лесозаготовка',
        'description' => 'Аренда лесных фондов и заготовка древесины в ключевых регионах России.',
        'items' => [
            ['label' => 'Архангельская область', 'link' => 'https://segezha-group.com/about/factory/lesozagotovka_arkhangelskaya_oblast/'],
            ['label' => 'Вологодская область', 'link' => 'https://segezha-group.com/about/factory/lesozagotovka_vologodskaya_oblast/'],
            ['label' => 'Кировская область', 'link' => 'https://segezha-group.com/about/factory/lesozagotovka_kirovskaya_oblast/'],
            ['label' => 'Красноярский край', 'link' => 'https://segezha-group.com/about/factory/lesozagotovka_krasnoyarskiy_kray/'],
            ['label' => 'Республика Карелия', 'link' => 'https://segezha-group.com/about/factory/lesozagotovka_respublika_kareliya/'],
            ['label' => 'Галич Лес', 'link' => 'https://segezha-group.com/about/factory/ooo_galich_les/'],
        ],
    ],
    [
        'title' => 'КДК и клееный брус',
        'description' => 'Деревянное домостроение, CLT-панели и клеёные конструкции для строительства.',
        'items' => [
            ['label' => 'Сокольский ДОК', 'link' => 'https://segezha-group.com/about/factory/sokolskiy_derevoobrabatyvayushchiy_kombinat/'],
            ['label' => 'Sokol CLT', 'link' => 'https://segezha-group.com/about/factory/sokol_si_el_ti/'],
        ],
    ],
    [
        'title' => 'Сервисные и инфраструктурные активы',
        'description' => 'Поддерживающие направления — энергетика, проектирование и общий центр обслуживания.',
        'items' => [
            ['label' => 'Онега-Энергия', 'link' => 'https://segezha-group.com/about/factory/onega_energiya/'],
            ['label' => 'Гипробум', 'link' => 'https://segezha-group.com/about/factory/giprobum/'],
            ['label' => 'Общий центр обслуживания', 'link' => 'https://segezha-group.com/about/factory/segezha_grupp_otso/'],
        ],
    ],
];
?>

<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <div class="card border-0 shadow-sm mb-10 bgi-no-repeat bgi-position-center bgi-size-cover" style="background-image:url('https://segezha-group.com/upload/iblock/6d9/r958m3gnu2jb1kcxo86l07jwmngjyusf.png');">
                        <div class="card-body p-10 bg-dark bg-opacity-50 rounded">
                            <span class="badge badge-light-success mb-3">Segezha Group</span>
                            <h1 class="text-white fw-bold mb-5">Структура группы</h1>
                            <p class="fs-5 text-white text-opacity-75 mb-0">
                                Управляющая компания объединяет пять бизнес-дивизионов и сервисные функции —
                                от лесозаготовки и переработки древесины до выпуска конечной упаковочной продукции.
                            </p>
                        </div>
                    </div>

                    <div class="card card-flush border-dashed mb-10">
                        <div class="card-body p-8">
                            <div class="row g-10">
                                <div class="col-lg-4">
                                    <div class="d-flex flex-column h-100 pe-lg-10">
                                        <h2 class="text-gray-900 fw-bold">Вертикально-интегрированная модель</h2>
                                        <p class="text-gray-600 fs-5 mt-4">
                                            Холдинг контролирует все этапы цепочки: аренду лесных участков,
                                            заготовку, переработку, логистику и поставку продукции на российский и международный рынки.
                                        </p>
                                        <div class="mt-auto">
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="ki-duotone ki-verify fs-2 text-success me-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <span class="fw-semibold text-gray-800">5 бизнес-дивизионов</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-3">
                                                <i class="ki-duotone ki-setting-3 fs-2 text-success me-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <span class="fw-semibold text-gray-800">Собственные сервисные и энергетические активы</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-graph fs-2 text-success me-3">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                <span class="fw-semibold text-gray-800">Фокус на добавленной стоимости и экспортных рынках</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card border-0 bg-light p-6 h-100">
                                        <h3 class="fw-bold text-gray-900 mb-5">Быстрые ссылки</h3>
                                        <div class="d-flex flex-wrap gap-4">
                                            <a class="btn btn-light-primary" target="_blank" rel="noreferrer noopener" href="https://segezha-group.com/about/company-profile/">Профиль компании</a>
                                            <a class="btn btn-light-primary" target="_blank" rel="noreferrer noopener" href="https://segezha-group.com/about/compliance/">Соответствие нормам</a>
                                            <a class="btn btn-light-primary" target="_blank" rel="noreferrer noopener" href="https://segezha-group.com/about/business-model/">Безотходная модель</a>
                                            <a class="btn btn-light-primary" target="_blank" rel="noreferrer noopener" href="https://segezha-group.com/about/contacts/">Контакты</a>
                                        </div>
                                        <div class="alert alert-primary mt-6 mb-0">
                                            <div class="alert-icon">
                                                <i class="ki-duotone ki-information-4 fs-2 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </div>
                                            <div class="alert-text">
                                                В основе управления — единый центр компетенций и Общий центр обслуживания, обеспечивающие стандартизированные процессы для всех предприятий.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-6">
                        <?php foreach ($divisions as $division) : ?>
                            <div class="col-xl-4 col-md-6">
                                <div class="card card-flush h-100 border-dashed">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="fw-bold text-gray-900"><?php echo esc_html( $division['title'] ); ?></h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-gray-600 mb-5"><?php echo esc_html( $division['description'] ); ?></p>
                                        <ul class="list-unstyled m-0">
                                            <?php foreach ($division['items'] as $item) : ?>
                                                <li class="mb-3">
                                                    <a class="fw-semibold text-gray-800 text-hover-primary" target="_blank" rel="noreferrer noopener" href="<?php echo esc_url( $item['link'] ); ?>">
                                                        <?php echo esc_html( $item['label'] ); ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
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

