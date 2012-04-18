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
			->set('amodules', $this->module_m->order_by('slug', 'asc')->get_many_by(array('is_core' => 0)))
			->set('cmodules', $this->module_m->order_by('slug', 'asc')->get_many_by(array('is_core' => 1)))
			->build('index');
    }
    
    function update_modules(){
		// sync core modules
		$this->module_m->update_modules(true);
		
		// sync addon modules
		$this->module_m->update_modules(false);
		
		// go back to lists
		redirect('admin/module');
	}

}
