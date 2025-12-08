<!--end:::Main-->
    </div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::App-->

<!--begin::Javascript-->
<script>var hostUrl = "<?php echo get_stylesheet_directory_uri(); ?>/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/global/plugins.bundle.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/widgets.bundle.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom/widgets.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom/apps/chat/chat.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom/utilities/modals/create-app.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom/utilities/modals/new-target.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->
<!--begin::News Filter Script-->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Обработчик для кнопки "Применить фильтр" в header
    var applyFilterBtn = document.getElementById('apply-news-filter');
    var clearFilterBtn = document.getElementById('clear-news-filter');
    
    if (applyFilterBtn) {
        applyFilterBtn.addEventListener('click', function() {
            var checkboxes = document.querySelectorAll('#kt_header_news_filter_menu .news-filter-checkbox:checked');
            var selectedTags = Array.from(checkboxes).map(function(cb) {
                return cb.value;
            });
            
            // Обновляем URL с параметрами фильтра
            var url = new URL(window.location.href);
            if (selectedTags.length > 0) {
                url.searchParams.set('news_tags', selectedTags.join(','));
            } else {
                url.searchParams.delete('news_tags');
            }
            window.location.href = url.toString();
        });
    }
    
    if (clearFilterBtn) {
        clearFilterBtn.addEventListener('click', function() {
            var checkboxes = document.querySelectorAll('#kt_header_news_filter_menu .news-filter-checkbox');
            checkboxes.forEach(function(cb) {
                cb.checked = false;
            });
            
            // Удаляем параметр из URL
            var url = new URL(window.location.href);
            url.searchParams.delete('news_tags');
            window.location.href = url.toString();
        });
    }
    
    // Восстанавливаем выбранные теги из URL
    var urlParams = new URLSearchParams(window.location.search);
    var newsTags = urlParams.get('news_tags');
    if (newsTags) {
        var tags = newsTags.split(',');
        tags.forEach(function(tag) {
            var checkbox = document.querySelector('#kt_header_news_filter_menu .news-filter-checkbox[value="' + tag + '"]');
            if (checkbox) {
                checkbox.checked = true;
            }
        });
    }
});
</script>
<!--end::News Filter Script-->
<!--end::Javascript-->

<?php wp_footer(); // Хук WordPress для вывода необходимых скриптов и метаданных ?>

</body>
<!--end::Body-->
</html>