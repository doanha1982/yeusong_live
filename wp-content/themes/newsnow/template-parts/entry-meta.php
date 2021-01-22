<div class="entry-meta clear">

    <span class="entry-author"><?php the_author_posts_link(); ?> &#8212; </span>
    <span class="entry-date"><?php echo get_the_date(); ?></span>
    <span class="entry-tags">
        <?php
        $posttags = get_the_tags();
        if ($posttags) {
            foreach ($posttags as $tag) {
                echo '<a href="' . get_tag_link($tag->term_id) . '">#' . $tag->name . '</a> ';
            }
        }
        ?>
    </span>
    <div class="fb-like" data-href="<?php echo esc_url(get_permalink());?>" data-width="200"
         data-layout="button" data-action="like" data-size="large" data-share="true" data-lazy="true"></div>
    <div class="fb-save" data-uri="<?php echo esc_url(get_permalink()); ?>" data-size="large"
         data-lazy="true"></div>
    <!--	--><?php //if (comments_open(the_ID())):?>
    <!--	<span class='entry-comment'>-->
    <?php //comments_popup_link( 'add comment', '1 comment', '% comments', 'comments-link', 'comments off'); ?><!--</span>-->
    <!--	--><?php //endif; ?>
</div><!-- .entry-meta -->