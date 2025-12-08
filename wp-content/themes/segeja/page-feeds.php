<?php
/**
 * Шаблон страницы «Медиацентр / Feeds».
 *
 * Template Name: Сегежа — Медиацентр
 *
 * @package Segeja
 */

get_header();

$news_items = [
    [
        'category' => 'Пресс-релиз',
        'title'    => 'Segezha Group запускает цифровой сервис для партнеров',
        'text'     => 'На новой платформе поставщики могут отслеживать заявки, реагировать на тендеры и обмениваться документами в режиме реального времени.',
        'date'     => '18 ноября 2025',
        'link'     => '#',
    ],
    [
        'category' => 'Новости производства',
        'title'    => 'CLT-панели Sokol CLT прошли обновлённую сертификацию',
        'text'     => 'Команда завода подтвердила соответствие стандартам деревянного домостроения и расширила географию поставок.',
        'date'     => '14 ноября 2025',
        'link'     => '#',
    ],
    [
        'category' => 'Социальные инициативы',
        'title'    => 'В регионах присутствия стартовала зимняя программа наставничества',
        'text'     => 'Сотрудники холдинга помогают школьникам и студентам познакомиться с современными профессиями ЛПК.',
        'date'     => '7 ноября 2025',
        'link'     => '#',
    ],
];

$social_updates = [
    [
        'channel' => 'Telegram',
        'text'    => 'Показываем, как организовано восстановление лесов в Архангельской области — прямое включение с делянки.',
        'time'    => '1 час назад',
    ],
    [
        'channel' => 'VK',
        'text'    => 'Публикуем фото из обновлённого Центра общественного обслуживания в Сегежском районе.',
        'time'    => '3 часа назад',
    ],
    [
        'channel' => 'Дзен',
        'text'    => 'Материал о том, как наши инженеры модернизируют линию по выпуску крафт-бумаги.',
        'time'    => 'Вчера',
    ],
];

$multimedia = [
    [
        'title' => 'Видеообзор: Галичский фанерный комбинат',
        'length' => '08:15',
        'link' => '#',
    ],
    [
        'title' => 'Подкаст «Лесные истории»: выпуск про CLT',
        'length' => '24:30',
        'link' => '#',
    ],
    [
        'title' => 'Интервью: как работает служба ESG в Segezha Group',
        'length' => '15:42',
        'link' => '#',
    ],
];
?>

<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <?php get_sidebar('landing'); ?>
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <div class="card border-0 shadow-sm mb-10 bgi-no-repeat bgi-position-center bgi-size-cover" style="background-image: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/media/stock/1600x800/img-8.jpg' ); ?>');">
                        <div class="card-body p-10 bg-dark bg-opacity-50 rounded">
                            <span class="badge badge-light-success mb-3">Медиацентр</span>
                            <h1 class="text-white fw-bold mb-5">Актуальные новости и контент Segezha Group</h1>
                            <p class="fs-5 text-white text-opacity-75 mb-6">
                                Здесь собраны оперативные обновления компании: пресс-релизы, инфоповоды,
                                анонсы мероприятий, посты из социальных сетей и свежие видео. Следите за развитием
                                холдинга без переключений между площадками.
                            </p>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="#news" class="btn btn-primary">Последние новости</a>
                                <a href="#subscriptions" class="btn btn-light text-dark fw-semibold">Подписаться на рассылку</a>
                            </div>
                        </div>
                    </div>

                    <div id="news" class="mb-12">
                        <div class="d-flex flex-stack mb-6">
                            <h2 class="text-gray-900 fw-bold">Лента новостей</h2>
                            <a href="#" class="btn btn-primary btn-sm">Все публикации</a>
                        </div>
                        <div class="row g-6">
                            <?php foreach ($news_items as $item) : ?>
                                <div class="col-md-4">
                                    <div class="card h-100 border-dashed">
                                        <div class="card-body p-6 d-flex flex-column">
                                            <span class="badge badge-light mb-3 text-uppercase"><?php echo esc_html( $item['category'] ); ?></span>
                                            <h3 class="text-gray-900 fw-bold mb-3"><?php echo esc_html( $item['title'] ); ?></h3>
                                            <p class="text-gray-600 flex-grow-1"><?php echo esc_html( $item['text'] ); ?></p>
                                            <div class="d-flex flex-stack pt-4">
                                                <span class="text-muted"><?php echo esc_html( $item['date'] ); ?></span>
                                                <a href="<?php echo esc_url( $item['link'] ); ?>" class="btn btn-sm btn-primary">Читать</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="row g-6 mb-12">
                        <div class="col-xl-6">
                            <div class="card h-100 card-flush border-dashed">
                                <div class="card-header border-0 pt-6">
                                    <h3 class="card-title fw-bold text-gray-900">Соцсети и мессенджеры</h3>
                                    <div class="card-toolbar">
                                        <a href="https://t.me/segezha_group" target="_blank" rel="noreferrer noopener" class="btn btn-primary btn-sm">Следить в Telegram</a>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="timeline">
                                        <?php foreach ($social_updates as $update) : ?>
                                            <div class="timeline-item align-items-start">
                                                <div class="timeline-label fw-semibold text-gray-600"><?php echo esc_html( $update['time'] ); ?></div>
                                                <div class="timeline-badge">
                                                    <i class="ki-duotone ki-chat-translate fs-2 text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <div class="timeline-content">
                                                    <span class="badge badge-light-success mb-2"><?php echo esc_html( $update['channel'] ); ?></span>
                                                    <p class="text-gray-800 mb-0"><?php echo esc_html( $update['text'] ); ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card h-100 card-flush border-dashed">
                                <div class="card-header border-0 pt-6">
                                    <h3 class="card-title fw-bold text-gray-900">Видео и аудио</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row g-5">
                                        <?php foreach ($multimedia as $media) : ?>
                                            <div class="col-12">
                                                <div class="d-flex align-items-center p-4 bg-light rounded">
                                                    <div class="symbol symbol-60px me-4">
                                                        <span class="symbol-label bg-white">
                                                            <i class="ki-duotone ki-play fs-2x text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h4 class="text-gray-900 fw-bold mb-1"><?php echo esc_html( $media['title'] ); ?></h4>
                                                        <span class="text-muted"><?php echo esc_html( $media['length'] ); ?></span>
                                                    </div>
                                                    <a href="<?php echo esc_url( $media['link'] ); ?>" class="btn btn-sm btn-primary">Смотреть</a>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="subscriptions" class="card border-0 bg-light p-10 mb-15">
                        <div class="row g-10 align-items-center">
                            <div class="col-lg-6">
                                <h2 class="fw-bold text-gray-900 mb-4">Подписка на обновления</h2>
                                <p class="fs-5 text-gray-700 mb-0">
                                    Получайте дайджест новостей, инвестиционные записи и приглашения на вебинары.
                                    Мы отправляем письма раз в неделю и всегда даём возможность отписаться в один клик.
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <form class="row g-4">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold text-gray-700">Имя</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Иван" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold text-gray-700">E-mail</label>
                                        <input type="email" class="form-control form-control-lg" placeholder="name@example.com" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label fw-semibold text-gray-700">Интересы</label>
                                        <select class="form-select form-select-lg" multiple data-placeholder="Выберите темы">
                                            <option value="news">Новости компании</option>
                                            <option value="invest">Инвесторам и акционерам</option>
                                            <option value="sust">Устойчивое развитие</option>
                                            <option value="career">Карьера</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 d-flex align-items-center gap-3">
                                        <button type="submit" class="btn btn-primary btn-lg">Подписаться</button>
                                        <span class="text-muted">Нажимая кнопку, вы соглашаетесь с политикой обработки данных.</span>
                                    </div>
                                </form>
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








