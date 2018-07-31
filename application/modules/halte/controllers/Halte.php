<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halte extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->content       = 'halte';
		$this->data['title'] = 'Halte';

		$this->data['script'] = 'script';
		$this->data['css'] = 'css';

		$this->layout();

	}
}
