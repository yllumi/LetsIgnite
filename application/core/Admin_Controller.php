<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends Authenticated_Controller
{
    function __construct()
    {
        parent::__construct();
        
        /*
        if($this->data['user']['group'] !== 'admin')
        {
            show_error('Shove off, this is for admins.');
        }
        * */
    }
}
