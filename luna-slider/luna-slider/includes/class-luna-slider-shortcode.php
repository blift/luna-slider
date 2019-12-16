<?php

/**
 * Register all actions and filters for the plugin
 *
 * @link       www.websitehill.com/about-us/
 * @since      1.0.1
 *
 * @package    Luna_Slider
 * @subpackage Luna_Slider/includes
 */

/**
 * Register all actions and filters for the plugin.
 *
 * Maintain a list of all hooks that are registered throughout
 * the plugin, and register them with the WordPress API. Call the
 * run function to execute the list of actions and filters.
 *
 * @package    Luna_Slider
 * @subpackage Luna_Slider/includes
 * @author     Jacek Gajewski <jacek.gajewski@websitehill.com>
 */
class Luna_Slider_Shortcodes {

	public function whluna() {

		$args = array(
	    	'post_type'        => 'post',
			);
		$the_query = new WP_Query( $args );

		?>
		<div class="owl-carousel owl-theme luna-post">
			<?php

			if ( $the_query->have_posts() ) :
			    while ( $the_query->have_posts() ) : $the_query->the_post();
			        ?>
			        		<div class="luna-item">
			        			<div id="luna-post-bg"><?php the_post_thumbnail(); ?></div>
			        			<div id="luna-post-bg-shade"></div>
			        			<div class="luna-post-date-container">
				        			<div id="luna-the-date"><?php the_date( 'Y-m-d', '<h2>', '</h2>' ); ?></div>
				        			<div id="luna-post-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo wp_trim_words(get_the_title(), 5, ' [...]'); ?></a></div>
				        			<div id="luna-post-tags"><p><?php the_tags('', ' ', ''); ?></p></div>
				        		</div>	
			        		</div>
			        	
			        <?php
			    endwhile;
			else :
			    _e( 'Sorry, no posts were found.', 'textdomain' );
			endif;

			?>
		</div>
		<?php

	}

}
