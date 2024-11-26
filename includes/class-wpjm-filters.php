<?php
class WPJM_Filters {
    public function __construct() {
        add_shortcode('wpjm_job_filters', array($this, 'display_job_filters'));
    }

    public function display_job_filters() {
        ob_start();
        include plugin_dir_path(__FILE__) . '../templates/job-filters.php';
        return ob_get_clean();
    }
}
