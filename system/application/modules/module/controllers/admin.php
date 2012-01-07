<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('module_m');
        
        //set title and first breadcrumb
        $this->template->title('Module Manager');
        $this->template->set_breadcrumb('Module Manager', site_url('admin/module'));
    }

    function index() {
		$this->template
			->set('amodules', $this->module_m->scan_modules(false))
			->set('cmodules', $this->module_m->scan_modules(true))
			->build('index');
    }

}
