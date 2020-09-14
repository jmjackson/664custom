<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServicesAdmin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('ServiceAdmin_model'));
  }

  public function index()
  {
    $data = array('title' =>"Gestion de Servicios" , );
    $datos = array('Services'=>$this->ServiceAdmin_model->GetSerAdmin());
    $this->load->view('Layouts/head', $data);
    $this->load->view('ServicesAdmin/index', $datos);
    $this->load->view('Layouts/footer');
  }
  public function details($Id)
  {
    $data = array('title' =>"Detalles de Servicio" , );
    $datos = array('Service' =>$this->ServiceAdmin_model->GetSerAdminbyId($Id));
    $this->load->view('Layouts/head', $data);
    $this->load->view('ServicesAdmin/details',$datos);
    $this->load->view('Layouts/footer');

  }

}
