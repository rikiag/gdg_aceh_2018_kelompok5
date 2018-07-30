<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $module = strtolower(get_class($this));
    $model = "M_".$module;

    if(file_exists(APPPATH . "modules/$module/models/$model.php")){
      $this->load->model($module."/".$model);
    }
  }

  //set the class variable.
  var $template  = array();
  var $data      = array();

  //Load layout
  public function layout() {

    $tpl = "inc/";
    // making temlate and send data to view.
    $this->template['header']  = $this->load->view($tpl.'header', $this->data, true);
    $this->template['navbar']  = $this->load->view($tpl.'navbar', $this->data, true);
    $this->template['content'] = $this->load->view($this->content, $this->data, true);
    $this->template['modal']   = $this->load->view($tpl.'modal', $this->data, true);
    $this->template['footer']  = $this->load->view($tpl.'footer', $this->data, true);
    $this->template['script']  = $this->load->view($tpl.'script', $this->data, true);
    $this->load->view('index', $this->template);
  }

}
?>
