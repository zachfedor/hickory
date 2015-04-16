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
 * Template
 */
require_once( $site_root . '/lib/template.php' );

/**
 * Layout
 */
require_once( $site_root . '/lib/layout.php' );

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
