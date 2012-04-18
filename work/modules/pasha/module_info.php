<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_pasha extends Module {
	
	public $version = '1.0';
	public $name = 'Pasha';
	public $description = 'Module bobodoan';
	public $menu = NULL;

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
