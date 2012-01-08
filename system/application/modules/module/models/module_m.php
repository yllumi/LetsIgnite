<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Module_m extends MY_Model
{
	
	function __construct(){
		parent::__construct();
		
		$this->_table = 'modules';
		
	}
	
	/**
	 * Sync Modules
	 *
	 * Compare and save new detected module to database
	 *
	 * @param	string	$slug	The folder name of the module
	 * @access	private
	 * @return	array
	 */
	function sync_modules($is_core = true)
	{
		// scan module detected
		$detected = $this->_scan_modules();
		
		// get module list from database
		$saved = $this->order_by('slug', 'asc')->get_all();
		
		// get just slug column for comparing
		$slugs = array();
		foreach($saved as $row)
			array_push($slugs, $row->slug);
		
		// check the unsaved module
		$unsave = array_diff($detected, $slugs);
		
		// check the unremove module which not found in module location
		$unremove = array_diff($slugs, $detected);
		
		// save the unsave
		$data = false;
		foreach($unsave as $val){
			$details = $this->_scan_module($val, $is_core);
			$data['name'] = $details[0]->name;
			$data['version'] = $details[0]->version;
			$data['description'] = $details[0]->description;
			$data['menu'] = $details[0]->menu;
			$data['slug'] = strtolower(url_title($details[0]->name));
			
			$this->insert($data);
		}
		
		return $data;
	}
	
	/**
	 * Scan Modules
	 *
	 * Scan Available modules in modules folder
	 *
	 * @access	public
	 * @return	array
	 */
	function _scan_modules($is_core = true)
	{
		// get module location from configuration in config.php file
		$location = $this->config->item('modules_locations');
		
		// we need the key, not the value
		$key = array_keys($location);
		
		// the first for core module, the others for additional module
		$path = ($is_core) ? $key[0] : $key[1];
		
		// check the module available in that folder
		$modules = scandir($path);
		
		
		$result = array();
		for($i = 0; $i < count($modules); $i++)
			
			// if there is details.php file, take that module
			if(is_file($path.$modules[$i].'/details'.EXT))
				array_push($result, $modules[$i]);
		
		return $result;
	}
	
	/**
	 * Scan Module
	 *
	 * Checks to see if a details.php exists and returns a class
	 *
	 * @param	string	$slug	The folder name of the module
	 * @access	private
	 * @return	array
	 */
	private function _scan_module($slug, $is_core = FALSE)
	{
		// get module location from configuration in config.php file
		$location = $this->config->item('modules_locations');
		
		// we need the key, not the value
		$key = array_keys($location);
		
		// the first for core module, the other for additional module
		$path = ($is_core) ? $key[0] : $key[1];

		// Before we can install anything we need to know some details about the module
		$details_file = $path . $slug . '/details'.EXT;

		// Sweet, include the file
		include_once $details_file;

		// Now call the details class
		$class = 'Module_'.strtolower($slug);

		// Now we need to talk to it
		return class_exists($class) ? array(new $class, dirname($details_file)) : FALSE;
	}

}
