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
add_image_size('awards-img', 279, 380, true);
add_image_size('advertissers-img', 270, 334, true);
add_image_size('portfolio-page-img', 570, 461, true);
add_image_size('news-single-img', 570, 461, true);
add_image_size('news-home-first', 665, 450, true);
add_image_size('news-home-second', 455, 210, true);


/**
 * Enqueue scripts
 */
function th_scripts()
{
    wp_enqueue_style('bootstrap.min', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), '');
    // Theme stylesheet.
    wp_enqueue_style('th-style', get_stylesheet_uri(), array(), '1');
    wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'), array(), '1');

    wp_enqueue_script('aos', get_theme_file_uri('/assets/js/aos.js'), array(), '', true);
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '');
    wp_enqueue_script('jquery-migrate.min', get_theme_file_uri('/assets/js/jquery.matchHeight.js'), array(), '', true);
    wp_enqueue_script('slick.min', get_theme_file_uri('/assets/js/slick.min.js'), array(), '', true);

    wp_enqueue_script('jquery.inputmask', get_theme_file_uri('/assets/js/jquery.inputmask.js'), array(), '', true);
//
    wp_enqueue_script('lightbox.min.js', get_theme_file_uri('/assets/js/lightbox.js'), array(), '', true);
//
//
    if (is_page_template('page-contacts.php')) {
        wp_enqueue_script('yandex-maps', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), '1');


    }

    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default.js'), array(), '1', true);


}

add_action('wp_enqueue_scripts', 'th_scripts');

function prefix_add_footer_styles()
{
    wp_enqueue_style('aos', get_theme_file_uri('/assets/css/aos.css'), array(), '');
    wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.css'), array(), '');
    wp_enqueue_style('lightbox.min.css', get_theme_file_uri('/assets/css/lightbox.min.css'), array(), '');
    wp_enqueue_style('slick', get_theme_file_uri('/assets/css/slick.css'), array(), '');
    wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/css/slick-theme.css'), array(), '');

//    wp_enqueue_style('montserrat', get_theme_file_uri('/assets/fonts/montserrat.css'), array(), '1');
//    wp_enqueue_style('main-style2', get_theme_file_uri('/assets/css/critical.css'), array(), '1');

}

;
add_action('get_footer', 'prefix_add_footer_styles');


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
*  Register Post Type  Team
*/
add_action('init', 'post_type_team');

function post_type_team()
{
    $labels = array(
        'name' => 'Сотрудники',
        'singular_name' => 'Сотрудники',
        'all_items' => 'Сотрудники',
        'menu_name' => 'Сотрудники' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "team",
        'supports' => array(
            'title',
            'thumbnail'
        )
    );
    register_post_type('team', $args);
}

/*
*  Register Post Type  Awards
*/
add_action('init', 'post_type_awards');

function post_type_awards()
{
    $labels = array(
        'name' => 'Награды',
        'singular_name' => 'Награды',
        'all_items' => 'Награды',
        'menu_name' => 'Награды' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "awards",
        'supports' => array(
            'title',
            'thumbnail'
        )
    );
    register_post_type('awards', $args);
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
*  Register Post Type  Archive
*/
add_action('init', 'post_type_archives');

function post_type_archives()
{
    $labels = array(
        'name' => 'Архив',
        'singular_name' => 'Архив',
        'all_items' => 'Архив',
        'menu_name' => 'Архив' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "archives",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('archives', $args);
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


/*
 * Breadcrumb
 */
function dimox_breadcrumbs()
{
    /* === ОПЦИИ === */
    $text['home'] = 'Главная'; // текст ссылки "Главная"
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
    $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
    $text['author'] = 'Статьи автора %s'; // текст для страницы автора
    $text['404'] = 'Ошибка 404'; // текст для страницы 404
    $text['page'] = 'Страница %s'; // текст 'Страница N'
    $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'
    $wrap_before = '<div class="breadcrumbs main" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
    $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
    $sep = '/'; // разделитель между "крошками"
    $sep_before = '<span class="sep">'; // тег перед разделителем
    $sep_after = '</span>'; // тег после разделителя
    $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
    $before = '<span class="current">'; // тег перед текущей "крошкой"
    $after = '</span>'; // тег после текущей "крошки"
    /* === КОНЕЦ ОПЦИЙ === */
    global $post;
    $home_url = home_url('/');
    $link_before = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
    $link_after = '</li>';
    $link_attr = ' itemprop="item"';
    $link_in_before = '<span itemprop="name">';
    $link_in_after = '</span>';
    $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
    $frontpage_id = get_option('page_on_front');
    $parent_id = ($post) ? $post->post_parent : '';
    $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
    $home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;
    if (is_home() || is_front_page()) {
        if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;
    } else {
        echo $wrap_before;
        if ($show_home_link) echo $home_link;
        if (is_category()) {
            $cat = get_category(get_query_var('cat'), false);
            if ($cat->parent != 0) {
                $cats = get_category_parents($cat->parent, TRUE, $sep);
                $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                if ($show_home_link) echo $sep;
                echo $cats;
            }
            if (get_query_var('paged')) {
                $cat = $cat->cat_ID;
                echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
            }
        } elseif (is_search()) {
            if (have_posts()) {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
            } else {
                if ($show_home_link) echo $sep;
                echo $before . sprintf($text['search'], get_search_query()) . $after;
            }
        } elseif (is_day()) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
            echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
            if ($show_current) echo $sep . $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
            if ($show_current) echo $sep . $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if ($show_home_link) echo $sep;
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current) echo $sep . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $sep);
                if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
//                echo $cats;
                echo $link_before . '<a href="/news" ' . $link_attr . '>' . $link_in_before . 'Новости' . $link_in_after . '</a>' . $link_after . $sep;
                if (get_query_var('cpage')) {
                    echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
                } else {
                    if ($show_current) echo $before . get_the_title() . $after;
                }
            }
            // custom post type
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            if (get_query_var('paged')) {
                echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . $post_type->label . $after;
            }
        } elseif (is_attachment()) {
            if ($show_home_link) echo $sep;
            $parent = get_post($parent_id);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            if ($cat) {
                $cats = get_category_parents($cat, TRUE, $sep);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                echo $cats;
            }
            printf($link, get_permalink($parent), $parent->post_title);
            if ($show_current) echo $sep . $before . get_the_title() . $after;
        } elseif (is_page() && !$parent_id) {
            if ($show_current) echo $sep . $before . get_the_title() . $after;
        } elseif (is_page() && $parent_id) {
            if ($show_home_link) echo $sep;
            if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    if ($parent_id != $frontpage_id) {
                        $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    }
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs) - 1) echo $sep;
                }
            }
            if ($show_current) echo $sep . $before . get_the_title() . $after;
        } elseif (is_tag()) {
            if (get_query_var('paged')) {
                $tag_id = get_queried_object_id();
                $tag = get_tag($tag_id);
                echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
            }
        } elseif (is_author()) {
            global $author;
            $author = get_userdata($author);
            if (get_query_var('paged')) {
                if ($show_home_link) echo $sep;
                echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
            }
        } elseif (is_404()) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . $text['404'] . $after;
        } elseif (has_post_format() && !is_singular()) {
            if ($show_home_link) echo $sep;
            echo get_post_format_string(get_post_format());
        }
        echo $wrap_after;
    }
}

//create a custom taxonomy name it topics for your posts

/**
 *  Event items
 * @param $term
 */
function eventItems($term, $page = '')
{


    $arg = [
        'posts_per_page' => 12,
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'status' => 'publish',
    ];
    if ($term != 'all') {
        $arg['cat'] = $term;
    }
    if (!empty($page)) {
        $arg['paged'] = $page;
    } else {
        $arg['paged'] = '1';
    }

    ?>
    <?php
    $the_query = new WP_Query($arg);

    while ($the_query->have_posts()) :
        $the_query->the_post();
        $post_id = $the_query->post->ID;
        get_template_part('inc/post-item');
    endwhile;

}
/**
 *  Archive items
 * @param $term
 */
function archiveItems($year = '', $page = '', $count = '')
{


    $arg = [
        'posts_per_page' => !empty($count) ? $count !== 'all' ? $count : '12' :  12,
        'post_type' => 'archives',
        'orderby' => 'date',
        'order' => 'DESC',
        'status' => 'publish',
    ];
    if ($year != 'all') {
        $arg['date_query'][] = ['year' => $year];
    }
    if (!empty($page)) {
        $arg['paged'] = $page;
    } else {
        $arg['paged'] = '1';
    }

    ?>
    <?php
    $the_query = new WP_Query($arg);

    while ($the_query->have_posts()) :
        $the_query->the_post();
        $post_id = $the_query->post->ID;
        get_template_part('inc/archive-item');
    endwhile;

}


/**
 * AJAX Load  Cat
 */

function be_ajax_cat_events()
{

    ob_start();
    eventItems($_POST['term'], '');
    wp_reset_postdata();
    $data = ob_get_clean();
    wp_send_json_success($data);
    wp_die();
}

add_action('wp_ajax_be_ajax_cat_events', 'be_ajax_cat_events');
add_action('wp_ajax_nopriv_be_ajax_cat_events', 'be_ajax_cat_events');

/**
 * AJAX Load  News
 */

function be_ajax_events_load()
{
    $count = wp_count_posts('post');
    ob_start();
    eventItems($_POST['term'], $_POST['page']);
    wp_reset_postdata();
    $data = ob_get_clean();
    $response = [
        'data' => $data,
        'count' => $count
    ];
    wp_send_json_success($response);
    wp_die();
}

add_action('wp_ajax_be_ajax_events_load', 'be_ajax_events_load');
add_action('wp_ajax_nopriv_be_ajax_events_load', 'be_ajax_events_load');

/**
 * AJAX Load  Archive
 */

function be_ajax_archive_load()
{
    $count = wp_count_posts('archives');
    ob_start();
    archiveItems($_POST['year'], $_POST['page'], $_POST['count']);
    wp_reset_postdata();
    $data = ob_get_clean();
    $response = [
        'data' => $data,
        'count' => $count
    ];
    wp_send_json_success($response);
    wp_die();
}

add_action('wp_ajax_be_ajax_archive_load', 'be_ajax_archive_load');
add_action('wp_ajax_nopriv_be_ajax_archive_load', 'be_ajax_archive_load');


/**
 *  Redirect for Portfolio
 */

if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $output = '';
    if ($id == 'omsk-100-luchshih-kompanij') {
        $output = '/nashi-proekti/#omsk-100-luchshih-kompanij';
    }
    wp_redirect($output, '301');
}

/*
 *  Get All post years
 */
function get_archives_years_array() {
    global $wpdb;
    $result = array();
    $years = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT YEAR(post_date) FROM {$wpdb->posts} WHERE post_status = 'publish'  AND wp_posts.post_type = 'archives' GROUP BY YEAR(post_date) DESC"
        ),
        ARRAY_N
    );
    if ( is_array( $years ) && count( $years ) > 0 ) {
        foreach ( $years as $year ) {
            $result[] = $year[0];
        }
    }
    return $result;
}