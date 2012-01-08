<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * PyroCMS
 *
 * An open source CMS based on CodeIgniter
 *
 * @package		PyroCMS
 * @author		PyroCMS Dev Team
 * @license		Apache License v2.0
 * @link		http://pyrocms.com
 * @since		Version 1.0
 * @filesource
 */

/**
 * PyroCMS Module Definition
 *
 * This class should be extended to allow for module management.
 *
 * @author		Dan Horrigan <dan@dhorrigan.com>
 * @package		PyroCMS
 * @subpackage	Modules
 * @abstract
 */
abstract class Module {

	/**
	 * @var The version of the module.
	 */
	public $version;
	public $name;
	public $slug;
	public $description;
	public $menu;

	/**
	 * Install
	 *
	 * Called upon first install of the module.
	 *
	 * @abstract
	 * @access	public
	 * @return	bool	Whether the module was installed
	 */
	public abstract function install();

	/**
	 * Uninstall
	 *
	 * Called upon the uninstall of the module.
	 *
	 * @abstract
	 * @access	public
	 * @return	bool	Whether the module was uninstalled
	 */
	public abstract function uninstall();
	
	/**
	 * Construct
	 *
	 * Loads the database and dbforge libraries.
	 *
	 * @access	public
	 * @return	string
	 */
	public function __construct()
	{
		$this->load->database();
		$this->load->dbforge();
	}

	/**
	 * __get
	 *
	 * Allows this class and classes that extend this to use $this-> just like
	 * you were in a controller.
	 *
	 * @access	public
	 * @return	mixed
	 */
	public function __get($var)
	{
		static $ci;
		isset($ci) OR $ci =& get_instance();
		return $ci->{$var};
	}
}

/* End of file Module.php */
