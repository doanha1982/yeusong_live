<?php get_header(); ?>

<div id="primary" class="content-area clear">

    <?php if (get_theme_mod('top-section-on', 'true') == true) { ?>

        <div id="home-welcome" class="clear">

            <div id="featured-content">

                <?php
                // Lay bai post Featured, khong lay sticky
                $args = array(
                    'post_type' => 'post',
                    'ignore_sticky_posts' => true,
                    'posts_per_page' => 4,
                    'meta_query' => array(
                        array(
                            'key' => 'is_featured',
                            'value' => 'true'
                        )
                    ),
                    'order' => 'DESC',
                    'orderby' => 'modified'
                );

                // The Query
                $the_query = new WP_Query($args);

                $i = 1;

                if ($the_query->have_posts()) {

                    ?>


                    <?php
                    // The Loop
                    while ($the_query->have_posts()) : $the_query->the_post();
                        ?>


                        <?php if ($i <= 1) { ?>

                            <?php if ($i == 1) { ?>
                                <ul class="bxslider">
                            <?php } ?>

                            <li class="featured-slide hentry">

                                <a class="thumbnail-link" href="<?php the_permalink(); ?>">

                                    <span class="gradient"></span>

                                    <div class="thumbnail-wrap">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('featured_large_thumb');
                                        } else {
                                            echo '<img src="' . get_template_directory_uri() . '/assets/img/no-featured.png" alt="" />';
                                        }
                                        ?>
                                    </div><!-- .thumbnail-wrap -->
                                </a>

                                <div class="entry-header clear">
                                    <h2 class="entry-title"><a
                                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div><!-- .entry-header -->

                            </li><!-- .featured-slide .hentry -->

                            <?php

                            if ((($i == $the_query->post_count) && ($the_query->post_count <= 1)) || (($i == 1) && ($the_query->post_count > 1))) {

                                ?>

                                </ul><!-- .bxslider -->

                            <?php } ?>


                        <?php } else { ?>

                            <div class="featured-square hentry <?php echo ($the_query->current_post + 1 === $the_query->post_count) ? 'last' : ''; ?>">

                                <?php if (has_post_thumbnail()) { ?>
                                    <a class="thumbnail-link" href="<?php the_permalink(); ?>">
                                        <div class="thumbnail-wrap">
                                            <?php
                                            the_post_thumbnail('post_thumb');
                                            ?>
                                        </div><!-- .thumbnail-wrap -->
                                    </a>
                                <?php } ?>

                                <div class="entry-header">
                                    <h2 class="entry-title"><a
                                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div><!-- .entry-header -->

                            </div><!-- .hentry -->


                            <?php

                        }
                        $i++;
                    endwhile;
                    ?>
                    <?php
                } elseif (!$the_query->have_posts() && (!get_query_var('paged'))) { // else has no featured posts
                    ?>
                    <div class="notice">
                        <p><?php echo __('Please edit posts and set "Featured Posts" for this section.', 'newsnow'); ?></p>
                        <p>
                            <a href="<?php echo home_url(); ?>/wp-admin/edit.php"><?php echo __('Okay, I\'m doing now &raquo;', 'newsnow'); ?></a>
                            | <a href="<?php echo get_template_directory_uri(); ?>/assets/img/how-to-featured.png"
                                 target="_blank"><?php echo __('How To &raquo;', 'newsnow'); ?></a></p>
                    </div>

                    <?php
                } //end if has featured posts
                wp_reset_postdata();
                ?>

                <div class="ribbon"><span><?php echo esc_html('Featured', 'newsnow'); ?></span></div>

            </div><!-- #featured-content -->

            <?php
            // Lay nhung bai post moi nhat, khong phai Sticky, khong phai Featured
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 6,
                'ignore_sticky_posts' => true,
                'no_found_rows' => true,
                'category__not_in' => array( 1, 126 ),  
//                'order' => 'DESC',
//                'orderby' => 'date'
            );

            // The Query
            $latest_news = new WP_Query($args);
            $i = 1;

            if ($latest_news->have_posts()) :

                ?>

                <div id="latest-content">
                    <h3><?php esc_html_e('Latest News', 'newsnow'); ?></h3>

                    <?php
                    // The Loop
                    while ($latest_news->have_posts()) : $latest_news->the_post();

                        ?>

                        <div class="latest-square hentry <?php echo ($latest_news->current_post + 1 === $latest_news->post_count) ? 'last' : ''; ?>">

                            <div class="entry-header clear">
                                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                            </div><!-- .entry-header -->

                        </div><!-- .hentry -->

                        <?php
                        $i++;
                    endwhile;
                    wp_reset_postdata();
                    ?>

                    <div class="more-button">
                        <a class="btn"
                           href="<?php echo get_theme_mod('all-posts-url', home_url() . '/latest/'); ?>"><?php esc_html_e('View More News', 'newsnow'); ?></a>
                    </div>

                </div><!-- #latest-content -->

            <?php
            endif;
            wp_reset_postdata();
            ?>

        </div><!-- #home-welcome -->

    <?php } //end if display top content ?>

    <main id="main" class="site-main clear">
        <div id="app-content" class="content-block content-block-1 clear">
            <div class="section-heading">
                <h3 class="section-title"
                    style="text-align: left"><?php esc_html_e('Calculator Tools', 'newsnow'); ?></h3>
            </div>
            <div class="tool-container">
                <div class="tool-block">
                    <a href="<?php echo get_page_link(2459); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/tools/icon-bmi.png' ?>"
                             alt="BMI calculator"/>
                        <div>
                            <h5><?php echo __('BMI Calculator', 'newsnow'); ?></h5>
                            <span class="tool-desc">BMI là một chỉ số đáng tin cậy về sự mập ốm của một người.</span>
                        </div>

                    </a>
                </div>
                <div class="tool-block">
                    <a href="<?php echo get_page_link(2464); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/tools/icon-bmr.png' ?>"
                             alt="BMR calculator"/>
                        <div>
                            <h5><?php echo __('BMR Calculator', 'newsnow'); ?></h5>
                            <span class="tool-desc">BMR là lượng calo mà bạn tiêu tốn nếu không vận động trong một ngày.</span>
                        </div>
                    </a>
                </div>
                <div class="tool-block">
                    <a href="<?php echo get_page_link(2468); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/tools/icon-iwb.png' ?>"
                             alt="IBW calculator"/>
                        <div>
                            <h5><?php echo __('IBW Calculator', 'newsnow'); ?></h5>
                            <span class="tool-desc">IBW là cân nặng phù hợp với chiều cao và thể trạng của bạn.</span>
                        </div>
                    </a>
                </div>
                <div class="tool-block">
                    <a href="<?php echo get_page_link(2471); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/tools/icon-oc.png' ?>"
                             alt="Ovulation Calculator"/>
                        <div>
                            <h5><?php echo __('Ovulation Calculator', 'newsnow'); ?></h5>
                            <span class="tool-desc">Tính thời điểm rụng trứng, dễ thụ thai, ngày dự sinh em bé.</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="recent-content">

            <?php if (is_active_sidebar('homepage')) { ?>

                <?php dynamic_sidebar('homepage'); ?>

            <?php } else { ?>

                <div class="notice">
                    <p><?php echo __('Put the "Home One Column" widgets to the <strong>Homepage Content</strong> widget area.', 'newsnow'); ?></p>
                    <p>
                        <a href="<?php echo home_url(); ?>/wp-admin/widgets.php"><?php echo __('Okay, I\'m doing now &raquo;', 'newsnow'); ?></a>
                        | <a href="<?php echo get_template_directory_uri(); ?>/assets/img/how-to-home-widgets.png"
                             target="_blank"><?php echo __('How To &raquo;', 'newsnow'); ?></a></p>
                </div>

            <?php } ?>

        </div><!-- #recent-content -->

        <?php 
        
        $agrs = array(
            'post_type' => 'clip',
            'post_status' => 'publish',
            'posts_per_page' => 7,
            'order' => 'DESC',
            'orderby' => 'modified'
        );
        $latest_clips = new WP_Query($agrs);
        $i = 1;
        if ($latest_clips->have_posts()) :
        ?>

        <div class="content-block content-block-1 content-block-clips clear">
            <div class="section-heading">
                <h3 class="section-title" style="text-align: left"><?php esc_html_e('Video Clips', 'newsnow'); ?></h3>
                <span class="section-more-link"><a
                            href="<?php echo get_permalink(2563); ?>"><?php echo __('more', 'newsnow'); ?></a></span>
            </div>
        <?php           
            while ($latest_clips->have_posts()) : $latest_clips->the_post();
        ?>
        <?php if ($i == 1): ?>
        <div class="container-feature-clips">
            <div class="clip-item" style="background-image:url(<?php echo 'https://i1.ytimg.com/vi/' . get_field('clip_id') . '/hqdefault.jpg'; ?>);">
                <div class="clip-play-button"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-play.png'; ?>" alt="Play video now"/></a></div>
            </div>
            <div class="entry-header">
                <div class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo substr(the_title(false),0,100); ?></a>
                </div>
                <div class="entry-meta">
                    <span class="entry-date"><?php echo get_the_date(); ?></span>
                </div><!-- .entry-meta -->
                
            </div>                            
        </div>
        <div class="container-related-clips">
        <?php else: ?>
            <div class="container-clip">
                <div class="thumbnail-wrap" style="background-image:url(<?php echo 'https://i1.ytimg.com/vi/' . get_field('clip_id') . '/default.jpg'; ?>);">
                <div class="clip-play-button"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-play.png'; ?>" alt="Play video now"/></a></div>
                </div>

                <div class="entry-header">
                    <div class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo substr(the_title(false),0,100); ?></a>
                    </div>
                    <div class="entry-meta">
                        <span class="entry-date"><?php echo get_the_date(); ?></span>
                    </div><!-- .entry-meta -->
                    
                </div>
            </div>
        <?php
        endif;
        $i++;
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
        </div>
        <?php 
        endif;
        ?>
        
    </main><!-- .site-main -->
</div><!-- #primary -->

<?php get_template_part('sidebar', 'home'); ?>
<?php get_footer(); ?>
