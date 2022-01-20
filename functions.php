<?php

/**
 * Additional code for the child theme goes in here.
 */

add_action( 'wp_enqueue_scripts', 'enqueue_child_styles', 99);

function enqueue_child_styles() {
	$css_creation = filectime(get_stylesheet_directory() . '/style.css');

	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', [], $css_creation );
}

add_action( 'wp_enqueue_scripts', 'enqueue_child_scripts',  100);

function enqueue_child_scripts() {
	$js_creation = filectime(get_stylesheet_directory() . '/src/country-selector-banner.js');

	wp_enqueue_script( 'country-selector-banner', get_stylesheet_directory_uri() . '/src/country-selector-banner.js', [], $js_creation, true );
}

add_filter( 'locale', function() {
	return 'en';
});
