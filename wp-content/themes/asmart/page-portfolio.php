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
                        'meta_key' => 'sort',
                        'orderby' => 'meta_value',
                        'order' => 'ASC',
                        'status' => 'publish'
                    ];
                    ?>
                    <?php
                    $the_query = new WP_Query($arg);

                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $post_id = $the_query->post->ID;

                        $linkToFile = get_field('link_to_file', $post_id);
                        $linkToPage = get_field('link_to_page', $post_id);
                        $linkToArchive = get_field('link_to_archive', $post_id);
                        if (!empty($linkToFile)) {
                            $redySecondLink = $linkToFile;
                        } else {
                            $redySecondLink = $linkToPage ? $linkToPage : '';
                        }

                        ?>
                        <li class="page-portfolio_list-portfolio_item  row  align-items-center">
                            <div class="page-portfolio_list-portfolio_item_content  col-lg-6  col-md-12 col-sm-12">
                                <h3 class="page-portfolio_list-portfolio_item_content_title">
                                    <?php echo get_the_title($post_id); ?>
                                </h3>
                                <div class="page-portfolio_list-portfolio_item_content_text">
                                    <?php echo get_the_content($post_id); ?>
                                </div>
                                <div class="page-portfolio_list-portfolio_item_content_links  row">
                                    <a href="#" class="link link-main">
                                        РАЗМЕСТИТЬСЯ В КАТАЛОГЕ
                                    </a>
                                    <a href="<?php echo $redySecondLink; ?>" target="_blank" class="link link-main alt">
                                        ЧИТАТЬ ВЫПУСК
                                    </a>
                                    <?php if (!empty($linkToArchive)): ?>
                                        <a href="<?php echo $linkToArchive; ?>" target="_blank"
                                           class="link link-main alt  link_archive">
                                            Архив
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="page-portfolio_list-portfolio_item_img  col-lg-6   col-md-12 col-sm-12">
                                <div class="page-portfolio_list-portfolio_item_img_img-wrapper">
                                    <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "portfolio-page-img")[0]; ?>"
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
