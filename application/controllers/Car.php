<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
<<<<<<< HEAD
    //Codeigniter : Write Less Do Mor
      $this->load->model(array('Car_model'));
=======
    //Codeigniter : Write Less Do More
>>>>>>> Palos
  }

  function index()
  {
<<<<<<< HEAD
    $datos = array('title' =>"Autos" , );
    $data = array('Car' =>$this->Car_model->GetCar());
    $this->load->view('Layouts/head',$datos);
    $this->load->view('Cars/index',$data);
    $this->load->view('Layouts/footer');
  }
  public function create()
  {
    $id=$this->input->post('Id');
    $plate=$this->input->post('Plate');
    $year=$this->input->post('Year');
    $make=$this->input->post('Make');
    $model=$this->input->post('Model');
    $color=$this->input->post('Color');
    $note=$this->input->post('Notes');
    $manttoid=$this->input->post('ManttoId');


    $data = array('Id' =>$id ,
    'Plate'=>$plate,
    'Year'=>$year,
    'Make'=>$make,
    'Model'=>$model,
    'Color'=>$color,
    'Notes'=>$note);
    if ($this->Cars_model->AddCar($data)) {
      redirect(base_url().'Car');
    }
    else {
      echo "Hubo un error";
    }
  }
=======
    
  }

>>>>>>> Palos
}
