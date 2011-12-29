<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

    function __construct() {
        parent::__construct();

        // set theme to default theme
        $theme_path = $this->template->set_theme('minimal');
        $this->asset->set_theme($this->template->get_theme_path());

        $this->template
                ->set_partial('header', 'partials/header')
                ->set_partial('metadata', 'partials/metadata')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer')
                ->append_metadata(theme_css('style.css'));
    }

    //redirect if needed, otherwise display the user list
    function index() {
        if (!$this->ion_auth->logged_in()) {
            //redirect them to the login page
            redirect('auth/login', 'refresh');
        } elseif ($this->ion_auth->is_admin()) {
            //redirect them to the home page because they must be an administrator to view this
            redirect('dashboard', 'refresh');
        } else {
            //set the flash data error message if there is one
            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            //list the users
            $data['users'] = $this->ion_auth->users()->result();
            foreach ($data['users'] as $k => $user) {
                $data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }

            $this->template->title('Halaman Beranda')->build('auth/index', $data);
        }
    }

}
