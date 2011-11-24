<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Authenticated_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
        // if user has no session
        if(!$this->ion_auth->logged_in())
        {
            show_404();
        }
        
        // set theme to admin theme
        $theme_path = $this->template->set_theme('default');
        $this->asset->set_theme($this->template->get_theme_path());
        
        $this->template
        ->set_partial('header', 'partials/header')
        ->set_partial('metadata', 'partials/metadata')
        ->append_metadata(theme_js('jquery/jquery.min.js'))
        ->append_metadata(theme_css('style.css'));
        
    }
}
