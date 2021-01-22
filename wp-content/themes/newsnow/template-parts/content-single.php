<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package newsnow
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header clear">

<!--        <div class="entry-category-icon">-->
<!--            --><?php //newsnow_first_category(); ?>
<!--        </div>-->

        <?php
        if (is_single()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) : ?>

            <?php get_template_part('template-parts/entry', 'meta'); ?>

        <?php
        endif; ?>

    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        if (has_post_thumbnail() && (get_theme_mod('single-featured-on', false) == true)) :
            the_post_thumbnail('single_thumb');
        else :
            $feature_img_url = get_field('feature_image_link');
            if (!empty($feature_img_url)) :
                ?>
                <img width="880" height="528"
                     src="<?php echo $feature_img_url; ?>"
                     class="attachment-single_thumb size-single_thumb wp-post-image"
                     alt="<?php the_title(); ?>">
            <?php endif;
        endif;
        ?>
        <?php
        the_content(sprintf(
        /* translators: %s: Name of current post. */
            wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'newsnow'), array('span' => array('class' => array()))),
            the_title('<span class="screen-reader-text">"', '"</span>', false)
        ));

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'newsnow'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->
    <div class="entry-shares clear">
        <div class="fb-like" data-href="<?php echo esc_url(get_permalink()); ?>" data-width="200" data-layout="button"
             data-action="like" data-size="large" data-share="true" data-lazy="true"></div>
        <div class="fb-save" data-uri="<?php echo esc_url(get_permalink()); ?>" data-size="large"
             data-lazy="true"></div>
    </div>
    <span class="entry-tags">

		<?php if (has_tag()) { ?><span class="tag-links"><?php the_tags(' ', ' '); ?></span><?php } ?>

        <?php
        edit_post_link(
            sprintf(
            /* translators: %s: Name of current post */
                esc_html__('Edit %s', 'newsnow'),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            ),
            '<span class="edit-link">',
            '</span>'
        );
        ?>
	</span><!-- .entry-tags -->
    <?php
    $related_articles = get_field('related_articles');
    ?>
    <?php if ($related_articles) : ?>
        <div class="entry-content" style="padding: 20px;background: #eee">
            <h3 class="section-title">Bài Viết Cùng Chủ Đề</h3>
            <ul style="margin-bottom: 0px">
                <?php foreach ($related_articles as $article): ?>
                    <li>
                        <a href="<?php echo get_permalink($article->ID); ?>"><?php echo get_the_title($article->ID); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
</article><!-- #post-## -->