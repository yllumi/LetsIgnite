<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH."libraries/MX/Controller.php";

class MY_Controller extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->library('auth/ion_auth');
		$this->load->library('form_validation');
		$this->load->library('template');
		$this->load->library('licache');
		$this->load->library('asset');
		
		$this->load->helper(array('asset', 'url', 'form'));

		$this->user_id = $this->session->userdata('user_id');
		//$this->data['user'] = $this->ion_auth->profile($user_id);
	}
	
}
