<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Module_m extends MY_Model
{
	
	function __construct(){
		parent::__construct();
		
		$this->_table = 'modules';
		
	}
	
	/**
	 * Scan Modules
	 *
	 * Scan Available modules in modules folder
	 *
	 * @access	public
	 * @return	array
	 */
	function scan_modules($is_core = true)
	{
		$location = $this->config->item('modules_locations');
		$key = array_keys($location);
		$path = $is_core ? $key[0] : $key[1];
		$modules = scandir($path);
		$result = array();
		for($i = 0; $i < count($modules); $i++)
			// if there is details.php file
			if(is_file($path.$modules[$i].'/details'.EXT))
				array_push($result, $modules[$i]);
		return $result;
	}
	
	/**
	 * Scan Class
	 *
	 * Checks to see if a details.php exists and returns a class
	 *
	 * @param	string	$slug	The folder name of the module
	 * @access	private
	 * @return	array
	 */
	private function _scan_class($slug, $is_core = FALSE)
	{
		$path = $is_core ? APPPATH : ADDONPATH;

		// Before we can install anything we need to know some details about the module
		$details_file = $path . 'modules/' . $slug . '/details'.EXT;

		// Check the details file exists
		if ( ! is_file($details_file))
		{
			$details_file = SHARED_ADDONPATH . 'modules/' . $slug . '/details'.EXT;

			if ( ! is_file($details_file))
			{
				return FALSE;
			}
		}

		// Sweet, include the file
		include_once $details_file;

		// Now call the details class
		$class = 'Module_'.ucfirst(strtolower($slug));

		// Now we need to talk to it
		return class_exists($class) ? array(new $class, dirname($details_file)) : FALSE;
	}

}
