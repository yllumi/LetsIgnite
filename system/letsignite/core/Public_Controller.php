<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Public_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
        // if site is closed for maintenance or under construction
        if($this->config->item('site_open') === FALSE)
        {
            show_error('Sorry the site is shut for now.');
        }
        
        // set theme to default theme
        $this->template->set_theme('default');
    }
}
