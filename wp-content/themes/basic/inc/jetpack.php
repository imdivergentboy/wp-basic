<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Basic
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function basic_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'basic_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function basic_jetpack_setup
add_action( 'after_setup_theme', 'basic_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function basic_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function basic_infinite_scroll_render
