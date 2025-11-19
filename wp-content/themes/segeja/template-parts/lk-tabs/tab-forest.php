<?php
/**
 * Контент вкладки «Лес возможностей».
 *
 * Здесь можно подключать виджеты, формы и логику,
 * связанную с соц. капиталом пользователя.
 *
 * @package segeja
 */
?>

<div class="row g-5 g-xxl-8" data-lk-tab-content="forest">
    <div class="col-xxl-8">
        <div class="card card-flush h-100">
            <div class="card-header align-items-center pb-3">
                <div>
                    <h3 class="card-title fw-bold text-gray-900 mb-0">Лес возможностей</h3>
                    <span class="text-muted fs-7">Витрина инициатив и программ развития</span>
                </div>
                <div class="card-toolbar">
                    <a class="btn btn-sm btn-primary" href="#">Создать инициативу</a>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="border rounded p-5 h-100">
                            <span class="badge badge-light-success mb-3">Наставничество</span>
                            <h4 class="text-gray-900 fw-bold">Программа «Лесные проводники»</h4>
                            <p class="text-gray-600 mb-4">Поддержка новых сотрудников и обмен опытом с ведущими архитекторами решений.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted fs-7">18 наставников</span>
                                <button class="btn btn-sm btn-light-primary">Подробнее</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="border rounded p-5 h-100">
                            <span class="badge badge-light-primary mb-3">Развитие</span>
                            <h4 class="text-gray-900 fw-bold">Хакатон «Экотропа»</h4>
                            <p class="text-gray-600 mb-4">Совместная разработка цифровых сервисов для бережного отношения к ресурсам.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted fs-7">Команды: 12/20</span>
                                <button class="btn btn-sm btn-light-primary">Подать заявку</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="border rounded p-5 h-100">
                            <span class="badge badge-light-warning mb-3">Обучение</span>
                            <h4 class="text-gray-900 fw-bold">Трек «Зеленая архитектура»</h4>
                            <p class="text-gray-600 mb-4">4-недельная программа по построению устойчивой инфраструктуры.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted fs-7">Старт: 12 марта</span>
                                <button class="btn btn-sm btn-light-primary">Записаться</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="border rounded p-5 h-100">
                            <span class="badge badge-light-dark mb-3">Комьюнити</span>
                            <h4 class="text-gray-900 fw-bold">Лаборатория идей</h4>
                            <p class="text-gray-600 mb-4">Открытые брейнштормы и weekly-сессии с лидерами направлений.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted fs-7">Точки сбора: online/offline</span>
                                <button class="btn btn-sm btn-light-primary">Присоединиться</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-4">
        <div class="card h-100 border-dashed">
            <div class="card-body d-flex flex-column justify-content-center text-center">
                <i class="ki-duotone ki-abstract-41 fs-3qx text-success mb-5"></i>
                <h4 class="fw-bold text-gray-900">Ваша персональная карьера</h4>
                <p class="text-muted mb-6 px-md-6">Добавьте свои цели роста, и мы подберем подходящие активности, наставников и задачи.</p>
                <button class="btn btn-success mx-auto">Добавить цель</button>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-header border-0 pb-0">
                <h4 class="card-title text-gray-900 fw-bold mb-0">Статистика участия</h4>
            </div>
            <div class="card-body pt-4">
                <div class="d-flex flex-column gap-4">
                    <div class="d-flex justify-content-between">
                        <span class="text-gray-700 fw-semibold">Программы</span>
                        <span class="text-gray-900 fw-bold">5 / 8</span>
                    </div>
                    <div class="progress h-6px">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 62%;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="text-gray-700 fw-semibold">События недели</span>
                        <span class="text-gray-900 fw-bold">3</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="text-gray-700 fw-semibold">Новые контакты</span>
                        <span class="text-gray-900 fw-bold">14</span>
                    </div>
                    <a class="btn btn-light-success mt-2" href="#">Посмотреть рекомендации</a>
                </div>
            </div>
        </div>
    </div>
</div>

