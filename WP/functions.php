<?php
/**
 * Consistently Inconsistent functions and definitions
 *
 * @package Consistently Inconsistent
 * @since Consistently Inconsistent v0.6
 */

 
 /**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Consistently Inconsistent v0.6
 */
if ( ! isset( $content_width ) )
    $content_width = 700; /* pixels */
 


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' =>__( 'Home Right Sidebar' ),
		'id' => 'home_right_1',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget_title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
