<?php
class WPJM_Post_Types {
    public function __construct() {
        add_action('init', array($this, 'register_job_listing_post_type'));
    }

    public function register_job_listing_post_type() {
        register_post_type('job_listing', array(
            'labels' => array(
                'name' => __('Job Listings', 'wp-job-manager'),
                'singular_name' => __('Job Listing', 'wp-job-manager'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'custom-fields'),
            'has_archive' => true,
            'rewrite' => array('slug' => 'vacatures'),
            'show_in_rest' => true,
        ));
    }
}
