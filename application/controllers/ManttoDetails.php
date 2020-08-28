<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManttoDetails extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Service_model','Mantto_model','ManttoDetails_model'));
  }



  public function addDetails($id='')
  {
    $datos = array(
      'services' =>$this->Service_model->GetServices() ,
      'Mantto'=>$this->Mantto_model->GetManttoId($id),
      'MD'=>$this->ManttoDetails_model->GetServices($id),);

    $data = array('title' =>"Agregar Servicios" , );
    $this->load->view('Layouts/head', $data);
    $this->load->view('ManttoDetails/add',$datos);
    $this->load->view('Layouts/footer');
  }

  public function AddMantto()
  {
    $manttoId=$this->input->post('ManttoId');
    $serviceId=$this->input->post('ServiceId');
    $hours=$this->input->post('Hours');
    $rate=$this->input->post('Rate');
    $total=$hours*$rate;
    $status="Pendiente";

    $datos = array(
      'ManttoId' =>$manttoId ,
      'ServiceId'=>$serviceId,
      'Hours'=>$hours,
      'Rate'=>$rate,
      'Total'=>$total,
      'Status'=>$status,
    );

    if ($this->ManttoDetails_model->Add($datos)) {
      redirect(base_url().'ManttoDetails/addDetails/'.$manttoId);
    }
    else{
      echo "Tienes un error";
    }
  }

  public function Delete()
  {
    /*
    Traer primero el id mantto
      obtener los datos del ManttoDetail desde la funcion getservices (pasandole Id mantto)
      md=$this->ManttoDetails_model->GetServices($manttoId),
      foreach y vas $this->ManttoDetails_model->Delete($md->Id)

      obtenemos los datos del datos del carro
      hacer una funcion que retorne row que vaya al Car_model
      $manttoId
      $car=$this->Car_model->GetCarManttoId($mantoid);
      $this->Car_model->Delete($car->Id);

      if ($this->Mantto_model->Delete($manttoid)) {
        redirect(base_url().'Mantto');
      }else{
      "Hubo un error"
      }
    */
    $manttoId=$this->input->post('ManttoId');
    $id=$this->input->post('Id');
    if ($this->ManttoDetails_model->Delete($id)) {
      return redirect(base_url().'ManttoDetails/addDetails/'.$manttoId);
    }
  }
}
