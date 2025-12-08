<?php
$current_user = wp_get_current_user();
$birthday_colleagues = array();

if ($current_user->ID && class_exists('Segezha_Birthday_Manager')) {
    // Получаем дни рождения коллег из подразделения
    $birthday_manager = Segezha_Birthday_Manager::get_instance();
    $department_birthdays = $birthday_manager->get_department_birthdays($current_user->ID, 10);
    
    // Получаем дни рождения руководителей
    $managers_birthdays = $birthday_manager->get_managers_birthdays($current_user->ID, 10);
    
    // Объединяем
    $all_birthdays = array_merge($department_birthdays, $managers_birthdays);
    
    // Удаляем дубликаты
    $unique_birthdays = array();
    $seen_ids = array();
    foreach ($all_birthdays as $birthday) {
        if (!in_array($birthday['user_id'], $seen_ids, true)) {
            $unique_birthdays[] = $birthday;
            $seen_ids[] = $birthday['user_id'];
        }
    }
    
    // Сортируем по дате
    usort($unique_birthdays, function($a, $b) {
        return $a['days_until'] - $b['days_until'];
    });
    
    $birthday_colleagues = $unique_birthdays;
}

$birthday_total = count($birthday_colleagues);
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
                    <label class="form-label fw-semibold text-gray-700">Коллеги из подразделения</label>
                </div>
                <div class="w-200px">
                    <label class="form-label fw-semibold text-gray-700">Руководители</label>
                </div>
            </div>
        </div>
        <!--end::Followers toolbar-->

        <!--begin::Row-->
        <div class="row g-6 mb-6 g-xl-9 mb-xl-9">
            <?php 
            if (!empty($birthday_colleagues)) :
                foreach ($birthday_colleagues as $colleague) :
                    $initial = mb_substr($colleague['name'], 0, 1);
            ?>
                <div class="col-md-6 col-xxl-4">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-center flex-column text-center py-9 px-5">
                            <div class="symbol symbol-65px symbol-circle mb-5 position-relative">
                                <?php if (!empty($colleague['avatar'])) : ?>
                                    <img src="<?php echo esc_url($colleague['avatar']); ?>" alt="<?php echo esc_attr($colleague['name']); ?>">
                                <?php else : ?>
                                    <span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">
                                        <?php echo esc_html(mb_strtoupper($initial)); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <a href="<?php echo esc_url(get_author_posts_url($colleague['user_id'])); ?>" class="fs-4 text-gray-900 text-hover-primary fw-bold mb-1">
                                <?php echo esc_html($colleague['name']); ?>
                            </a>
                            <?php if (!empty($colleague['position'])) : ?>
                            <div class="fw-semibold text-gray-500 mb-4"><?php echo esc_html($colleague['position']); ?></div>
                            <?php endif; ?>
                            <div class="d-flex flex-column align-items-center mb-4">
                                <span class="badge badge-light-primary fs-7 fw-bold mb-2">
                                    <?php echo esc_html($colleague['birthday']); ?>
                                </span>
                                <?php if (!empty($colleague['department'])) : ?>
                                <span class="text-gray-600 fw-semibold"><?php echo esc_html($colleague['department']); ?></span>
                                <?php endif; ?>
                                <?php if (!empty($colleague['organization'])) : ?>
                                <span class="text-gray-500"><?php echo esc_html($colleague['organization']); ?></span>
                                <?php endif; ?>
                            </div>
                            <button class="btn btn-sm btn-light-primary btn-flex btn-center w-100">
                                <i class="ki-duotone ki-message-text-2 fs-3 me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                Поздравить
                            </button>
                        </div>
                    </div>
                </div>
            <?php 
                endforeach;
            else :
            ?>
            <div class="col-12">
                <div class="alert alert-info">
                    <p class="mb-0">Нет предстоящих дней рождений коллег из вашего подразделения или руководителей.</p>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <!--end::Row-->
    </div>
</div>








