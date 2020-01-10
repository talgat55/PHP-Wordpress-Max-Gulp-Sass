<?php
/*
* Register nav menu
*/
if (function_exists('register_nav_menus')) {
    $menu_arr = array(
        'top_menu' => 'Топ Меню',
        'footer_menu' => 'Футер Меню',
    );
    register_nav_menus($menu_arr);
}


/*
* Add Feature Imagee
**/
add_theme_support('post-thumbnails');
add_image_size('cert-img', 260, 366, false);
add_image_size('portfolio-home', 380, 306, true);


/**
 * Enqueue scripts
 */
function th_scripts()
{

    wp_enqueue_style('bootstrap.min', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), '');
    // Theme stylesheet.
    wp_enqueue_style('th-style', get_stylesheet_uri(), array(), '1');
    wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'), array(), '1');

    wp_deregister_script('jquery');


    wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '');
//    wp_enqueue_script('jquery-migrate.min', get_theme_file_uri('/assets/js/jquery-migrate.min.js'), array(), '', true);
    wp_enqueue_script('slick.min', get_theme_file_uri('/assets/js/slick.min.js'), array(), '', true);
//    wp_enqueue_script('lazy', get_theme_file_uri('/assets/js/jquery.lazy.min.js'), array(), '', true);
//
    wp_enqueue_script('jquery.inputmask', get_theme_file_uri('/assets/js/jquery.inputmask.js'), array(), '', true);
//
//    wp_enqueue_script('lightbox.min.js', get_theme_file_uri('/assets/js/lightbox.min.js'), array(), '', true);
//
//
//    wp_enqueue_script('yandex-maps', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), '1', true);

    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default.js'), array(), '1', true);


}

add_action('wp_enqueue_scripts', 'th_scripts');

function prefix_add_footer_styles()
{


    wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.css'), array(), '');
//    wp_enqueue_style('lightbox.min.css', get_theme_file_uri('/assets/css/lightbox.min.css'), array(), '');
    wp_enqueue_style('slick', get_theme_file_uri('/assets/css/slick.css'), array(), '');
    wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/css/slick-theme.css'), array(), '');

//    wp_enqueue_style('montserrat', get_theme_file_uri('/assets/fonts/montserrat.css'), array(), '1');
//    wp_enqueue_style('main-style2', get_theme_file_uri('/assets/css/critical.css'), array(), '1');

}

;
add_action('get_footer', 'prefix_add_footer_styles');


/*
*  Register Post Type  Certs
*/
//
//add_action('init', 'post_type_certs');
//
//function post_type_certs()
//{
//    $labels = array(
//        'name' => 'Сертификаты',
//        'singular_name' => 'Сертификаты',
//        'all_items' => 'Сертификаты',
//        'menu_name' => 'Сертификаты' // ссылка в меню в админке
//    );
//    $args = array(
//        'labels' => $labels,
//        'public' => true,
//        'menu_position' => 5,
//        'has_archive' => true,
//        'query_var' => "certs",
//        'supports' => array(
//            'title',
//            'editor',
//            'thumbnail'
//        )
//    );
//    register_post_type('certs', $args);
//}
//
/*
*  Register Post Type  Events
*/
add_action('init', 'post_type_events');

function post_type_events()
{
    $labels = array(
        'name' => 'События',
        'singular_name' => 'События',
        'all_items' => 'События',
        'menu_name' => 'События' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "events",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('events', $args);
}

/*
*  Register Post Type  Home slider
*/
add_action('init', 'post_type_home_slider');

function post_type_home_slider()
{
    $labels = array(
        'name' => 'Слайдер',
        'singular_name' => 'Слайдер',
        'all_items' => 'Слайдер',
        'menu_name' => 'Слайдер' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "home_slider",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('home_slider', $args);
}


/*
*  Register Post Type  Portfolio
*/
add_action('init', 'post_type_portfolio');

function post_type_portfolio()
{
    $labels = array(
        'name' => 'Портфолио',
        'singular_name' => 'Портфолио',
        'all_items' => 'Портфолио',
        'menu_name' => 'Портфолио' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "portfolio",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('portfolio', $args);
}

/*
*  Register Post Type  Partners
*/
add_action('init', 'post_type_partners');

function post_type_partners()
{
    $labels = array(
        'name' => 'Партнеры',
        'singular_name' => 'Партнеры',
        'all_items' => 'Партнеры',
        'menu_name' => 'Партнеры' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "partners",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('partners', $args);
}


/*
*  Register Post Type Settings
*/
if (function_exists('acf_add_options_page')) {

    // Let's add our Options Page
    acf_add_options_page(array(
        'page_title' => 'Настройки Темы',
        'menu_title' => 'Настройки Темы',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts'
    ));


}

