<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klasemen extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->content       = 'klasemen';
		$this->data['title'] = 'Wellcome';

		$this->data['script'] = 'script';
		$this->data['css'] = 'css';

		$this->layout();

	}
}
