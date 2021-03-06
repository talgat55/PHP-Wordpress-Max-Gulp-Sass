<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 06.01.20
 * Time: 13:54
 */
?>
<?php
$arg = [
    'posts_per_page' => 3,
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'status' => 'publish'
];

?>
<section class="events-section">
    <div class="container">
        <div class="row">
            <h2 class="sub-title">
                События
            </h2>
        </div>
        <div class="row">
            <div class="events-section_list row">
                <?php
                $the_query = new WP_Query($arg);
                $i = 0;
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $post_id = $the_query->post->ID;
                    $anons = get_field('anons', $post_id);
                    $category = get_the_category($post_id);
                    $classItem = $i == 0 ? '__first' : '__second';
                    $firstImg = get_field('photo_first', $post_id);
                    $secondImg = get_field('photo_second', $post_id);

                    $redyFirstImg =  !empty($firstImg['sizes']['news-home-first']) ? $firstImg['sizes']['news-home-first']  : '';
                    $redySecondImg =  !empty($secondImg['sizes']['news-home-second']) ? $secondImg['sizes']['news-home-second']  : '';

                    if ($i == 0) {
                        $classItem = '__first';
                        $first = true;
                        $classRow = '  col-md-12';
                        $redyBgImg =  !empty($redyFirstImg) ? $redyFirstImg :  wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0];
                    } else {
                        $classItem = '__second';
                        $first = false;
                        $classRow = 'col-lg-12 col-md-12 ';
                        $redyBgImg =  !empty($redySecondImg) ? $redySecondImg :  wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0];
                    }

                    if ($i == 1) {
                        echo '<div class="events-section_list_second col-md-12 padding-right">';
                    }

                    ?>
                    <div class="events-section_list_item events-section_list_item<? echo $classItem; ?>  <?php echo $classRow; ?> "
                         data-aos="flip-left"
                         data-aos-offset="250"
                         data-aos-delay="150"
                         data-aos-easing="ease-in-out"
                         data-aos-once="true"
                    >

                        <a href="<?php echo get_the_permalink($post_id); ?>" class="events-section_list_item events-section_list_item__wrap"
                             style="background: url(<?= $redyBgImg; ?>)"
                        >
                            <div class="events-section_list_item_category">
                                <?php echo $category[0]->name; ?>
                            </div>
                            <div class="events-section_list_item_content">
                                <div class="events-section_list_item_content_title">
                                    <? echo get_the_title($post_id) ?>
                                </div>
                                <?php if ($first) : ?>
                                    <div class="events-section_list_item_content_text">

                                        <?php echo mb_strimwidth($anons, 0, 125, "..."); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="events-section_list_item_content_addition d-flex align-items-center justify-content-between">
                                    <div class="events-section_list_item_content_addition_date">
                                        <?php echo get_the_date('d F Y', $post_id); ?>
                                    </div>
                                    <div
                                            class="events-section_list_item_content_addition_link">
                                        Подробнее
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php

                    if ($i == 2) {
                        echo '</div>';
                    }

                    $i++;
                endwhile;
                wp_reset_query();
                ?>
            </div>
            <div class="d-flex w-100 justify-content-center">
                <a href="/news/" class="link link-main">
                    все события
                </a>
            </div>

        </div>
    </div>
</section>
