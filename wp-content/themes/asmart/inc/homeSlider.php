<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 05.01.20
 * Time: 15:29
 */


$imgSlider = get_field('img_home_slider', 'option');
$imgSliderRedy = $imgSlider ? $imgSlider : '';
?>

<section
        class="home-slider"
        style="background: url(<?= $imgSliderRedy; ?>)"
>
    <div class="home-slider_slider">
        <?php
        $arg = array(
            'posts_per_page' => -1,
            'post_type' => 'home_slider',
            'status' => 'publish'
        );
        $the_query = new WP_Query($arg);

        while ($the_query->have_posts()) :
            $the_query->the_post();
            $post_id = $the_query->post->ID;
            $url     = get_field('link', $post_id);
            ?>
            <div class="home-slider_slider__item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="home-slider_first col-lg-6 col-md-6 col-sm-12">
                            <div class="home-slider_first__title">
                                <?= get_the_title($post_id); ?>
                            </div>
                            <div class="home-slider_first__text">
                                <?= get_the_content($post_id); ?>
                            </div>
                            <a href="<?=$url; ?>" class="link link-large">
                                Узнать подробнее
                            </a>
                        </div>
                        <div class="home-slider_second col-lg-6 col-md-6 col-sm-12">
                            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0]; ?>"
                                 alt="Изображение"/>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        wp_reset_query();
        ?>
    </div>
        <a href="#" class="home-slider_arrow-down">
            <svg width="21" height="30" viewBox="0 0 21 30" fill="none"  >
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3205 30C10.5708 30 10.8099 29.8969 10.9899 29.7253L20.3639 20.445C20.7342 20.0784 20.7333 19.485 20.3639 19.1194C19.9945 18.7528 19.3945 18.7528 19.0252 19.1194L11.2674 26.8003L11.2674 0.9375C11.2674 0.42 10.8436 -4.28271e-07 10.3205 -4.51137e-07C9.79735 -4.74004e-07 9.3736 0.42 9.3736 0.9375L9.3736 26.7994L1.61579 19.1194C1.24641 18.7528 0.646413 18.7537 0.277038 19.1194C-0.0923375 19.4859 -0.0923375 20.0794 0.277038 20.445L9.6511 29.7253C9.82829 29.9006 10.072 29.9972 10.3205 30Z" fill="#13273F"/>
            </svg>
        </a>
</section>
