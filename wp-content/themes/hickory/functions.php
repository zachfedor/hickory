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

// Theme Setup
require_once( $site_root . '/lib/theme_setup.php' );

// Doctype
require_once( $site_root . '/lib/doctype.php' );

// Load Assets
require_once( $site_root . '/lib/load_assets.php' );

// Favicon
require_once( $site_root . '/lib/favicon.php' );

// Analytics
require_once( $site_root . '/lib/analytics.php' );

// Header
require_once( $site_root . '/lib/header.php' );

// Menu
require_once( $site_root . '/lib/menu.php' );

// Sidebar
require_once( $site_root . '/lib/sidebar.php' );

// Footer
require_once( $site_root . '/lib/footer.php' );


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
