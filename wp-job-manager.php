<?php
/*
Plugin Name: WP Job Manager
Plugin URI: https://yourwebsite.com/wp-job-manager
Description: A simple job listing and management plugin for WordPress.
Version: 1.0
Author: Your Name
Author URI: https://yourwebsite.com
License: GPL-2.0+
Text Domain: wp-job-manager
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Include required files
require_once plugin_dir_path(__FILE__) . 'includes/class-wpjm-post-types.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-wpjm-filters.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-wpjm-job-shortcodes.php';

// Initialize the plugin
function wpjm_initialize() {
    new WPJM_Post_Types();
    new WPJM_Filters();
    new WPJM_Job_Shortcodes();
}
add_action('plugins_loaded', 'wpjm_initialize');
