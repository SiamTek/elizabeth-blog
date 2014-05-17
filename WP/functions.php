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
 


if (! function_exists( 'ci_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Consistently Inconsistent v0.6
 */
 function ci_setup() {

     /**
     * Custom template tags for this theme.
     */
     require( get_template_directory() . '/inc/template-tags.php' );

     /**
     * Custom functions that act independently of the theme templates
     */
    require( get_template_directory() . '/inc/tweaks.php' );

    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Enable support for the Aside Post Format
     */
    add_theme_support( 'post-formats', array( 'aside' ) );

    /**
     * This theme uses wp_nav_menu() in one location.
     */
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'ci_wp' ),
    ) );
}
endif; // ci_setup
add_action( 'after_setup_theme', 'ci_setup' );
/**
* Hooks the ci_setup function to run when the 'after_setup_theme' function runs.
*/


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
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

