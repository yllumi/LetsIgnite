<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_auth extends Module {

	public $version = '1.0';
	
	public function info()
	{
		$info = array(
			'name' => 'Auth',
			'description' => 'Authentication Module using Ion Auth',
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
