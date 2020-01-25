<?php
/*
 * Template Name: Страница портфолио
 */
get_header(); ?>
    <div id="primary" class="  page-main  page-portfolio">
        <?php get_template_part('inc/hero'); ?>
        <div class="container">
            <div class="row">
                <ul class="page-portfolio_list-portfolio w-100">
                    <?php
                    $arg = [
                        'posts_per_page' => -1,
                        'post_type' => 'portfolio',
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
                        <li class="page-portfolio_list-portfolio_item  row  align-items-center">
                            <div class="page-portfolio_list-portfolio_item_content  col-lg-6  col-md-12 col-sm-12">
                                <h3 class="page-portfolio_list-portfolio_item_content_title">
                                    <?php echo get_the_title($post_id); ?>
                                </h3>
                                <div class="page-portfolio_list-portfolio_item_content_text">
                                    <?php echo get_the_content($post_id); ?>
                                </div>
                                <div class="page-portfolio_list-portfolio_item_content_links  d-flex">
                                    <a href="#" class="link link-main">
                                        РАЗМЕСТИТЬСЯ В КАТАЛОГЕ
                                    </a>
                                    <a href="#" class="link link-main alt">
                                        ЧИТАТЬ ВЫПУСК
                                    </a>
                                </div>

                            </div>
                            <div class="page-portfolio_list-portfolio_item_img  col-lg-6   col-md-12 col-sm-12">
                                <div class="page-portfolio_list-portfolio_item_img_img-wrapper">
                                    <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0]; ?>"
                                         alt="Изображение"/>
                                </div>

                            </div>
                        </li>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </ul>

            </div>
        </div>
        <?php get_template_part('inc/lastArchive'); ?>
    </div>
<?php get_footer();
