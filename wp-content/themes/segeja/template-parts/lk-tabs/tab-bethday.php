<?php
$birthday_filters = [
    'organizations' => [
        [
            'value' => 'all',
            'label' => 'Все организации',
        ],
        [
            'value' => 'segeja',
            'label' => 'ГК «Сегея»',
        ],
        [
            'value' => 'integral',
            'label' => 'ООО «Интеграл»',
        ],
    ],
    'departments'   => [
        [
            'value' => 'all',
            'label' => 'Все подразделения',
        ],
        [
            'value' => 'digital',
            'label' => 'Дирекция цифровых решений',
        ],
        [
            'value' => 'marketing',
            'label' => 'Маркетинг и коммуникации',
        ],
        [
            'value' => 'hr',
            'label' => 'HR и корпоративная культура',
        ],
    ],
];

$birthday_colleagues = [
    [
        'name'         => 'Анна Морозова',
        'position'     => 'Руководитель проектов',
        'department'   => 'Дирекция цифровых решений',
        'organization' => 'ГК «Сегея»',
        'birthday'     => '14 февраля',
        'photo'        => get_stylesheet_directory_uri() . '/assets/media/avatars/300-11.jpg',
        'status'       => 'available',
    ],
    [
        'name'         => 'Дмитрий Крылов',
        'position'     => 'Ведущий разработчик',
        'department'   => 'Маркетинг и коммуникации',
        'organization' => 'ООО «Интеграл»',
        'birthday'     => '15 февраля',
        'photo'        => get_stylesheet_directory_uri() . '/assets/media/avatars/300-6.jpg',
        'status'       => 'offline',
    ],
    [
        'name'         => 'Екатерина Лисицина',
        'position'     => 'HR Business Partner',
        'department'   => 'HR и корпоративная культура',
        'organization' => 'ГК «Сегея»',
        'birthday'     => '18 февраля',
        'photo'        => '',
        'status'       => 'available',
    ],
];

$birthday_total = count( $birthday_colleagues );
?>

<div class="card mb-5 mb-xl-10">
    <div class="card-body">
        <!--begin::Followers toolbar-->
        <div class="d-flex flex-wrap flex-stack mb-6">
            <div class="d-flex flex-column">
                <h3 class="text-gray-800 fw-bold my-2">
                    Ближайшие дни рождения
                    <span class="fs-6 text-gray-500 fw-semibold ms-1">(<?php echo esc_html( $birthday_total ); ?>)</span>
                </h3>
                <span class="text-gray-500 fw-semibold">Поздравьте коллег и запланируйте поздравления заранее</span>
            </div>
            <div class="d-flex flex-wrap gap-4 my-2">
                <div class="w-200px">
                    <label class="form-label fw-semibold text-gray-700">Организация</label>
                    <select class="form-select form-select-sm form-select-solid w-200px" data-control="select2" data-hide-search="true" data-placeholder="Выберите организацию">
                        <?php foreach ( $birthday_filters['organizations'] as $organization ) : ?>
                            <option value="<?php echo esc_attr( $organization['value'] ); ?>">
                                <?php echo esc_html( $organization['label'] ); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="w-200px">
                    <label class="form-label fw-semibold text-gray-700">Подразделение</label>
                    <select class="form-select form-select-sm form-select-solid w-200px" data-control="select2" data-hide-search="true" data-placeholder="Выберите подразделение">
                        <?php foreach ( $birthday_filters['departments'] as $department ) : ?>
                            <option value="<?php echo esc_attr( $department['value'] ); ?>">
                                <?php echo esc_html( $department['label'] ); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        <!--end::Followers toolbar-->

        <!--begin::Row-->
        <div class="row g-6 mb-6 g-xl-9 mb-xl-9">
            <?php foreach ( $birthday_colleagues as $colleague ) :
                $initial = mb_substr( $colleague['name'], 0, 1 );
                ?>
                <div class="col-md-6 col-xxl-4">
                    <div class="card h-100" data-organization="<?php echo esc_attr( $colleague['organization'] ); ?>" data-department="<?php echo esc_attr( $colleague['department'] ); ?>">
                        <div class="card-body d-flex flex-center flex-column text-center py-9 px-5">
                            <div class="symbol symbol-65px symbol-circle mb-5 position-relative">
                                <?php if ( ! empty( $colleague['photo'] ) ) : ?>
                                    <img src="<?php echo esc_url( $colleague['photo'] ); ?>" alt="<?php echo esc_attr( $colleague['name'] ); ?>">
                                <?php else : ?>
                                    <span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">
                                        <?php echo esc_html( mb_strtoupper( $initial ) ); ?>
                                    </span>
                                <?php endif; ?>
                                <?php if ( 'available' === $colleague['status'] ) : ?>
                                    <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                                <?php else : ?>
                                    <div class="bg-gray-400 position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                                <?php endif; ?>
                            </div>
                            <a href="#" class="fs-4 text-gray-900 text-hover-primary fw-bold mb-1">
                                <?php echo esc_html( $colleague['name'] ); ?>
                            </a>
                            <div class="fw-semibold text-gray-500 mb-4"><?php echo esc_html( $colleague['position'] ); ?></div>
                            <div class="d-flex flex-column align-items-center mb-4">
                                <span class="badge badge-light-primary fs-7 fw-bold mb-2">
                                    <?php echo esc_html( $colleague['birthday'] ); ?>
                                </span>
                                <span class="text-gray-600 fw-semibold"><?php echo esc_html( $colleague['department'] ); ?></span>
                                <span class="text-gray-500"><?php echo esc_html( $colleague['organization'] ); ?></span>
                            </div>
                            <button class="btn btn-sm btn-light-primary btn-flex btn-center w-100">
                                <i class="ki-duotone ki-message-text-2 fs-3 me-2"></i>
                                Поздравить
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!--end::Row-->
    </div>
</div>

