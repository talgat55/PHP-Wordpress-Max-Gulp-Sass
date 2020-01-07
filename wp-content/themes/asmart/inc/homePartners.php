<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 07.01.20
 * Time: 12:52
 */
?>
<section class="partners-section">
    <div class="container">
        <div class="row">
            <h2 class="sub-title w-100">
                Партнёры
            </h2>
            <p class="partners-section_sub-text">
                Партнеры журнала «Максимум» - это более 2500 предприятий и организаций по всей стране, а также ближнего и дальнего зарубежья.
                Будем рады видеть Вас в числе наших партнеров!
            </p>
        </div>
        <div class="row w-100">
            <div class="partners-section_carousel w-100">
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
                    <div class="partners-section_carousel_item">
                        <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0]; ?>" alt="Изображение слайдера" />
                    </div>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
            <div class="d-flex w-100 justify-content-center">
                <a href="#" class="link link-main">
                    все партнёры
                </a>
            </div>
        </div>
    </div>
</section>
