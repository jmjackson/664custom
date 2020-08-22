<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

      $this->load->model(array('Car_model'));
  }

  function index()
  {

    $datos = array('title' =>"Autos" , );
    $data = array('Car' =>$this->Car_model->GetCar());
    $this->load->view('Layouts/head',$datos);
    $this->load->view('Car/index',$data);
    $this->load->view('Layouts/footer');
  }
  public function create($id='')
  {
    $datos = array('title' =>"Detalles de recibo" , );
    $data = array('manttoid' => $id , );
    $this->load->view('Layouts/head', $datos);
    $this->load->view('Car/create',$data );
    $this->load->view('Layouts/footer');

  }
  public function details($id)
  {
    $datos = array('title' =>"Detalle del auto" , );
    $data = array('car' =>$this->Car_model->GetCarId($id) , );

    $this->load->view('Layouts/head', $datos);
    $this->load->view('Car/details', $data);
    $this->load->view('Layouts/footer');
  }
  public function edit($id='')
  {
    $datos = array('title' => "Actualizar Autos");
    $data = array('car' =>$this->Car_model->GetCarId($id));
    $this->load->view('Layouts/head', $datos);
    $this->load->view('Car/edit',$data);
    $this->load->view('Layouts/footer');
  }

  public function update()
  {
    $Id=$this->input->post('Id');
    $datos = array('Plate' =>$this->input->post('Plate'),
    'Year' =>$this->input->post('Year'),
    'Make'=>$this->input->post('Make'),
    'Model'=>$this->input->post('Model'),
    'Color' =>$this->input->post('Color'),
    'Notes'=>$this->input->post('Notes'));


        if ($this->Car_model->UpdateCar($Id,$datos)) {
        redirect(base_url().'Car');
        }
        else {
          echo "Error en su Actualizacion de datos";
        }
  }
  public function addcar()
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

    if ($this->Car_model->AddCar($data)) {
      redirect(base_url().'Car');
    }
    else {
      echo "Hubo un error";
    }

  }



}
