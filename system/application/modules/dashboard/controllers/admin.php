<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->template->title('Dashboard');
        $this->template->set('page', 'dashboard');
    }

    //log the user in
    function index() {
        $this->template->build('index');
    }

}
