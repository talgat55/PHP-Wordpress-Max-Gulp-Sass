<footer>
    <div class="container v-100">
        <div class="row v-100 align-items-center">
            <div class="row-logo-footer col-lg-4 d-flex  col-xs-12">
                <a href="<?php echo home_url(); ?>" id="logo-footer">
                    <img src="<?php echo get_theme_file_uri('/assets/images/footer-logo.png') ?>" alt="Логотип">
                </a>
                <div id="logo-text" class="flex-container-row">
                    <div class="first">
                        <span>дизельное топливо</span>
                        с доставкой по омску и области

                    </div>
                </div>
            </div>
            <div class="col-lg-8  d-none  d-lg-block">
                <ul class="nav-bar-footer">
                    <li class="item">
                        <a href="<?= urlsRightReturn('price'); ?>">Цены</a>
                    </li>
                    <li class="item">
                        <a href="<?= urlsRightReturn('step'); ?>">Этапы работы </a>
                    </li>
                    <li class="item">
                        <a href="<?= urlsRightReturn('delivery'); ?>">Доставка </a>
                    </li>
                    <li class="item">
                        <a href="<?= urlsRightReturn('cert'); ?>">Отзывы и сертификаты </a>
                    </li>
                    <li class="item">
                        <a href="<?= urlsRightReturn('map'); ?>">Контакты</a>
                    </li>
                </ul>

            </div>


        </div>

        <div class="row footer-bottom d-flex justify-content-between">
            <div class="col-lg-4 col-md-6 col-xs-12">
                <a href="/privacy-policy" class="link">
                    Политика конфиденциальности
                </a>
            </div>
            <div class="col-lg-4  col-md-6  col-xs-12 text-center">
                <p>
                    ООО "Дизель Групп" ©2019
                </p>
            </div>
            <div class="col-lg-4 col-xs-12 text-right">
                <a target="_blank" class="bottom-copyright" title="Перейти на сайт разработчика"
                   href="http://asmart-group.ru/"><?php _e('Сайт разработан IT-company <span>ASMART</span>', 'light'); ?></a>
            </div>

        </div>

    </div>
</footer>
<a id="back_to_top" href="#">
    <div class="ba-block">
        <img src="<?php echo get_theme_file_uri('/assets/images/arrow-up.png') ?>" alt="Стрелка верх">
    </div>
</a>
<div class="overlay-layer"></div>

<div class="success-modal">
    <h4 class="title text-center">
        Большое спасибо за заявку!
        <span>
            В скором времени мы с Вами свяжемся
        </span>
    </h4>
    <img src="<?php echo get_theme_file_uri('/assets/images/hang-up.png') ?>" alt="Изображение">
    <a href="#" class="link-ok">
        ок
    </a>
</div>

<div class="custom-modal">
    <a href="#" class="close">
        <img src="<?php echo get_theme_file_uri('/assets/images/modal-close.png') ?>" alt="Иконка">
    </a>
    <?= do_shortcode('[contact-form-7 id="13" title="Заказать топливо" html_class="form-modal"]'); ?>
</div>

<?php wp_footer(); ?>
</div>
</body>
</html>
