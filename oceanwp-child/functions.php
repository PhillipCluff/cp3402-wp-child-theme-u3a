<?php
/**
 * Child theme functions
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
//add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
//function my_theme_enqueue_styles () {
//	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
//	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',
//		array('parent-style'), wp_get_theme()->get('Version') );
//}
function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );

}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

function oceanwp_display_footer_bottom(){
	remove_action('ocean_after_footer_bottom', 'do_action');
}
add_action('after_setup_theme', 'remove_footer_copy');