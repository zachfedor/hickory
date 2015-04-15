<?php

/**
 * Functions for Hickory.io
 *
 * author: zachfedor
 * version: 0.1
 * url: http://hickory.io
 */

echo CHILD_DIR;

/**
 * Layout
 */
//require_once( CHILD_DIR . '/lib/layout.php' );

/**
 * Template
 */
//require_once( CHILD_DIR . '/lib/template.php' );

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
