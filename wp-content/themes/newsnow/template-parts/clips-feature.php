<?php ?>
<div class="breadcrumbs clear">
    <ul>
        <li class="featured-slide hentry" style="list-style: none">
            <a href="<?php the_permalink(); ?>">
                <span class="gradient"></span>
                <div class="thumbnail-wrap" style="text-align: center">
                    <img width="626" height="417"
                         src="https://i1.ytimg.com/vi/<?php echo get_field( 'clip_id' ); ?>/hqdefault.jpg"
                         class="attachment-featured_large_thumb size-featured_large_thumb wp-post-image" alt="<?php the_title(); ?>"
                         sizes="(max-width: 626px) 100vw, 626px">
                </div>
            </a>
            <div class="entry-header clear">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php get_template_part( 'template-parts/entry', 'meta' ); ?>
            </div><!-- .entry-header -->
            <div class="entry-summary">
				<?php echo newsnow_custom_excerpt( get_theme_mod( 'archive-excerpt-length', '33' ) ); ?>
                <span><a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more &raquo;', 'newsnow' ); ?></a></span>
            </div><!-- .entry-summary -->
        </li>
    </ul>
</div>
