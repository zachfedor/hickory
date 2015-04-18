<?php

/**
 * Plugin for Hickory's Projects
 *
 * Plugin Name: Hickory Projects
 * Description: Custom post type of work samples in portfolio of hickory.io
 *
 * author: zachfedor
 * version: 0.1
 * url: http://hickory.io
 * license: MIT
 */

add_action( 'init', 'create_projects_cpt' );
/**
 * Register the Projects CPT
 */
function create_projects_cpt()
{
	$labels = array(
		'name'               => _x( 'Projects', 'post type general name', 'hickory-projects-cpt' ),
		'singular_name'      => _x( 'Project', 'post type singular name', 'hickory-projects-cpt' ),
		'menu_name'          => _x( 'Projects', 'admin menu', 'hickory-projects-cpt' ),
		'name_admin_bar'     => _x( 'Projects', 'add new on admin bar', 'hickory-projects-cpt' ),
		'add_new'            => _x( 'Add New', 'project', 'hickory-projects-cpt' ),
		'add_new_item'       => __( 'Add New Project', 'hickory-projects-cpt' ),
		'new_item'           => __( 'New Project', 'hickory-projects-cpt' ),
		'edit_item'          => __( 'Edit Project', 'hickory-projects-cpt' ),
		'view_item'          => __( 'View Project', 'hickory-projects-cpt' ),
		'all_items'          => __( 'All Projects', 'hickory-projects-cpt' ),
		'search_items'       => __( 'Search Projects', 'hickory-projects-cpt' ),
		'parent_item_colon'  => __( 'Parent Projects:', 'hickory-projects-cpt' ),
		'not_found'          => __( 'No projects found.', 'hickory-projects-cpt' ),
		'not_found_in_trash' => __( 'No projects found in Trash.', 'hickory-projects-cpt' )
	);

    $args = array(
        'labels' => $labels,
        'description' => "Custom post type for projects featured in portfolio of Hickory.io",
        'public' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 20,
        'menu_icon' => null,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title','editor','author','thumbnail','excerpt','custom-fields'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'projects'),
        'query_var' => true,
        'can_export' => true
    );

	register_post_type( 'project', $args );
}

/**
 * Flushing Rewrite On Activation
 */
function hickory_projects_rewrite_flush()
{
    create_projects_cpt();

    // only done during plugin activation, not on every page load
    // this will get permalinks to work on activation
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'hickory_projects_rewrite_flush' );