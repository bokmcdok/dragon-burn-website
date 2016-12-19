<?php

/*
 * Inherit from the Twenty Sixteen theme.
 */	

function dragon_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentysixteen-style' for the Twenty Sixteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'dragon_enqueue_styles' );

/*
 * Add a widget area to the header
 */

function dragon_widgets_init() {
		register_sidebar( array(
		'name'          => 'Top Bar',
		'id'            => 'site-outer'
	) );
}
add_action( 'widgets_init', 'dragon_widgets_init');

/*
 * Remove references to Google fonts from the theme (we are based in China).
 */

function dragon_dequeue_google_fonts() {
    wp_dequeue_style( 'twentysixteen-fonts' );
}
add_action( 'wp_enqueue_scripts', 'dragon_dequeue_google_fonts', 20 );
?>