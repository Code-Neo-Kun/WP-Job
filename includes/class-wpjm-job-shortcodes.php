<?php
class WPJM_Job_Shortcodes {
    public function __construct() {
        add_shortcode('wpjm_jobs', array($this, 'display_job_listings'));
    }

    public function display_job_listings($atts) {
        ob_start();
        // You can query the job listings here
        include plugin_dir_path(__FILE__) . '../templates/job-listings.php';
        return ob_get_clean();
    }
}
