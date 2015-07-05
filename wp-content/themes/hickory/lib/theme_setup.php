<?php

/**
 * Theme Setup Template
 */

// Show Admin Toolbar
//show_admin_bar( true );

// Add Thumbnail Support
add_theme_support( 'post-thumbnails' );

// Register Menus
register_nav_menus( array(
	'main'   => 'Main',
  'mobile' => 'Mobile',
	'social' => 'Social'
));

// Register Widget Areas
// etc.
