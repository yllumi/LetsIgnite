<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_dashboard extends Module {

	public $version = '1.0';
	
	public function info()
	{
		$info = array(
			'name' => 'Dashboard',
			'description' => 'Dashboard Page for admin',
			'menu' => FALSE
		);

		return $info;
	}
	
	public function install()
	{
		return TRUE;
	}

	public function uninstall()
	{
		//it's a core module, lets keep it around
		return FALSE;
	}

}
/* End of file details.php */
