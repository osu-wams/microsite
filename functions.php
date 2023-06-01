<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	$parenthandle = 'koji-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
	$theme        = wp_get_theme();
	wp_enqueue_style(
		$parenthandle,
		get_template_directory_uri() . '/style.css',
		array(),  // if the parent theme code has a dependency, copy it to here
		$theme->parent()->get( 'Version' )
	);
	wp_enqueue_style(
		'child-style',
		get_stylesheet_uri(),
		array( $parenthandle ),
		$theme->get( 'Version' ) // this only works if you have Version in the style header
	);
}


function add_google_fonts() {
	wp_enqueue_style( ' add_google_fonts ', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap', false );}
	add_action( 'wp_enqueue_scripts', 'add_google_fonts' );
