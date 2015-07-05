<?php

/**
 * Functions for Hickory.io
 *
 * author: zachfedor
 * version: 0.1
 * url: http://hickory.io
 * license: MIT
 */

$site_root = get_stylesheet_directory();

/**
 * Library
 */
add_action( 'wp_enqueue_scripts', 'hickory_enqueue_scripts' );
function hickory_enqueue_scripts()
{
    wp_enqueue_style( 'hickory', get_stylesheet_directory_uri() . '/assets/dist/theme.min.css' );
    wp_enqueue_script( 'hickory-scripts', get_template_directory_uri() . '/assets/dist/theme.min.js', array(), '1.0.0', true );
}


// Theme Setup
require_once( $site_root . '/lib/theme_setup.php' );

// Menu
require_once( $site_root . '/lib/menu.php' );

/**
 * Functions
 */

// error log
function elog( $x )
{
    ob_start();
    print_r( $x );
    $contents = ob_get_contents();
    ob_end_clean();
    error_log( $contents );
}
