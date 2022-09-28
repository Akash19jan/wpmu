<?php
/**
 * Plugin Name:	WPMU Display Customer ID
 * Description:	Enables options to display unique customer ID
 * Text Domain:	akash-customer-id
 * Domain Path: /languages/
 * Version:     1.0.1
 * Author:      Akash Agrawal
 *
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Function to load text domain
 *
 * @package WPMU Display Customer ID
 * @since 1.0.1
 */
add_action('plugins_loaded', 'bfs_shortcode_load_textdomain');
function bfs_shortcode_load_textdomain() {
	load_plugin_textdomain( 'akash-customer-id', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}

require_once plugin_dir_path( __FILE__ ) . 'class-wpmu-customer-shortcodes.php';

$customerShortcode = new WPMU_Customer_Shortcode();
$customerShortcode->run();