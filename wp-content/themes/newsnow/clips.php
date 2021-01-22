<?php
/*
Template Name: CLIPS
*/
get_header();
?>
<div id="primary" class="content-area clear">
    <main id="main" class="site-main clear">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
        <div class="breadcrumbs clear">
            <h3>
				<?php echo get_the_title(2563); ?>
            </h3>
			<?php
			// Show an optional term description.
			$term_description = term_description();
			if ( ! empty( $term_description ) ) :
				printf( '<div class="taxonomy-description">%s</div>', $term_description );
			endif;
			?>
        </div><!-- .breadcrumbs -->
        <div id="recent-content" class="content-loop">

			<?php
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'post_type'      => 'clip',
				'posts_per_page' => 5,
				'paged'           => $paged
			);
			$wp_query = new WP_Query( $args );
			$i = 1;
			if ( $wp_query->have_posts() ) :

				/* Start the Loop */
				while ( $wp_query->have_posts() ) : $wp_query->the_post();
					if ($i == 1) :
						get_template_part('template-parts/clips', 'feature');
					else :
						get_template_part('template-parts/clips', 'loop');
					endif;
					$i++;
				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;

			?>

        </div><!-- #recent-content -->
        <?php
        if (function_exists("my_custom_pagination")) :
            my_custom_pagination(get_permalink(2563), $paged, $wp_query->max_num_pages);
        endif;
        wp_reset_query();
        ?>
    </main><!-- #main -->
	<?php
//
//	global $wp_version;
//
//	if ( $wp_version >= 4.1 ) :
//
//		the_posts_pagination( array( 'prev_text' => _x( 'Previous', 'previous post', 'newsnow' ) ) );
//
//	endif;

    $term_description = term_description(117);
    if ( ! empty( $term_description ) ) :
        printf( '<div class="taxonomy-description">%s</div>', $term_description );
    endif;
	?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
