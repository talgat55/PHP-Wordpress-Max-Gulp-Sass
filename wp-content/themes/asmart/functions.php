<?php


/*
* Add Feature Imagee
**/
add_theme_support('post-thumbnails');
add_image_size('cert-img', 260, 366, false);


/**
 * Enqueue scripts
 */
function th_scripts()
{
    wp_deregister_script('jquery');

    wp_enqueue_style('bootstrap.min', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), '');

    wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '', true);
    wp_enqueue_script('jquery-migrate.min', get_theme_file_uri('/assets/js/jquery-migrate.min.js'), array(), '', true);
    wp_enqueue_script('slick.min', get_theme_file_uri('/assets/js/slick.min.js'), array(), '', true);
    wp_enqueue_script('lazy', get_theme_file_uri('/assets/js/jquery.lazy.min.js'), array(), '', true);

    wp_enqueue_script('jquery.inputmask', get_theme_file_uri('/assets/js/jquery.inputmask.js'), array(), '', true);

    wp_enqueue_script('lightbox.min.js', get_theme_file_uri('/assets/js/lightbox.min.js'), array(), '', true);


    wp_enqueue_script('yandex-maps', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), '1', true);

    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default.js'), array(), '1', true);


}

add_action('wp_enqueue_scripts', 'th_scripts');

function prefix_add_footer_styles()
{
    // Theme stylesheet.
    wp_enqueue_style('th-style', get_stylesheet_uri(), array(), '1');


    wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.css'), array(), '');
    wp_enqueue_style('lightbox.min.css', get_theme_file_uri('/assets/css/lightbox.min.css'), array(), '');
    wp_enqueue_style('slick', get_theme_file_uri('/assets/css/slick.css'), array(), '');
    wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/css/slick-theme.css'), array(), '');
    wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'), array(), '1');
//    wp_enqueue_style('main-style2', get_theme_file_uri('/assets/css/critical.css'), array(), '1');

}

;
add_action('get_footer', 'prefix_add_footer_styles');


/*
*  Register Post Type  Certs
*/

add_action('init', 'post_type_certs');

function post_type_certs()
{
    $labels = array(
        'name' => 'Сертификаты',
        'singular_name' => 'Сертификаты',
        'all_items' => 'Сертификаты',
        'menu_name' => 'Сертификаты' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "certs",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('certs', $args);
}



/*
*  Register Post Type  Products
*/

add_action('init', 'post_type_products');

function post_type_products()
{
    $labels = array(
        'name' => 'Товары',
        'singular_name' => 'Товары',
        'all_items' => 'Товары',
        'menu_name' => 'Товары' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "products",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('products', $args);
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

/**
 * Return right url  for navigation
 * @param $name
 * @return string
 */

function urlsRightReturn($name)
{

    if (is_home()) {
        $home = true;
    } else {
        $home = false;
    }

    $url ='';

    if ($name == 'price') {
        $url = $home ? '#price-section' : home_url() . '#price-section';
    } else if ($name == 'step') {
        $url = $home ? '#step-section' : home_url() . '#step-section';
    } else if ($name == 'delivery') {
        $url = $home ? '#delivery-section' : home_url() . '#delivery-section';
    }else if ($name == 'cert') {
        $url = $home ? '#cert-section' : home_url() . '#cert-section';
    }else if ($name == 'map') {
        $url =  $home ? '#map-section' : home_url() . '#map-section';
    }

    return $url;
}
