<?php $class = ( $wp_query->current_post + 1 === $wp_query->post_count ) ? 'clear last' : 'clear'; ?>

<div id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>

	<?php if ( get_field( 'clip_id' ) ) { ?>
        <a class="thumbnail-link" href="<?php the_permalink(); ?>">
            <div class="thumbnail-wrap">
                <img width="300" height="200"
                     src="https://i1.ytimg.com/vi/<?php echo get_field( 'clip_id' ); ?>/mqdefault.jpg"
                     class="attachment-post_thumb size-post_thumb wp-post-image" alt="<?php the_title(); ?>"
                     sizes="(max-width: 300px) 100vw, 300px">
            </div><!-- .thumbnail-wrap -->
        </a>
	<?php } ?>

    <div class="entry-header">

		<?php if ( ! is_category() ) : ?>
            <div class="entry-category-icon"><?php newsnow_first_category(); ?></div>
		<?php endif; ?>

        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<?php get_template_part( 'template-parts/entry', 'meta' ); ?>

    </div><!-- .entry-header -->

    <div class="entry-summary">
		<?php
        echo newsnow_custom_excerpt( get_theme_mod( 'archive-excerpt-length', '33' ) );
        ?>
        <span><a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more &raquo;', 'newsnow' ); ?></a></span>
    </div><!-- .entry-summary -->

</div><!-- #post-<?php the_ID(); ?> -->