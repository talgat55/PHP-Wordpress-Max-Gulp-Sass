<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>
        <?php
        if (is_home()) {
            bloginfo('name');
        } else {
            wp_title('');
        }
        ?>
    </title>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/favicon.png?v=1.1') ?>"
          type="image/x-icon"/>

    <?php wp_head(); ?>

<!--    <script type="application/ld+json">-->
<!--        {-->
<!--            "@context": "http://schema.org",-->
<!--            "@type": "Organization",-->
<!--            "address": {-->
<!--                "@type": "PostalAddress",-->
<!--                "addressRegion": "г. Омск",-->
<!--                "streetAddress": "ул. Почтовая, д. 33, каб. 9"-->
<!--            },-->
<!--            "description": "Дизель Групп доставляет дизельное топливо по Омску и Омской области, напрямую от Газпрома и ВПК-ОЙЛ",-->
<!--            "name": "Дизель Групп - дизельное топливо с доставкой по омску и области",-->
<!--            "telephone": "8 91314-82-031"-->
<!--        }-->
<!--    </script>-->


</head>

<body <?php body_class(); ?>>
<div class="wrap ">
    <header>
    </header>

