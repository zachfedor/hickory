<?php

/**
 * Load Assets Template
 */

//echo "load assets<br />";
//echo get_stylesheet_uri() . "<br />";
error_log("styles prepared");

add_action( 'wp_enqueue_scripts', 'hickory_enqueue_scripts' );
function hickory_enqueue_scripts() {
	wp_enqueue_style( 'hickory', get_stylesheet_directory_uri() . '/assets/dist/theme.min.css' );
    error_log("styles enqueued");
	//wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
