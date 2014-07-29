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
