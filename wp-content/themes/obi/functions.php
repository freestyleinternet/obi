<?php

/****************************************
Theme Setup
*****************************************/

require_once( get_template_directory() . '/assets/theme-helpers/init.php' );
require_once( get_template_directory() . '/assets/theme-helpers/theme-helpers.php' );
require_once( get_template_directory() . '/assets/theme-helpers/theme-functions.php' );
require_once( get_template_directory() . '/assets/theme-helpers/theme-comments.php' );


/****************************************
Require Plugins
*****************************************/

require_once( get_template_directory() . '/assets/theme-helpers/class-tgm-plugin-activation.php' );
require_once( get_template_directory() . '/assets/theme-helpers/theme-require-plugins.php' );

add_action( 'tgmpa_register', 'register_required_plugins' );


/****************************************
Misc Theme Functions
*****************************************/


/**
 * Stop page re-load with gravity forms
 */
add_filter("gform_confirmation_anchor", create_function("","return true;"));

/**
 * Hide Admin bar on front-end
 */
show_admin_bar( false );

/**
 * Define custom post type capabilities for use with Members
 */
function mb_add_post_type_caps() {
	// mb_add_capabilities( 'portfolio' );
}

/**
 * Filter Yoast SEO Metabox Priority
 */
add_filter( 'wpseo_metabox_prio', 'mb_filter_yoast_seo_metabox' );
function mb_filter_yoast_seo_metabox() {
	return 'low';
}


// add featured image support
function custom_image_sizes() {
    add_theme_support('post-thumbnails');
	add_image_size('team', 70, 70, TRUE);
}
add_action('after_setup_theme', 'custom_image_sizes');

/**
 * Add custom brand colours to colour picker in editor
 */
function my_mce4_options( $init ) {
$default_colours = '
    "000000", "Black",
	"FFFFFF", "White"
';
$custom_colours = '
    "9f2842", "Color 1 Name",
	"f7a800", "Color 2 Name",
	"63666a", "Color 3 Name",
	"f5dc6e", "Color 4 Name"
';
$init['textcolor_map'] = '['.$default_colours.','.$custom_colours.']'; // build colour grid default+custom colors
$init['textcolor_rows'] = 6; // enable 6th row for custom colours in grid
return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');

/**
 * Define custom post type capabilities for use with Members
 */
add_action('init', 'feature_init');
function feature_init() 
{
	//Default arguments
	$args = array
	(
		'public' 					=> true,
		'publicly_queryable'		=> true,
		'show_ui' 			   		=> true, 
		'query_var' 			 	=> true,
		'rewrite' 			   		=> true,
		'capability_type' 	   		=> 'post',
		'has_archive' 		   		=> true, 
		'hierarchical' 		  	=> false,
		'menu_position' 		 	=> NULL,
	);
	
	/* ----------------------------------------------------
	Our Team
	---------------------------------------------------- */
	
	$labels = array
	(
		'name'						=> 'Team',
		'singular_name' 			=> 'Team',
		'add_new' 			  		=> _x('Add New', 'Team Member'),
		'add_new_item' 		 	=> 'Add Team Member',
		'edit_item' 				=> 'Edit Team Member',
		'new_item' 			 	=> 'New Team Member',
		'view_item' 				=> 'View Team Members',
		'search_items' 		 	=> 'Search Team Members',
		'not_found' 				=> 'No Team Members found',
		'not_found_in_trash'     => 'No Team Members found in Trash',
		'parent_item_colon' 	    => '',
		'menu_name' 				=> 'Team'
	);
	
	$args['labels'] 				= $labels;
	$args['supports'] 		  	    = array('title','editor','thumbnail');
	$args['rewrite']		   		= array('slug' => 'events');
	$args['menu_icon']		 		= '';
	$args['show_in_menu']			= true;
	$args['has_archive']	    	= true;
	
	register_post_type('team', $args);
	
	flush_rewrite_rules();
}