<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServicesAdmin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('ServiceAdmin_model','Car_model','Mantto_model'));
  }

  public function index()
  {
    $data = array('title' =>"Gestion de Servicios" , );
    $datos = array('Services'=>$this->ServiceAdmin_model->GetSerAdmin());
    $this->load->view('Layouts/head', $data);
    $this->load->view('ServicesAdmin/index', $datos);
    $this->load->view('Layouts/footer');
  }

}
