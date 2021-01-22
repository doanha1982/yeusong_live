<div class="section-heading">

    <?php
    echo '<h3 class="section-title">' . __('Feature Articles', 'newsnow') . '</h3>';
    ?>

</div><!-- .section-heading -->
<div class="feature-container">
<?php
while ($posts->have_posts()) : $posts->the_post();

    ?>

        <div class="hot-article <?php echo ($posts->current_post + 1 === $posts->post_count) ? 'last' : ''; ?>">

            <?php if (has_post_thumbnail()) { ?>
                <a class="thumbnail-link" href="<?php the_permalink(); ?>">
                    <div class="thumbnail-wrap">
                        <?php
                        the_post_thumbnail('post_thumb', array( 'class' => 'post_thumb' ));
                        ?>
                    </div><!-- .thumbnail-wrap -->
                </a>
            <?php } ?>

            <div class="entry-header">

                <h4 class="entry-title"><span class="entry-date"><?php echo get_the_date(); ?></span> <a href="<?php the_permalink(); ?>"><?php echo substr(the_title(false),0,60); ?></a></h4>

                <!-- <div class="entry-meta">
                    <span class="entry-date"><?php echo get_the_date(); ?></span>
                </div>.entry-meta -->

            </div><!-- .entry-header -->
        </div>


<?php
endwhile;
?>
</div><!-- .hentry -->
