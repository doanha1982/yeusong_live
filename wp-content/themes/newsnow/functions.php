<?php
/**
 * newsnow functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package newsnow
 */

if (!function_exists('newsnow_setup')) :

    function newsnow_setup()
    {

        load_theme_textdomain('newsnow', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'newsnow'),
            'secondary' => esc_html__('Secondary Menu', 'newsnow'),
            'footer' => esc_html__('Footer Menu', 'newsnow'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('newsnow_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for editor styles.
        add_theme_support('editor-styles');

        // Enqueue editor styles.
        add_editor_style('style-editor.css');

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for responsive embeds.
        add_theme_support('responsive-embeds');
    }
endif;
add_action('after_setup_theme', 'newsnow_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function newsnow_content_width()
{
    $GLOBALS['content_width'] = apply_filters('newsnow_content_width', 760);
}

add_action('after_setup_theme', 'newsnow_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function newsnow_sidebar_init()
{

    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'newsnow'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here. Display on every pages.', 'newsnow'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title"><span>',
        'after_title' => '</span></h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Homepage Content', 'newsnow'),
        'id' => 'homepage',
        'description' => esc_html__('Only put "Home One Column" widget here.', 'newsnow'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title"><span>',
        'after_title' => '</span></h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Homepage Sidebar', 'newsnow'),
        'id' => 'homepage-sidebar',
        'description' => esc_html__('If empty, homepage sidebar will display the "Sidebar" widgets above.', 'newsnow'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title"><span>',
        'after_title' => '</span></h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer Column 1', 'newsnow'),
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here.', 'newsnow'),
        'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Column 2', 'newsnow'),
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here.', 'newsnow'),
        'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Column 3', 'newsnow'),
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here.', 'newsnow'),
        'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Column 4', 'newsnow'),
        'id' => 'footer-4',
        'description' => esc_html__('Add widgets here.', 'newsnow'),
        'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Header Advertisement', 'newsnow'),
        'id' => 'header-ad',
        'description' => esc_html__('Drag the "Advertisement" widget here.', 'newsnow'),
        'before_widget' => '<div id="%1$s" class="header-ad %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

}

add_action('widgets_init', 'newsnow_sidebar_init');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */

require get_template_directory() . '/admin/customizer-library.php';

require get_template_directory() . '/admin/customizer-options.php';

require get_template_directory() . '/admin/styles.php';

require get_template_directory() . '/admin/mods.php';

require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load plugins.
 */
//require get_template_directory() . '/inc/plugins.php';

/**
 * Enqueues scripts and styles.
 */
function newsnow_scripts()
{

    // load jquery if it isn't

    //wp_enqueue_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '', true);

    //  Enqueues Javascripts
    wp_enqueue_script('superfish', get_template_directory_uri() . '/assets/js/superfish.js', array(), '', true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array(), '', true);
    wp_enqueue_script('html5', get_template_directory_uri() . '/assets/js/html5.js', array(), '', true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/jquery.custom.js', array(), '20200811', true);

    // Enqueues CSS styles
    $theme_version = wp_get_theme()->get('Version');
//	wp_enqueue_style( 'newsnow-style', get_stylesheet_uri(), array(), $theme_version );
    wp_style_add_data('newsnow-style', 'rtl', 'replace');

//    wp_enqueue_style( 'genericons-style',   get_template_directory_uri() . '/genericons/genericons.css' );


//    if ( get_theme_mod( 'site-layout', 'choice-1' ) == 'choice-1' ) {
//    	wp_enqueue_style( 'responsive-style',   get_template_directory_uri() . '/responsive.css', array(), '20161209' );
//	}

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    if (is_page(2459) || is_page(2464) || is_page(2468) || is_page(2471)) {
//	    wp_enqueue_script( 'bmi-tool', get_template_directory_uri() . '/assets/js/bmi.js');
        wp_enqueue_style('bmi-style', get_template_directory_uri() . '/assets/css/bmi.css', array(), '20200811');
    }
    //Ovulation
    if (is_page(2471)) {
        wp_enqueue_style('picker-css-main-style', get_template_directory_uri() . '/assets/css/pickadate/default.css', array(), '20161209');
        wp_enqueue_style('picker-css-style', get_template_directory_uri() . '/assets/css/pickadate/default.date.css', array(), '20161209');
        wp_enqueue_script('picker-core-tool', get_template_directory_uri() . '/assets/js/pickadate/picker.js');
        wp_enqueue_script('picker-date-tool', get_template_directory_uri() . '/assets/js/pickadate/picker.date.js');
    }
    // remove Gutenberg CSS
//    if (!is_admin()) {
//        wp_dequeue_style('wp-block-library');
//    }
}

add_action('wp_enqueue_scripts', 'newsnow_scripts');

/* Admin CSS Style */
function newsnow_admin_style()
{
    wp_enqueue_style('admin-styles', get_template_directory_uri() . '/assets/css/admin.css');
}

add_action('admin_enqueue_scripts', 'newsnow_admin_style');

/**
 * Post Thumbnails.
 */
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(150, 150, true); // default Post Thumbnail dimensions (cropped)
    add_image_size('featured_large_thumb', 720, 480, true); // 600 * 400
    add_image_size('block_large_thumb', 600, 400, true); // 430 * 287
    add_image_size('post_thumb', 300, 200, true);
    add_image_size('single_thumb', 880, 528, true);
    add_image_size('feature_thumb', 400, 200, true);
}

/**
 * Registers custom widgets.
 */
function newsnow_widgets_init()
{

    require trailingslashit(get_template_directory()) . 'inc/widgets/widget-ad.php';
    register_widget('newsnow_Ad_Widget');

    require trailingslashit(get_template_directory()) . 'inc/widgets/widget-home-block-one.php';
    register_widget('NewsNow_Block_One_Widget');

}

add_action('widgets_init', 'newsnow_widgets_init');

/* Fix PHP warning */
function _get($str)
{
    $val = !empty($_GET[$str]) ? $_GET[$str] : null;

    return $val;
}

function pagination($page, $total_pages)
{
    if ($total_pages <= 1) return;
    $page = max(1, $page);
    echo '<div class="pagination">';
    echo paginate_links(array(
        'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'total' => $total_pages,
        'current' => $page,
        'format' => '?paged=%#%',
        'show_all' => true,
        'type' => 'plain',
        'end_size' => 2,
        'mid_size' => 4,
        'prev_next' => true,
        'prev_text' => sprintf('<i></i> %1$s', __('&laquo; Previous', 'newsnow')),
        'next_text' => sprintf('%1$s <i></i>', __('Next &raquo;', 'newsnow')),
        'add_args' => false,
        'add_fragment' => '',
    ));

    echo '</div>';
}

function my_custom_pagination($url, $page, $total)
{
    if ($total <= 1) return;
    $page = max(1, $page);
    echo '<nav class="navigation pagination" role="navigation" aria-label="Bài viết"><h2 class="screen-reader-text">Điều hướng bài viết</h2><div class="nav-links">';
    //previous
    if ($page > 1) {
        $pre = $page - 1;
        if ($pre == 1)
            echo '<a class="prev page-numbers" href="' . $url . '">' . __('&laquo; Previous', 'newsnow') . '</a>';
        else
            echo '<a class="prev page-numbers" href="' . $url . 'page/' . $pre . '/">' . __('&laquo; Previous', 'newsnow') . '</a>';

    }

    $start = $page - 2;
    $end = $page + 2;
    if ($page == 1){
        $start = 1;
        $end = 5;
        if ($end > $total) $end = $total;
    } else if ($page == $total){
        $start = $total - 4;
        $end = $total;
        if ($start <= 0) $start = 1;
    } else {
        if ($start <= 0) $start = 1;
        if ($end - $start < 4) $end = $start + 4;
        if ($end > $total) $end = $total;
    }

    for ($i = $start; $i <= $end; $i++) {
        if ($i !== $page) {
            if ($i !== 1)
                echo '<a class="page-numbers" href="' . $url . 'page/' . $i . '/">' . $i . '</a>';
            else
                echo '<a class="page-numbers" href="' . $url . '">' . $i . '</a>';
        } else {
            echo '<span aria-current="page" class="page-numbers current">' . $i . '</span>';
        }
    }
    if ($page + 1 < $total)
        echo '<a class="next page-numbers" href="' . $url . 'page/' . ($page + 1) . '/">' . __('Next &raquo;', 'newsnow') . ' <i/></a>';
    echo '</div></nav>';
}

add_action('template_redirect', function () {
    if (is_single()) {
        global $wp_query;
        $page = ( int )$wp_query->get('page');
        if ($page > 1) {
            // convert 'page' to 'paged'
            $wp_query->set('page', 1);
            $wp_query->set('paged', $page);
        }
        // prevent redirect
        remove_action('template_redirect', 'redirect_canonical');
    }
}, 0); // on priority 0 to remove 'redirect_canonical' added with priority 10