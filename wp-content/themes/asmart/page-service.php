<?php
/*
 * Template Name: Страница услуг
 */
get_header(); ?>
    <div id="primary" class="  page-main  page-service">
        <?php get_template_part('inc/hero'); ?>
        <div class="container">
            <div class="row">
                <div class="page-service_service-list">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
                <div class="d-flex w-100">
                    <div
                            data-aos="fade-right"
                            data-aos-easing="ease-in-out"
                            data-aos-once="true"
                            class="page-service_first-row col">
                        <h2 class="page-service_sub-title">
                            Прайс-лист
                        </h2>
                        <?php $prices = get_field('price'); ?>
                        <table class="page-service_table-prices table table-striped ">
                            <thead>
                            <tr>
                                <th scope="col">Варианты размещения</th>
                                <th scope="col">Стоимость (руб.)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($prices as $price) : ?>
                                <tr>
                                    <td scope="row"><?php echo $price['name']; ?></td>
                                    <td><?php echo $price['price']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div
                            data-aos="fade-left"
                            data-aos-easing="ease-in-out"
                            data-aos-once="true"
                            class="page-service_second-row col  d-flex justify-content-center">ПРАЙС-<span>ЛИСТ</span></div>
                </div>
                <?php get_template_part('inc/feedback'); ?>
            </div>
        </div>
    </div>
<?php get_footer();
