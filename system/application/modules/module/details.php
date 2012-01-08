<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_module extends Module {
	
	public function info()
	{
		$info = array(
			'name' => 'Module',
			'description' => 'Module manager',
			'menu' => 'development',
			'version' => '1.0'
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
