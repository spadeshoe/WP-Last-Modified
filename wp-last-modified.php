<?php
/**
	* Plugin Name: WP Last Modified
	* Description: Display the User and date of last time record was touched
	* Version: 0.1.0
	* Author: Spadefoot Media, LLC
	* License: GPL2
	* Text Domain: wp-last-modified

*/
if( ! defined('ABSPATH') ){
	exit;
}

if ( ! function_exists( 'get_plugin_data' ) ) {
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

$plugin_data = get_plugin_data(__FILE__, false, false);

define('WPLM_PLUGIN_VERSION', $plugin_data['Version']);
define('WPLM_DIRECTORY_PATH', plugin_dir_path( __FILE__ ));
define('WPLM_DIRECTORY_URL', plugin_dir_url( __FILE__ ));

require WPLM_DIRECTORY_PATH . '/inc/class-last-modified.php';
require WPLM_DIRECTORY_PATH . '/inc/enqueue-scripts.php';

require WPLM_DIRECTORY_PATH . '/inc/last-touch.php';
require WPLM_DIRECTORY_PATH . '/inc/admin-columns.php';
