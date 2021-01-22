<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package newsnow
 */

get_header();

if (function_exists('newsnow_set_post_views')) :
    newsnow_set_post_views(get_the_ID());
endif;
?>

<div id="primary" class="content-area">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>
    <main id="main" class="site-main">
        <!-- Back to top button -->
        <a class="btn-jump-to-top"><i class="icon-slide-up"></i></a>
        <?php
        $category = get_the_category();
        $first_category = $category[0];
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', 'single');
            $Post_ID = get_the_ID();
            // the_post_navigation();

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        wp_reset_postdata();
        ?>

        <?php if (get_field('tham_khao')): ?>
            <p style="display: block; margin: 20px 5px;"><?php the_field('tham_khao'); ?></p>
        <?php endif; ?>
        <?php if (get_field('source_url')): ?>
            <p style="display: block; margin: 20px 5px; text-align: right">
                <i>Nguồn:</i> <?php the_field('source_url'); ?></p>
        <?php endif; ?>
        <?php
        $counter = 1;
        $post_type = $post->post_type;
        $number = $post_type === 'post' ? 5 : 6;
        $paged = 1;
        if ($post->post_type == 'post') :
            $args = array(
                'post__not_in' => array(get_queried_object_id()),
                'category__in' => wp_get_post_categories(get_queried_object_id()),
                'posts_per_page' => $number,
                'post_status' => 'publish',
                'paged' => $paged
            );
        else :
            $args = array(
                'post__not_in' => array(get_queried_object_id()),
                'post_type' => 'clip',
                'posts_per_page' => $number,
                'post_status' => 'publish',
                'paged' => $paged
            );
        endif;

        $recent_posts = new WP_Query($args);
        if ($recent_posts->have_posts()) : ?>
        <div id="same-cat-posts" class="content-block content-block-1 same-cat-posts clear">
            <div class="section-heading">
                <h3 class="section-title"><a
                        href="<?php echo get_category_link($first_category); ?>"><?php echo __('Latest News', 'newsnow') ?></a>
                </h3>
                <span class="section-more-link">
                        <a href="<?php echo get_category_link($first_category); ?>"><?php echo __('more', 'newsnow') ?></a>
                    </span>
            </div>
            <?php
            while ($recent_posts->have_posts()): $recent_posts->the_post();
                get_template_part('template-parts/single-newest', 'post', array('counter' => $counter, 'post_type' => $post_type));
                $counter++;
            endwhile;
            ?>
        </div>
        <?php endif; wp_reset_postdata(); ?>
        
        <script type="text/javascript">
            var page = <?php echo $paged; ?>;
            jQuery(document).ready(function () {
                if (page > 1)
                    document.getElementById('same-cat-posts').scrollIntoView({
                        behavior: "smooth",
                        block: "end",
                        inline: "start"
                    });
            });
        </script>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
