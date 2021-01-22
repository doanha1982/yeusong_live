<?php
/**
 * Template part for displaying newest posts within the same category of current post.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package newsnow
 */
?>
<?php if ($args['post_type'] === 'clip'): ?>
    <div class="container-recent-clips">
        <a class="thumbnail-link" href="<?php the_permalink(); ?>">
            <div class="thumbnail-wrap">
                <?php
                if (has_post_thumbnail()) :
                    the_post_thumbnail();
                else :
                    echo '<img width="300" height="200"
                         src="https://i1.ytimg.com/vi/' . get_field('clip_id') . '/mqdefault.jpg"
                         class="attachment-post_thumb size-post_thumb wp-post-image" alt="' . get_the_title() . '"
                         sizes="(max-width: 300px) 100vw, 300px">';
                endif;

                ?>
            </div>
        </a>
        <h2 class="entry-title"><a
                href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 13, '...'); ?></a>
        </h2>
    </div>
<?php endif; ?>

<?php if ($args['post_type'] === 'post') : ?>
                <?php if ($args['counter'] === 1) :?>
                    <div class="featured hentry clear">
                        <?php if (has_post_thumbnail()) { ?>
                            <a class="thumbnail-link" href="<?php the_permalink(); ?>" style="margin-top: 15px;">
                                <div class="thumbnail-wrap" style="text-align: center;margin-bottom: 10px;">
                                    <?php the_post_thumbnail('feature_thumb'); ?>
                                </div><!-- .thumbnail-wrap -->
                            </a>
                        <?php } ?>
                        <div class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div><!-- .entry-header -->

                        <div class="entry-meta">
                            <span class="entry-date"><?php echo get_the_date(); ?></span>
                        </div><!-- .entry-meta -->

                        <div class="entry-summary" style="padding-bottom: 15px;">
                            <?php
                            echo newsnow_custom_excerpt(25);
                            ?>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="post-small hentry">

                        <?php if (has_post_thumbnail()) { ?>
                            <a class="thumbnail-link" href="<?php the_permalink(); ?>" style="margin-top: 15px;">
                                <div class="thumbnail-wrap">
                                    <?php
                                    the_post_thumbnail();
                                    ?>
                                </div><!-- .thumbnail-wrap -->
                            </a>
                        <?php } ?>

                        <div class="entry-header">

                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            <div class="entry-meta">
                                <span class="entry-date"><?php echo get_the_date(); ?></span>
                                <span class="entry-date">
                                        <?php
                                        $posttags = get_the_tags();
                                        if ($posttags) {
                                            foreach ($posttags as $tag) {
                                                echo '<a href="' . get_tag_link($tag->term_id) . '">#' . $tag->name . '</a> ';
                                            }
                                        }
                                        ?>
                                        </span>

                            </div><!-- .entry-meta -->
                            <div class="entry-summary">
                                <?php
                                echo newsnow_custom_excerpt(25);
                                ?>
                            </div>
                        </div><!-- .entry-header -->

                    </div>
                <?php endif; ?>
            <?php endif; ?>
