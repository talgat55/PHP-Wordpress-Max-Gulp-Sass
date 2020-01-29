<?php
/*
 * Template Name: Страница  рекламодателей
 */
get_header(); ?>
    <div id="primary" class="  page-main  page-advertisers">
        <?php get_template_part('inc/hero'); ?>
        <div class="container">
            <div class="row">

                <div class="page-advertisers_description d-flex w-100">
                    <div
                            data-aos="fade-right"
                            data-aos-easing="ease-in-out"
                            data-aos-once="true"
                            class="page-advertisers_content_first col">
                        <div class="page-advertisers_content_first_text">
                            <?php while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div
                            data-aos="fade-left"
                            data-aos-easing="ease-in-out"
                            data-aos-once="true"
                            class="page-advertisers_content_second col">
                        ТЕХНИЧЕСКИЕ <span>ТРЕБОВАНИЯ</span>
                    </div>
                </div>
            </div>
            <div class="page-advertisers_additional row  ">
                <?php $gallery = get_field('gallery'); ?>
                <div class="w-100 ">
                    <div class="page-advertisers_gallery ">
                        <?php foreach ($gallery as $galleryItem): ?>
                            <div class="page-advertisers_gallery_item">
                                <a href="<?php echo $galleryItem['url']; ?>"   data-lightbox="example-set"  class="page-advertisers_gallery_item_link">
                                    <img src="<?php echo $galleryItem['sizes']['advertissers-img']; ?>"
                                         alt="Изображение"/>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="page-advertisers_last-text  row  ">
                <?php $rules_articles = get_field('rules_articles'); ?>
                <?php echo $rules_articles; ?>
            </div>

            <?php get_template_part('inc/feedback'); ?>
        </div>
    </div>
<?php get_footer();
