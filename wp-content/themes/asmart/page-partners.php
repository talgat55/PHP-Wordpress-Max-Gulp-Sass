<?php
/*
 * Template Name: Страница Партнеров
 */
get_header(); ?>
    <div id="primary" class="page-main  page-partners">
        <?php get_template_part('inc/hero'); ?>
        <div class="container">
            <div class="row">
                <div class="page-partners_border"></div>
                <p class="page-partners_description text-center" >
                    Партнеры журнала «Максимум» - это более 2500 предприятий и организаций г. Омска,тысячи предприятий
                    г. Новосибирска, Екатеринбурга, Тюмени, Красноярска и других городов Уральского и Сибирского
                    Федеральных округов.<br><br>

                    Партнерами сайта журнала стали предприятия и организации всей страны, ближнего и дальнего зарубежья.
                    50% посетителей сайта maxiomsk.ru - иногородние пользователи из Москвы и Южно-Сахалинска, Нижнего
                    Новгорода и Хабаровска, Архангельска и Вологды, Астаны и Днепропетровска, Гамбурга и Риги.
                    <br><br>
                    Будем рады видеть Вас в числе наших партнеров!
                </p>
                <div class="d-flex w-100 justify-content-center">
                    <a href="#" class="link link-main  alt">
                        стать партнёром
                    </a>
                </div>
                <div class="page-partners_partners-list row">
                    <?php
                    $arg = [
                        'posts_per_page' => -1,
                        'post_type' => 'partners',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'status' => 'publish'
                    ];

                    ?>
                    <?php
                    $the_query = new WP_Query($arg);

                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $post_id = $the_query->post->ID;
                        ?>
                        <div class="page-partners_partners-list_item d-flex col-lg-3 col-md-6 col-sm-12 align-items-center justify-content-center">
                            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0]; ?>" alt="Изображение" />
                        </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>

            </div>
        </div>
    </div>
<?php get_footer();
