<?php


get_header(); ?>
    <h1 class="hide-title"><?=   bloginfo('name'); ?></h1>
    <section id="slider">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-9 col-xs-12 ">
                    <div class="content">
                        <p>
                            Только у нас
                        </p>
                        <h2 class="title-sub">
                            <span>Доставим дизельное топливо</span>
                            по Омску и Омской области за 24 часа


                        </h2>
                        <ul class="list-service row">
                            <li class="col-sm-3 col-xs-12">
                                <img src="<?php echo get_theme_file_uri('/assets/images/s-1.png') ?>" alt="иконка">
                                <h4 class="title">
                                    Бесплатная доставка
                                </h4>
                            </li>
                            <li class="col-sm-3 col-xs-12">
                                <img src="<?php echo get_theme_file_uri('/assets/images/s-2.png') ?>" alt="иконка">
                                <h4 class="title">
                                    Напрямую от Газпрома<br>
                                    и ВПК-ОЙЛ
                                </h4>
                            </li>
                            <li class="col-sm-3 col-xs-12">
                                <img src="<?php echo get_theme_file_uri('/assets/images/s-3.png') ?>" alt="иконка">
                                <h4 class="title">
                                    От 100 литров
                                </h4>
                            </li>
                            <li class="col-sm-3 col-xs-12">
                                <img src="<?php echo get_theme_file_uri('/assets/images/s-4.png') ?>" alt="иконка">
                                <h4 class="title">
                                    100% удаление воды и 99.9% очистка от примесей
                                </h4>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-lg-3  d-none  d-lg-block ">
                    <img class="home-slider-img-overlay lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                         data-src="<?php echo get_theme_file_uri('/assets/images/home-slider-overlay.png') ?>" alt="Изображение">
                </div>
            </div>
        </div>

    </section>
    <section id="samples-section">
        <div class="container h-100 custom-padding">
            <div class="row align-items-center h-100">
                <div class="col-md-6  d-none  d-md-block text-center">

                    <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                         data-src="<?php echo get_theme_file_uri('/assets/images/botls.png') ?>" alt="Изображение">
                </div>
                <div class="col-md-6 col-xs-12">
                    <?= do_shortcode('[contact-form-7 id="5" title="Заказа образцов топлива" html_class="form-sample"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <section id="price-section">
        <div class="container ">
            <div class="row  ">
                <div class="col-sm-12 col-xs-12 text-center">

                    <h2 class="title-section">
                        цены<br>
                        <span>на топливо</span>
                    </h2>

                </div>
            </div>
            <div class="row  ">
                <?php
                $args = array(
                    'posts_per_page' => '-1',
                    'post_type' => 'products',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_status' => 'publish'

                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $post_id = $the_query->post->ID;
                        $title_org          = get_field('name_org', $post_id);
                        $img_org            = get_field('img_org', $post_id);
                        $price_org          = get_field('price_org', $post_id);
                        $link_pasport_org   = get_field('link_pasport_org', $post_id);


                        ?>
                        <div class="col-md-6 col-xs-12 text-center">
                            <div class="price-block">
                                <h4 class="title">
                                    <?= get_the_title($post_id); ?>
                                    <span>
                                        <?=$title_org; ?>
                                    </span>
                                </h4>

                                <img src="<?=$img_org; ?>" alt="Изображение">

                                <div class="content">
                                    <div class="price">
                                        от <span><?=$price_org; ?></span> руб./л
                                    </div>
                                    <div class="description">
                                        <span>*</span>При самовывозе с базы
                                    </div>

                                </div>
                                <div class="bottom">
                                    <div class="row">
                                        <a href="#" class="first-link col-sm-6 col-xs-12" >
                                            Заказать онлайн
                                        </a>
                                        <a  target="_blank" href="<?=$link_pasport_org; ?>" class="sescond-link col-sm-6 col-xs-12">
                                            Паспорт качества
                                        </a>
                                    </div>

                                </div>


                            </div>
                        </div>
                    <?php
                    endwhile;
                else:

                    echo "<p class='not-found-articles'>".__('Записей не найдено', 'light')."</p>";

                endif;
                ?>

            </div>
        </div>
    </section>
    <section id="third-section">
        <div class="container h-100 custom-padding">
            <div class="row align-items-center h-100">
                <div class="col-lg-7 col-xs-12  ">
                    <h2 class="title-section">
                        «Газпром» и «ВПК-ОЙЛ»<br>
                        <span>Мы работаем Напрямую от производителей</span>
                    </h2>
                    <ul class="list-text">
                        <li class="flex-container-row">
                            <span>
                                1
                            </span>
                            <p>
                                На заводе пломбируем цистерну и снимаем пломбу при вас.
                            </p>
                        </li>
                        <li class="flex-container-row">
                            <span>
                                2
                            </span>
                            <p>
                                При сливе используем двухступенчатую систему фильтрации. Благодаря этому топливо
                                сливается без конденсата, примесей и отходов.
                            </p>
                        </li>
                        <li class="flex-container-row">
                            <span>
                                3
                            </span>
                            <p>
                                В результате вы получаете дизельное топливо, безопасное для ваших ДВС.
                            </p>
                        </li>

                    </ul>


                </div>
                <div class="col-lg-5 d-none  d-lg-block">
                    <div class="bg-img">
                        <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                             data-src="<?php echo get_theme_file_uri('/assets/images/third-img.jpg') ?>"
                             alt="Изображение">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="four-section">
        <div class="container h-100 custom-padding">
            <div class="row align-items-center h-100">
                <div class="col-lg-5 d-none  d-lg-block">
                    <div class="bg-img">
                        <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                             data-src="<?php echo get_theme_file_uri('/assets/images/four-image-alt.png') ?>"
                             alt="Изображение">
                    </div>

                </div>
                <div class="col-lg-7 col-xs-12  ">
                    <h2 class="title-section white">
                        Отгружаем точное количество топлива
                    </h2>
                    <ul class="list-text">
                        <li class="flex-container-row">
                            <span>

                            </span>
                            <p>
                                При сливе используем топливные счетчики с погрешностью 0.1%. Вы лично контролируете
                                объём поставки.
                            </p>
                        </li>
                        <li class="flex-container-row">
                            <span>

                            </span>
                            <p>
                                Используем пистолеты с отсекателями, которые не допускают переливов.

                            </p>
                        </li>
                        <li class="flex-container-row">
                            <span>

                            </span>
                            <p>
                                Менеджер отслеживает отгрузку топлива с помощью глонасс мониторинга.
                            </p>
                        </li>
                        <li class="flex-container-row">
                            <span>

                            </span>
                            <p>
                                Заказы доставляют цистерны, которые оборудованные датчиками, не позволяющими незаметно
                                слить топливо.

                            </p>
                        </li>

                    </ul>


                </div>

            </div>
        </div>
    </section>
    <section id="step-section">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h2 class="title-section tree  ">
                        Этапы работы
                    </h2>
                </div>

            </div>
            <div class="row position-relative">
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="step-block">
                        <div class="img-block text-center">
                            <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                                 data-src="<?php echo get_theme_file_uri('/assets/images/step-1.jpg') ?>"
                                 alt="Изображение">
                        </div>
                        <p class="text text-center">
                            Менеджер связывается с вами, договаривается о встрече
                        </p>

                    </div>

                </div>
                <div class="col-lg-4  col-md-6 col-xs-12">
                    <div class="step-block">
                        <div class="img-block text-center">
                            <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                                 data-src="<?php echo get_theme_file_uri('/assets/images/step-2.jpg') ?>"
                                 alt="Изображение">
                        </div>
                        <p class="text text-center">
                            Привозим образцы топлива, и вы оцениваете качество
                        </p>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6  col-xs-12">
                    <div class="step-block">
                        <div class="img-block text-center">
                            <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                                 data-src="<?php echo get_theme_file_uri('/assets/images/step-3.jpg') ?>"
                                 alt="Изображение">
                        </div>
                        <p class="text text-center">
                            Привозим ваш заказ в течение 24 часов со всеми документами

                        </p>

                    </div>

                </div>


            </div>
        </div>
    </section>
    <section id="five-section">
        <div class="container ">
            <div class="row position-relative">
                <div class="col-sm-12 col-xs-12">
                    <?= do_shortcode('[contact-form-7 id="5" title="Заказа образцов топлива" html_class="form-sample-2"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <section id="whom-can-help-section">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h2 class="title-section tree  text-center  ">
                        Кому мы сможем помочь
                    </h2>
                </div>

            </div>
            <div class="row position-relative">
                <div class="col col-xs-12 help-block text-center">
                    <div class="img-block">
                        <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                             data-src="<?php echo get_theme_file_uri('/assets/images/h-b-1.jpg') ?>"
                             alt="Изображение">
                    </div>
                    <div class="text">
                        Сельхозпредприятия
                    </div>
                </div>
                <div class="col col-xs-12  help-block text-center">
                    <div class="img-block">
                        <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                             data-src="<?php echo get_theme_file_uri('/assets/images/h-b-2.jpg') ?>"
                             alt="Изображение">
                    </div>
                    <div class="text">
                        Частные лица для отопления
                    </div>
                </div>
                <div class="col col-xs-12  help-block text-center">
                    <div class="img-block">
                        <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                             data-src="<?php echo get_theme_file_uri('/assets/images/h-b-3.jpg') ?>"
                             alt="Изображение">
                    </div>
                    <div class="text">
                        Строительные компании
                    </div>
                </div>
                <div class="col col-xs-12  help-block text-center">
                    <div class="img-block">
                        <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                             data-src="<?php echo get_theme_file_uri('/assets/images/h-b-4.jpg') ?>"
                             alt="Изображение">
                    </div>
                    <div class="text">
                        Автотранспорт
                    </div>
                </div>
                <div class="col col-xs-12  help-block text-center">
                    <div class="img-block">
                        <img class="lazy" src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                             data-src="<?php echo get_theme_file_uri('/assets/images/h-b-5.jpg') ?>"
                             alt="Изображение">
                    </div>
                    <div class="text">
                        Яхты и прочие суда
                    </div>
                </div>
            </div>
    </section>

    <section id="delivery-section">
        <div class="container  ">
            <div class="row  ">
                <div class="first-row col-lg-5 col-xs-12">
                    <div class="special-block">
                        Все автомобили в автопарке <span>современные</span>,<br>
                        поэтому заказы доставляются за 24 часа и быстрее
                    </div>
                    <img class="lazy background-img"
                         src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png') ?>"
                         data-src="<?php echo get_theme_file_uri('/assets/images/bg-delivery-img.png') ?>"
                         alt="Изображение">

                </div>
                <div class="second-row col-lg-7 col-xs-12">
                    <div class="text-block text-center">
                        <h2 class="title-section white  ">
                            Доставка
                        </h2>
                        <p class="text">
                            Также мы оказываем услуги по доставке светлых нефтепродуктов по Омску, области и России.
                        </p>
                        <a href="#" class="link-feedback-service">
                            Услуги перевозки
                        </a>
                    </div>
                    <div class="bottom-block   ">

                        <p>
                            На попутный груз мы сделаем Вам <span>скидку</span>!
                        </p>

                    </div>


                </div>
            </div>
        </div>
    </section>

    <section id="cert-section">
        <div class="container  ">
            <div class="row text-center ">
                <div class="col-sm-12 col-xs-12">
                    <h2 class="title-section tree  ">
                        Топливо проверено лабораториями<br>
                        <span> и нашими клиентами</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <ul class="list-cert">
                        <?php

                        $arg = array(
                            'posts_per_page' => 10,
                            'post_type' => 'certs',
                            'status' => 'publish'
                        );

                        $the_query = new WP_Query($arg);
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                            $post_id = $the_query->post->ID;
                            ?>
                            <li class="item">
                                <div class="logo-img">
                                    <img src="<?php echo get_theme_file_uri('/assets/images/cert-img.png') ?>"
                                         alt="Логотип">
                                </div>
                                <div class="overlay">
                                    <a data-lightbox="example-set" href="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0]; ?>">
                                        <img src="<?php echo get_theme_file_uri('/assets/images/zoom.png') ?>"
                                             alt="Иконка">
                                    </a>
                                </div>

                                <img class="img" src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "cert-img")[0]; ?>"
                                     alt="Сертификат"/>

                            </li>
                        <?php

                        endwhile;
                        wp_reset_query();
                        ?>


                    </ul>
                    <ul class="arrow-bottom d-flex justify-content-between">
                       <li>
                           <a href="#" class="prev" >
                               <img src="<?php echo get_theme_file_uri('/assets/images/arrow.png') ?>"
                                    alt="Иконка">
                           </a>
                       </li>
                       <li>
                           <a href="#" class="next" >
                               <img src="<?php echo get_theme_file_uri('/assets/images/arrow.png') ?>"
                                    alt="Иконка">
                           </a>
                       </li>


                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="question-section">
        <div class="container ">
            <div class="row position-relative">
                <div class="col-sm-12 col-xs-12">

                    <?= do_shortcode('[contact-form-7 id="12" title="Форма возник вопрос" html_class="form-feedback"]'); ?>

                </div>
            </div>
        </div>
    </section>

    <section id="map-section">
        <div class="container ">
            <div class="row position-relative">
                <div class="col-lg-6 col-xs-12">
                    <h2 class="title-section  tree  text-center">
                        Приезжайте к нам на базу<br>
                        <span>Чтобы договориться о регулярных поставках или   просто в гости</span>
                    </h2>
                    <ul id="contact-info">
                        <li class="d-flex align-items-center">
                            <div class="img-block text-center">
                                <img src="<?php echo get_theme_file_uri('/assets/images/geo.png') ?>" alt="иконка">
                            </div>
                            <div>
                                <a  target="_blank"  href="https://yandex.ru/maps/66/omsk/?ll=73.388532%2C54.981417&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fll%3D73.388542%252C54.981422%26spn%3D0.001000%252C0.001000%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259E%25D0%25BC%25D1%2581%25D0%25BA%252C%2520%25D0%259F%25D0%25BE%25D1%2587%25D1%2582%25D0%25BE%25D0%25B2%25D0%25B0%25D1%258F%2520%25D1%2583%25D0%25BB%25D0%25B8%25D1%2586%25D0%25B0%252C%252033%2520&z=17">
                                    г. Омск, <span>ул. Почтовая, д. 33, каб. 9</span> (офис)
                                </a>
                                <a  target="_blank" href="https://yandex.ru/maps/?ll=73.239672%2C54.922778&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fll%3D73.239677%252C54.922779%26spn%3D0.001000%252C0.001000%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259E%25D0%25BC%25D1%2581%25D0%25BA%25D0%25B0%25D1%258F%2520%25D0%25BE%25D0%25B1%25D0%25BB%25D0%25B0%25D1%2581%25D1%2582%25D1%258C%252C%2520%25D0%259E%25D0%25BC%25D1%2581%25D0%25BA%25D0%25B8%25D0%25B9%2520%25D1%2580%25D0%25B0%25D0%25B9%25D0%25BE%25D0%25BD%252C%2520%25D0%25BF%25D0%25BE%25D1%2581%25D0%25B5%25D0%25BB%25D0%25BE%25D0%25BA%2520%25D0%259C%25D0%25B0%25D0%25B3%25D0%25B8%25D1%2581%25D1%2582%25D1%2580%25D0%25B0%25D0%25BB%25D1%258C%25D0%25BD%25D1%258B%25D0%25B9%252C%2520%25D1%2583%25D0%25BB%25D0%25B8%25D1%2586%25D0%25B0%2520%25D0%25A1%25D1%2582%25D1%2580%25D0%25BE%25D0%25B8%25D1%2582%25D0%25B5%25D0%25BB%25D0%25B5%25D0%25B9%252C%252014%25D0%2591%2520&z=17">
                                    г. Омск, <span>пос. Магистральный, ул.Строителей, 14Б</span> (база)
                                </a>
                            </div>
                        </li>
                        <li class="d-flex  align-items-center">
                            <div class="img-block text-center">
                                <img src="<?php echo get_theme_file_uri('/assets/images/mobile.png') ?>" alt="иконка">
                            </div>
                            <div>
                                <a href="tel:89131482031">
                                    8 913 <span>14-82-031</span>
                                </a>
                                <a href="tel:+73812292031">
                                    +7(3812) <span>29-20-31</span>

                                </a>
                            </div>
                        </li>
                        <li class="d-flex  align-items-center">
                            <div class="img-block text-center">
                                <img src="<?php echo get_theme_file_uri('/assets/images/email.png') ?>" alt="иконка">
                            </div>
                            <div>
                                <a href="mailto:diesel-grupp@yandex.ru">
                                    <span>diesel-grupp</span>@yandex.ru
                                </a>
                            </div>
                        </li>
                    </ul>



                </div>
                <div class="col-lg-6 col-xs-12 map-container">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();
