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
	function update_modules($is_core = true)
	{
		// scan module detected
		$detected = $this->_scan_modules($is_core);
		
		// get module list from database
		$saved = $this->order_by('slug', 'asc')->get_many_by(array('is_core' => ((int) $is_core)));
		
		// get just slug column for comparing
		$slugs = array();
		foreach($saved as $row)
			array_push($slugs, $row->slug);
		
		// check the unsaved module
		$unsave = array_diff($detected, $slugs);
		
		// check the unremove module which not found in module location
		$unremove = array_diff($slugs, $detected);
		
		// delete the unremove
		$data = false;
		if(count($unremove) > 0){
			foreach($unremove as $key=>$val){
				$slug = strtolower(url_title($val));
			
				$this->delete_by(array('slug'=>$slug));
			}
		}
		
		// save the unsave
		$data = false;
		if(count($unsave) > 0){
			foreach($unsave as $val){
				if(count($this->get_by(array('slug'=>$val, 'is_core' => (int) $is_core))) > 0){
					continue; //send message that there is modules with same name
				}
				
				$details = $this->_scan_module($val, $is_core);
				$data['name'] = $details[0]->name;
				$data['version'] = $details[0]->version;
				$data['description'] = $details[0]->description;
				$data['menu'] = $details[0]->menu;
				$data['slug'] = strtolower(url_title($details[0]->name));
				$data['is_core'] = (int) $is_core;
				$data['updated_on'] = time();
			
				$this->insert($data);
			}
		}
		
		return true;
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
			if(is_file($path.$modules[$i].'/module_info'.EXT))
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
