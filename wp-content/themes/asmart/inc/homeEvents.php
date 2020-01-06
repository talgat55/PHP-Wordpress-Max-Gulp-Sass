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
    'post_type' => 'events',
    'orderby' => 'date',
    'order' => 'ASC',
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
                    $cat = get_field('part', $post_id);
                    $classItem = $i == 0 ? '__first' : '__second';
                    if ($i == 0) {
                        $classItem = '__first';
                        $first = true;
                        $classRow = 'col-lg-6 col-md-12';
                    } else {
                        $classItem = '__second';
                        $first = false;
                        $classRow = 'col-lg-12 col-md-12';
                    }

                    if($i == 1){
                        echo '<div class="col-lg-6 col-md-12">';
                    }

                    ?>
                    <div class="events-section_list_item events-section_list_item<? echo $classItem; ?>  <?php echo $classRow; ?> "
                    >
                        <div class="events-section_list_item events-section_list_item__wrap"
                             style="background: url(<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0]; ?>)"
                        >
                            <div class="events-section_list_item_category">
                                <?php echo $cat ;?>
                            </div>
                        <div class="events-section_list_item_content">
                            <a href="<?php echo get_the_permalink($post_id); ?>" class="events-section_list_item_content_title">

                                <? echo get_the_title($post_id) ?>
                            </a>
                            <?php if ($first) : ?>
                                <div class="events-section_list_item_content_text">
                                    <? echo $anons; ?>
                                </div>
                            <?php endif; ?>
                            <div class="events-section_list_item_content_addition d-flex align-items-center justify-content-between">
                                <div class="events-section_list_item_content_addition_date">
                                    <?php echo get_the_date('d M Y', $post_id); ?>
                                </div>
                                <a href="<?php echo get_the_permalink($post_id); ?> "
                                   class="events-section_list_item_content_addition_link">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <?php

                    if($i == 2){
                        echo '</div>';
                    }

                    $i++;
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</section>
