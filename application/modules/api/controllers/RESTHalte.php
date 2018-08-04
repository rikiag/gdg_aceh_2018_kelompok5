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
        // echo"hahaha";
        $obj_store = new \GDS\Store('Book');
        $sql = "SELECT * FROM Book ORDER BY author ASC";
        $arr_posts = $obj_store->query($sql)->fetchAll();

        foreach ($arr_posts as $data ) {
            $tes[] = array(
                'title' => $data->title,
                'author' => $data->author,
                'isbn' => $data->isbn,
                'location' => $data->location,
            );
        }
        $this->response($tes, REST_Controller::HTTP_OK);
        // print_r($tes);
    }

    public function create_get()
    {
        $obj_store = new \GDS\Store('Book');

        // Create a simple Entity object
        $obj_book = $obj_store->createEntity([
            'title' => 'Bastian Tito',
            'author' => 'Wiro Sableng Jilid 2',
            'isbn' => '0812036387',
            'location'=>'Jakarta'
        ]);

        // Insert into the Datastore
        $obj_store->upsert($obj_book);

        // Show the key
        echo "Created: ", $obj_book->getKeyId();
    }

}
