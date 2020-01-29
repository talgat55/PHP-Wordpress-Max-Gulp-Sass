<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 06.01.20
 * Time: 17:47
 */
?>
<section class="home-portfolio">
    <div class="container">
        <div class="row">
            <h2 class="sub-title">
                Наши проекты
            </h2>
        </div>
        <div class="row">
            <div class="home-portfolio_carousel  d-flex">
                <?php
                $arg = [
                    'posts_per_page' => -1,
                    'post_type' => 'portfolio',
                    'meta_key'			=> 'sort',
                    'orderby'			=> 'meta_value',
                    'order'				=> 'ASC',
                    'status' => 'publish'
                ];

                ?>
                <?php
                $the_query = new WP_Query($arg);

                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $post_id = $the_query->post->ID;
                    $anons = get_field('anons', $post_id);
                    $linkToFile = get_field('link_to_file',$post_id);
                    $linkToPage = get_field('link_to_page',$post_id);
                    if(!empty($linkToFile)){
                        $redySecondLink = $linkToFile;
                    }else{
                        $redySecondLink = $linkToPage ? $linkToPage : '';
                    }
                    ?>
                        <div class="home-portfolio_carousel_item" >
                            <div class="home-portfolio_carousel_item_img-block">
                                <div class="home-portfolio_carousel_item_img-block_overlay"></div>
                                <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "portfolio-home")[0]; ?>" alt="Изображение слайдера" />
                                    <div class="home-portfolio_carousel_item_img-block_hover-block">
                                        <a target="_blank" href="<?php echo $redySecondLink; ?> "
                                           class="home-portfolio_carousel_item_img-block_hover-block_link">
                                            Читать выпуск
                                        </a>
                                    </div>
                            </div>
                            <a target="_blank"   href="<?php echo $redySecondLink; ?>" class="home-portfolio_carousel_item_title">
                                <? echo get_the_title($post_id) ?>
                            </a>
                            <div class="home-portfolio_carousel_item_text">
                                <?php  echo mb_strimwidth(get_the_content($post_id), 0, 125, "...");   ?>
                            </div>
                        </div>
                    <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
            <div class="d-flex w-100 justify-content-center">
                <a href="/nashi-proekti/" class="link link-main">
                    Смотреть все проекты
                </a>
            </div>
        </div>
    </div>
</section>

