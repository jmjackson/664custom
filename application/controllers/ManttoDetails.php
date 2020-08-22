<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManttoDetails extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }

  public function addDetails($id='')
  {
    $data = array('title' =>"Agregar Servicios" , );
    $this->load->view('Layouts/head', $data);
    $this->load->view('ManttoDetails/add');
    $this->load->view('Layouts/footer');
  }
}
