<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halte extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		require_once APPPATH.'third_party/dataStore/_includes.php';
	}

	public function index()
	{
		$this->content       = 'halte';
		$this->data['title'] = 'Halte';

		$this->data['script'] = 'script';
		$this->data['css'] = 'css';

		$this->layout();

	}

	public function add()
	{
		$obj_store = new \GDS\Store('halte');

		// Create a simple Entity object
		$obj_halte = $obj_store->createEntity([
			'nama'     => $this->input->post('nama'),
			'latitude' => $this->input->post('lat'),
			'logitude' => $this->input->post('lng'),
			'radius'   => 50,
			'entri_at' => date('d-m-Y')
			]);

			// Insert into the Datastore
			if ($obj_store->upsert($obj_halte)) {
				// $this->session->set_flashdata('message', "Berhasil Menambah Halte");
			}
			else{
				// $this->session->set_flashdata('message', "Gagal Menambah Halte");
			}

      return redirect('/halte','refresh');
	}
}
