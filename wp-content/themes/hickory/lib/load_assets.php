<?php

/**
 * Load Assets Template
 */

add_action( 'wp_enqueue_scripts', 'hickory_enqueue_scripts' );
function hickory_enqueue_scripts() {
	wp_enqueue_style( 'hickory', get_stylesheet_directory_uri() . '/assets/dist/theme.min.css' );
    error_log("styles enqueued");
	//wp_enqueue_script( 'hickory-scripts', get_template_directory_uri() . '/assets/dist/them.min.js', array(), '1.0.0', true );
}

function hickory_do_scripts()
{
    ?>
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <?php
}
