<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package newsnow
 */

get_header(); ?>

<div id="primary" class="content-area clear">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>
    <main id="main" class="site-main clear" style="margin-top: 15px">

        <div class="breadcrumbs clear">
            <h3>
                <?php single_cat_title(''); ?>
            </h3>

        </div><!-- .breadcrumbs -->

        <div id="recent-content" class="content-loop">

            <?php
            $i = 1;
            $no_paging = !get_query_var('paged');

            if (have_posts()) :

                /* Start the Loop */
                while (have_posts()) : the_post();

                    if ($i == 1 && $no_paging == true) :
                        get_template_part('template-parts/category', 'feature');
                    else :
                        get_template_part('template-parts/content', 'loop');
                    endif;
                    $i++;
                endwhile;

            else :

                get_template_part('template-parts/content', 'none');

            endif;

            ?>

        </div><!-- #recent-content -->
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $category = get_queried_object();
        if (function_exists("my_custom_pagination")) {
            my_custom_pagination(get_category_link($category->term_id), $paged, $wp_query->max_num_pages);
        }
        ?>
    </main><!-- .site-main -->


    <?php
    // Show an optional term description.
    $term_description = term_description();
    if (!empty($term_description)) :
        printf('<div class="">%s</div>', $term_description);
    endif;
    ?>
</div><!-- #primary -->
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>
