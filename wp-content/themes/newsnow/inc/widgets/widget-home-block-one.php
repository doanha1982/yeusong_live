<?php

/**
 * Home block one widget.
 *
 * @package    NewsNow
 * @author     HappyThemes
 * @copyright  Copyright (c) 2017, HappyThemes
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 * @since      1.0.0
 */
class NewsNow_Block_One_Widget extends WP_Widget {

	/**
	 * Sets up the widgets.
	 *
	 * @since 1.0.0
	 */
	function __construct() {

		// Set up the widget options.
		$widget_options = array(
			'classname'   => 'widget-newsnow-home-block-one',
			'description' => __( 'Display one-column post blocks. Only use for the "Homepage Content" widget area.', 'newsnow' )
		);

		// Create the widget.
		parent::__construct(
			'happythemes-home-block-one',          // $this->id_base
			__( '&raquo; Home One Column', 'newsnow' ), // $this->name
			$widget_options                    // $this->widget_options
		);
	}

	/**
	 * Outputs the widget based on the arguments input through the widget controls.
	 *
	 * @since 1.0.0
	 */
	function widget( $args, $instance ) {
		extract( $args );

		// Output the theme's $before_widget wrapper.
		echo $before_widget;

		// Theme prefix
		$prefix = 'newsnow-';

		// Pull the selected category.
		$cat_id = isset( $instance['cat'] ) ? absint( $instance['cat'] ) : 0;

		// Get the category.
		$category = get_category( $cat_id );

		// Get the category archive link.
		$cat_link        = get_category_link( $cat_id );
		$args            = null;
		$filter_features = false;
		$filters = (!empty($instance['filters'])) ? $instance['filters'] : '0';
//		echo $filters;
		if ( $filters == '1' ) {
			//FEATURES ARTICLES
			$filter_features = true;
			$args            = array(
				'post_type'      => 'post',
				'ignore_sticky_posts' => true,
				'posts_per_page' => ( ! empty( $instance['limit'] ) ) ? absint( $instance['limit'] ) : 5,
				'meta_query'     => array(
					array(
						'key'   => 'is_featured',
						'value' => 'true'
					)
				),
//                'order' => 'DESC',
//                'orderby' => 'modified'
			);
		} else if ($filters == '2') {
			//STICKY ARTICLES
			$filter_features = true;
			/* Number of articles */
			$num = ( ! empty( $instance['limit'] ) ) ? absint( $instance['limit'] ) : 6;
			/* Get all sticky posts */
			$sticky = get_option( 'sticky_posts' );
			/* Get the X newest stickies (change X for a different number) */
			$sticky = array_slice( $sticky, 0, $num );
			$args = array(
				'post__in' => $sticky,
				'ignore_sticky_posts' => 1,
//                'posts_per_page' => ( ! empty( $instance['limit'] ) ) ? absint( $instance['limit'] ) : 5,
//                'order' => 'DESC',
//                'orderby' => 'date'
			);
		}
		else {
		    //GET ALL - NO FILTER
			$args = array(
				'post_type'      => 'post',
				'ignore_sticky_posts' => true,
				'posts_per_page' => ( ! empty( $instance['limit'] ) ) ? absint( $instance['limit'] ) : 5,
//                'order' => 'DESC',
//                'orderby' => 'modified'
			);
		}

		// Posts query arguments.


		// Limit to category based on user selected tag.
		if ( ! $cat_id == 0 ) {
			$args['cat'] = $cat_id;
		}

		// Allow dev to filter the post arguments.
		$query = apply_filters( 'newsnow_home_one_column_args', $args );

		// The post query.
		$posts = new WP_Query( $query );

		$i = 1;

		if ( $posts->have_posts() ) : ?>

            <div class="content-block content-block-1 clear">
				<?php
				if ( $filter_features == false ) {
					require trailingslashit( get_template_directory() ) . 'template-parts/block-one-content.php';
				} else {
					require trailingslashit( get_template_directory() ) . 'template-parts/block-one-feature.php';
				}
				?>

            </div><!-- .content-block-1 -->

		<?php endif;

		// Restore original Post Data.
		wp_reset_postdata();

		// Close the theme's widget wrapper.
		echo $after_widget;

	}

	/**
	 * Updates the widget control options for the particular instance of the widget.
	 *
	 * @since 1.0.0
	 */
	function update( $new_instance, $old_instance ) {

		$instance = $new_instance;

		$instance['title']    = strip_tags( $new_instance['title'] );
		$instance['limit']    = (int) $new_instance['limit'];
		$instance['cat']      = (int) $new_instance['cat'];
		$instance['filters'] = strip_tags($new_instance['filters']);

		return $instance;
	}

	/**
	 * Displays the widget control options in the Widgets admin screen.
	 *
	 * @since 1.0.0
	 */
	function form( $instance ) {

		// Default value.
		$defaults = array(
			'title'    => '',
			'limit'    => 5,
			'cat'      => '',
            'filters'  => isset( $instance['filters'] ) ? (bool) $instance['filters'] : '0',
//			'features' => isset( $instance['features'] ) ? (bool) $instance['features'] : false // 0: false  1: true
		);
		$instance = wp_parse_args( (array) $instance, $defaults );
		?>

        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">
				<?php _e( 'Title:', 'newsnow' ); ?>
            </label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                   name="<?php echo $this->get_field_name( 'title' ); ?>"
                   value="<?php echo esc_attr( $instance['title'] ); ?>"/>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'cat' ); ?>"><?php _e( 'Choose category', 'newsnow' ); ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id( 'cat' ); ?>"
                    name="<?php echo $this->get_field_name( 'cat' ); ?>" style="width:100%;">
				<?php $categories = get_terms( 'category' ); ?>
                <option value="0"><?php _e( 'All categories &hellip;', 'newsnow' ); ?></option>
				<?php foreach ( $categories as $category ) { ?>
                    <option value="<?php echo esc_attr( $category->term_id ); ?>" <?php selected( $instance['cat'], $category->term_id ); ?>><?php echo esc_html( $category->name ); ?></option>
				<?php } ?>
            </select>
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'limit' ); ?>">
				<?php _e( 'Number of posts to show', 'newsnow' ); ?>
            </label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'limit' ); ?>"
                   name="<?php echo $this->get_field_name( 'limit' ); ?>" type="number" step="1" min="0"
                   value="<?php echo (int) ( $instance['limit'] ); ?>"/>
        </p>

        <p>
<!--            <input class="checkbox" type="checkbox"--><?php //checked( $instance['features'] ); ?>
<!--                  id="--><?php //echo $this->get_field_id( 'features' ); ?><!--"-->
<!--                  name="--><?php //echo $this->get_field_name( 'features' ); ?><!--"/>-->
	        <label for="<?php echo $this->get_field_id( 'filters' ); ?>"><?php _e( 'Filter By' ); ?></label>
            <select class="widefat"
                    id="<?php echo $this->get_field_id( 'filters' ); ?>"
                    name="<?php echo $this->get_field_name( 'filters' ); ?>">
                <option value="0" <?php selected($instance['filters'], '0')?>>All</option>
                <option value="1" <?php selected($instance['filters'], '1')?>>Features</option>
                <option value="2" <?php selected($instance['filters'], '2')?>>Stick To Top</option>
            </select>

        </p>
		<?php

	}

}

/**
 * Prints HTML with meta information for the current post-date/time and author.
 *
 * @since 1.0.0
 */
function newsnow_home_one_column_meta() {

	// Set up empty html
	$html = '';

	// Open wrapper
	$html     = '<div class="entry-meta">';
	$category = get_the_category( get_the_ID() );
	if ( $category && newsnow_categorized_blog() ) {
		$html .= '<span class="entry-category">' . esc_attr( $category[0]->name ) . '</span>';
	}
	$html .= ' <span class="sep">|</span> ';
	$html .= '<span class="entry-date"><time class="published" datetime="' . esc_html( get_the_date( 'c' ) ) . '">' . esc_html( get_the_date() ) . '</time></span>';
	$html .= '</div>';

	return $html;

}