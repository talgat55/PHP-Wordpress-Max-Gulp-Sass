<?php
/*
 * Template Name: Страница новостей
 */
get_header(); ?>
    <div id="primary" class="  page-main  page-news">
        <?php get_template_part('inc/hero'); ?>
        <div class="container">
            <div class="row">
                <ul class="page-news_category-block d-lg-flex w-100  align-items-center w-100">
                    <?php
                    $categories = get_categories(array(
                        'taxonomy' => 'category',
                        'type' => 'post',
                        'hide_empty' => false,
                        'hierarchical' => 1,
                        // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
                    ));
                    array_shift($categories);  // delete first element array uncategories
                    ?>
                    <li class="page-news_category-block_item  ">
                        <a
                                href="#"
                                class="page-news_category-block_item_link  page-news_category-block_item_link__active"
                                data-slug="all"
                        >
                           Все
                        </a>
                    </li>
                    <?php foreach ($categories as $category) : ?>
                        <li class="page-news_category-block_item">
                            <a
                                    href="#"
                                    class="page-news_category-block_item_link"
                                    data-slug="<?php echo $category->term_id; ?>"
                            >
                                <?php  echo $category->name; ?>
                            </a>
                        </li>

                    <?php endforeach; ?>
                </ul>
                <div class="page-news_list-row row  " >
                    <?php
                    $arg = [
                        'posts_per_page' => 12,
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'status' => 'publish',
                        'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                    ];
                    ?>
                    <?php
                    $the_query = new WP_Query($arg);

                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $post_id = $the_query->post->ID;
                         get_template_part('inc/post-item');
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
                <div class="news-pagination d-flex justify-content-center w-100">
                    <a href="<?=$url; ?>" class="link link-main alt load-more" data-page="2">
                        Показать ещё
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();
