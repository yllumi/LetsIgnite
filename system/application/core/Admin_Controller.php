<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        
        //if user isn't an admin
        if (!$this->ion_auth->is_admin()) {
            show_404();
        }

        //set theme to admin
        $this->template->set_theme('admin');
        $this->asset->set_theme($this->template->get_theme_path());

        $this->template
                ->set_partial('header', 'partials/header')
                ->set_partial('subheader', 'partials/subheader')
                ->set_partial('metadata', 'partials/metadata')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer')
                ->append_metadata(theme_css('layout.css'))
                ->append_metadata(theme_js('jquery-1.5.2.min.js'))
                ->append_metadata(theme_js('hideshow.js'))
                ->append_metadata(theme_js('jquery.tablesorter.min.js'))
                ->append_metadata(theme_js('jquery.equalHeight.js'));
    }

}
