<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{

	}

	public function login()
	{
		$this->content       = 'login';
		$this->data['title'] = 'Login';

		$this->data['script'] = 'script';
		$this->data['css'] = 'css';

		$this->layout();
	}

	public function register()
	{
		$this->content       = 'register';
		$this->data['title'] = 'Register';

		$this->layout();
	}
}
