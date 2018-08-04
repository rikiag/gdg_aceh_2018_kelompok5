<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

class RESTHalte extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        require_once APPPATH.'third_party/dataStore/_includes.php';
    }

    public function index_get()
    {
        echo"hahaha";
    }

}
