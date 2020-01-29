<?php
/*
 * Template Name: Страница  о журнале
 */
get_header(); ?>
    <div id="primary" class="  page-main  page-about">
        <?php get_template_part('inc/hero'); ?>
        <div class="container">
            <div class="row">
                <div class="page-about_blockquote">
                    <div class="page-about_blockquote_text">
                        <?php echo get_field('text_slogan'); ?>
                    </div>
                    <div class="page-about_blockquote_author">
                        <?php echo get_field('author_slogan'); ?>
                    </div>
                </div>
                <div class="page-about_devider"></div>
                <div class="page-about_description d-flex w-100">
                    <div data-aos="fade-right"
                         data-aos-easing="ease-in-out"
                         data-aos-once="true"
                            class="page-about_content_first col">
                        <div class="page-about_text">
                            <?php while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div
                            data-aos="fade-left"
                            data-aos-easing="ease-in-out"
                            data-aos-once="true"
                            class="page-about_content_second col">
                        ИЗДАЕТСЯ С <span>1998</span>
                    </div>
                </div>
            </div>
            <div class="page-about_additional row  ">
                <?php $addInfo = get_field('add_info'); ?>
                <?php foreach ($addInfo as $info): ?>
                    <div class="page-about_additional_item col-md-4 col-sm-12"><?php echo $info['first_block']; ?></div>
                    <div class="page-about_additional_item  col-md-8 col-sm-12"><?php echo $info['second_block']; ?></div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="page-about_last">
                    <?php echo get_field('last_block_info'); ?>
                </div>
            </div>
            <div class="row">
                <h2 class="page-about_title_team">
                    Сотрудники издательства
                </h2>
                <?php
                $arg = [
                    'posts_per_page' => -1,
                    'post_type' => 'team',
                    'meta_key' => 'sort',
                    'orderby' => 'meta_value',
                    'order' => 'ASC',
                    'status' => 'publish'
                ];
                ?>
                <div class="page-about_list-team">
                    <?php
                    $the_query = new WP_Query($arg);

                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $post_id = $the_query->post->ID;
                        ?>
                        <div class="page-about_list-team_item">
                            <div class="page-about_list-team_item_img-block">
                                <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0]; ?>"
                                     alt="Изображение"/>
                            </div>
                            <h3 class="page-about_list-team_item_title">
                                <?php echo get_the_title(); ?>
                            </h3>
                            <div class="page-about_list-team_item_position">
                                <?php echo get_field('position'); ?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
            </div>
            <div class="row">
                <h2 class="page-about_title_awards">
                    Награды
                </h2>
                <div class="page-about_awards w-100">
                    <div class="page-about_awards_first-block">
                        <div class="d-md-flex">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="page-about_awards_first-block_blockquote">
                                    По результатам отраслевых выставок журнал «Максимум» неоднократно награждался
                                    дипломами и золотыми медалями «За профессиональную информационную поддержку
                                    предприятий и организаций г. Омска».
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="d-flex justify-content-center">
                                    <img class="page-about_awards_first-block_awards-images"
                                         src="<?php echo get_theme_file_uri('/assets/images/awards.jpg') ?>"
                                         alt="Награды"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-about_awards_second-block">
                        <?php
                        $arg = [
                            'posts_per_page' => -1,
                            'post_type' => 'awards',
                            'status' => 'publish'
                        ];
                        ?>
                        <div class="page-about_awards_list-items w-100">
                            <?php
                            $the_query = new WP_Query($arg);
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $post_id = $the_query->post->ID;

                                ?>
                                <div class="page-about_awards_list-items_item">
                                    <a href="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0]; ?>" data-lightbox="example-set" class="page-about_awards_list-items_item_link">
                                        <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "awards-img")[0]; ?>"
                                             alt="Изображение"/>
                                    </a>

                                </div>
                            <?php
                            endwhile;
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php get_footer();
