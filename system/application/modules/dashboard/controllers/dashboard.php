<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

    function __construct() {
        parent::__construct();
    }

    //log the user in
    function index() {
        $this->template->build('index');
    }

}
