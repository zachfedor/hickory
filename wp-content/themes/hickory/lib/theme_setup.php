<?php

/**
 * Theme Setup Template
 */

// Show Admin Toolbar
show_admin_bar( true );

// Add Thumbnail Support
add_theme_support( 'post-thumbnails' );

// Register Menus
register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu',
));

// Register Widget Areas
// etc.