<?php
/*
 * Template Name: Страница архива
 */
get_header(); ?>
    <div id="primary" class="  page-main  page-archive">
        <?php get_template_part('inc/hero'); ?>
        <div class="container">


              <div class="row">


                <ul class="page-archive_list-years d-lg-flex w-100  align-items-center w-100">
                    <?php

                    ?>
                    <li class="page-archive_list-years_item  ">
                        <a
                                href="#"
                                class="page-archive_list-years_item_link  page-archive_list-years_item_link__active"
                                data-slug="all"
                        >
                            Все
                        </a>
                    </li>
                    <?php foreach (get_archives_years_array() as $category) : ?>
                        <li class="page-archive_list-years_item  ">
                            <a
                                    href="#"
                                    class="page-archive_list-years_item_link"
                                    data-slug="<?=$category; ?>"
                            >
                                <?php echo $category; ?>
                            </a>
                        </li>

                    <?php endforeach; ?>
                </ul>
                <h2 class="page-archive_sub-title w-100" >
                    <?= get_archives_years_array()[0]; ?>
                </h2>
                <ul class="page-archive_list-items">
                    <?php
                    $arg = [
                        'posts_per_page' => 12,
                        'post_type' => 'archives',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'status' => 'publish',
                        'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                    ];
                    ?>
                    <?php

                    $the_query = new WP_Query($arg);

                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $post_id = $the_query->post->ID;
                        get_template_part('inc/archive-item');
                    endwhile;
                    wp_reset_query();
                    ?>
                </ul>
                <div class="news-pagination d-flex justify-content-center w-100">
                    <a href="<?= $url; ?>" class="link link-main alt   load-more-archive"  data-page="2">
                        Показать ещё
                    </a>
                </div>
            </div>

        </div>
    </div>
<?php get_footer();
