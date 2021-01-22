<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newsnow
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!--    --><?php //if (get_theme_mod('favicon', '') != null) { ?>
    <!--        <link rel="icon" type="image/png" href="-->
    <?php //echo esc_url(get_theme_mod('favicon', '')); ?><!--"/>-->
    <!--    --><?php //} ?>
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" rel="stylesheet" media="print"
          onload="this.media='all'">
    <?php wp_head(); ?>
    <link rel="stylesheet" id="newsnow-style-css"
          href="http://thuoc.info.test/wp-content/themes/newsnow/style.css?ver=20200817"
          type="text/css" media="print"
          onload="this.media='all'">
    <?php

    $primary_font = 'Open Sans';
    $secondary_font = 'Open Sans';
    $primary_color = '#0091cd';
    $secondary_color = '#004b79';
    $link_hover_color = '#ff0000';

    ?>
    <style type="text/css" media="all">
        body,
        .breadcrumbs h3,
        .section-header h3,
        label,
        input,
        input[type="text"],
        input[type="email"],
        input[type="url"],
        input[type="search"],
        input[type="password"],
        textarea,
        button,
        .btn,
        input[type="submit"],
        input[type="reset"],
        input[type="button"],
        table,
        .sidebar .widget_ad .widget-title,
        .site-footer .widget_ad .widget-title {
            font-family: "<?php echo $primary_font; ?>", "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: "<?php echo $secondary_font; ?>", "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        a,
        a:visited,
        .sf-menu ul li li a:hover,
        .sf-menu li.sfHover li a:hover,
        #primary-menu li a:hover,
        #primary-menu li.current-menu-item a,
        #primary-menu li li a:hover,
        #primary-menu li li.current-menu-item a:hover,
        #secondary-menu li li a:hover,
        .entry-meta a,
        .edit-link a,
        .comment-reply-title small a:hover,
        .entry-content a,
        .entry-content a:visited,
        .page-content a,
        .page-content a:visited,
        .pagination .page-numbers.current,
        #latest-content h3,
        .content-block .section-heading h3 a,
        .content-block .section-heading h3 a:visited,
        .header-search .search-submit:hover {
            color: <?php echo $primary_color; ?>;
        }

        a:hover,
        .site-title a:hover,
        .mobile-menu ul li a:hover,
        .pagination .page-numbers:hover,
        .sidebar .widget a:hover,
        .site-footer .widget a:hover,
        .sidebar .widget ul li a:hover,
        .site-footer .widget ul li a:hover,
        .entry-related .hentry .entry-title a:hover,
        .author-box .author-name span a:hover,
        .entry-tags .tag-links a:hover:before,
        .widget_tag_cloud .tagcloud a:hover:before,
        .entry-content a:hover,
        .page-content a:hover,
        .content-block .section-heading h3 a:hover,
        .content-block .section-heading .section-more-link a:hover,
        .entry-meta .entry-comment a:hover,
        .entry-title a:hover,
        .page-content ul li:before,
        .entry-content ul li:before {
            color: <?php echo $link_hover_color; ?>;
        }

        .mobile-menu-icon .menu-icon-close,
        .mobile-menu-icon .menu-icon-open,
        .widget_newsletter form input[type="submit"],
        .widget_newsletter form input[type="button"],
        .widget_newsletter form button,
        .more-button a,
        .more-button a:hover,
        .entry-header .entry-category-icon a,
        #secondary-menu li.current-menu-item a,
        #secondary-menu li.sfHover a,
        #secondary-menu li a:hover {
            background-color: <?php echo $primary_color; ?>;
        }

        #secondary-bar,
        button,
        .btn,
        input[type="submit"],
        input[type="reset"],
        input[type="button"],
        button:hover,
        .btn:hover,
        input[type="reset"]:hover,
        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: <?php echo $secondary_color; ?>;
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SJMFZW41Y1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-SJMFZW41Y1');
    </script>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=138191576211358&autoLogAppEvents=1"
        nonce="Z5fMSisL"></script>
<div id="page" class="site">

    <header id="masthead" class="site-header clear">

        <div id="primary-bar">

            <div class="container">

                <nav id="primary-nav" class="main-navigation">

                    <?php
                    if (has_nav_menu('primary')) {
                        wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'sf-menu'));
                    } else {
                        ?>

                        <ul id="primary-menu" class="sf-menu">
                            <li>
                                <a href="<?php echo home_url(); ?>/wp-admin/nav-menus.php"><?php echo __('Add menu for: Primary Menu', 'newsnow'); ?></a>
                            </li>
                        </ul><!-- .sf-menu -->

                    <?php } ?>

                </nav><!-- #primary-nav -->

                <?php if (get_theme_mod('header-search-on', true)) : ?>

                    <div class="header-search">
                        <form id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                            <input type="search" name="s" class="search-input"
                                   placeholder="<?php esc_html_e('Search...', 'newsnow'); ?>" autocomplete="off">
                            <button type="submit" class="search-submit"><span class="genericon genericon-search"></span>
                            </button>
                        </form>
                    </div><!-- .header-search -->

                <?php endif; ?>

            </div><!-- .container -->

        </div><!-- #primary-bar -->

        <div class="site-start clear">

            <div class="container">

                <div class="site-branding">

                    <?php if (get_theme_mod('logo', get_template_directory_uri() . '/assets/img/logo.png') != null) { ?>

                        <div id="logo">
                            <span class="helper"></span>
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                <img src="<?php echo get_theme_mod('logo', get_template_directory_uri() . '/assets/img/logo.png'); ?>"
                                     alt=""/>
                            </a>
                        </div><!-- #logo -->

                    <?php } else { ?>

                        <div class="site-title">
                            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                        </div><!-- .site-title -->

                        <div class="site-description">
                            <?php echo get_bloginfo('description'); ?>
                        </div><!-- .site-description -->

                    <?php } ?>

                </div><!-- .site-branding -->

                <?php dynamic_sidebar('header-ad'); ?>

                <span class="mobile-menu-icon">
                    <span class="menu-icon-open"><?php echo __('Menu', 'newsnow'); ?></span>
                    <span class="menu-icon-close"><?php echo __('Close', 'newsnow'); ?></span>		
                </span>

            </div><!-- .container -->

        </div><!-- .site-start -->

        <div id="secondary-bar" class="container clear">

            <div class="container">

                <nav id="secondary-nav" class="secondary-navigation">

                    <?php
                    if (has_nav_menu('secondary')) {
                        wp_nav_menu(array('theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'menu_class' => 'sf-menu'));
                    } else {
                        ?>

                        <ul id="secondary-menu" class="sf-menu">
                            <li>
                                <a href="<?php echo home_url(); ?>/wp-admin/nav-menus.php"><?php echo __('Add menu for: Secondary Menu', 'newsnow'); ?></a>
                            </li>
                        </ul><!-- .sf-menu -->

                    <?php } ?>

                </nav><!-- #secondary-nav -->

            </div><!-- .container -->

        </div><!-- .secondary-bar -->

        <div class="mobile-menu clear">

            <div class="container">

                <?php

                if (has_nav_menu('primary')) {

                    echo '<div class="menu-left">';
                    echo '<h3>' . get_theme_mod('primary-nav-heading', __('Pages', 'newsnow')) . '</h3>';

                    wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-mobile-menu', 'menu_class' => '', 'depth' => 1));
                    echo '<ul style="margin-top: 15px"><li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2459"><a href="' . get_permalink(2459) . '">Chỉ Số BMI</a></li>';
                    echo '<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2464"><a href="'. get_permalink(2464) .'">Chỉ Số BMR</a></li>';
                    echo '<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2468"><a href="'. get_permalink(2468) .'">Cân Nặng Lý Tưởng</a></li>';
                    echo '<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2471"><a href="'. get_permalink(2471) .'">Tính Ngày Rụng Trứng</a></li>';
                    echo "</ul></div>";

                }

                if (has_nav_menu('secondary')) {

                    echo '<div class="menu-right">';
                    echo '<h3>' . get_theme_mod('secondary-nav-heading', __('Categories', 'newsnow')) . '</h3>';

                    wp_nav_menu(array('theme_location' => 'secondary', 'menu_id' => 'secondary-mobile-menu', 'menu_class' => '', 'depth' => 1));

                    echo "</div>";

                }

                ?>

            </div><!-- .container -->

        </div><!-- .mobile-menu -->

        <?php if (get_theme_mod('header-search-on', true)) : ?>

            <span class="search-icon">
				<span class="genericon genericon-search"></span>
				<span class="genericon genericon-close"></span>			
			</span>

        <?php endif; ?>

    </header><!-- #masthead -->
<!--    <div class="hot-tag-bar container clear">-->
<!---->
<!--        <div class="header">-->
<!--            <h1>Cập Nhật Tình Hình Dịch COVID-19</h1>-->
<!--        </div>-->
<!--        <span class="covid-icon covid-icon-open">--><?php //echo __('Open', 'newsnow'); ?><!--</span>-->
<!--        <div class="covid-collapse">-->
<!--            <ul>-->
<!--                --><?php
//                $args = array(
//                    'tag' => 'covid-19',
//                    'posts_per_page' => 4,
//                    'order' => 'DESC',
//                    'orderby' => 'date',
//                );
//                $post_tag = new WP_Query($args);
//                if ($post_tag->have_posts()) :
//                    while ($post_tag->have_posts()) : $post_tag->the_post();
//                        ?>
<!--                        <li>-->
<!--                            <a href="--><?php //the_permalink(); ?><!--">-->
<!--                                <span>&raquo;</span>-->
<!--                                --><?php
////                                $max = 75;
////                                $title = the_title('', '', false);
////                                if (strlen($title) > $max)
////                                    echo trim(substr($title, 0, $max)) . '...';
////                                else
////                                    echo $title;
//                                echo wp_trim_words(get_the_title(),  10);
//                                ?><!--</a>-->
<!--                        </li>-->
<!--                    --><?php //endwhile;
//                endif;
//                wp_reset_postdata();
//                ?>
<!--            </ul>-->
<!--        </div>-->
<!--        <span class="covid-icon covid-icon-close">--><?php //echo __('Close', 'newsnow'); ?><!--</span>-->
<!--    </div>-->
    <div id="content" class="site-content container clear">
