<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mantto extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Mantto_model'));
  }

  function index()
  {
    //Prueba 1
    // $Folio=$this->Mantto_model->GetLasRecord();
    // $max=0; $temp=0;
    // if ($i=0; $i < count($Folio); $i++) {
    //   $temp=$Folio[$i]->Mantto_model;
    //   if ($temp>$max) {
    //     $max=$temp;
    //   }
    // }

    //Intento 2
    // $Count=0;
    // $last=$this->Mantto_model->GetLasRecord();
    // if ($last->$Folio===null or $last->$Folio=='pendiente') {
    //   $Count=1;
    // }
    // $foliocurrent=$last;
    //
    // $foli= array('Folio' =>$this->Mantto_model->GetLasRecord(),'Folio' =>$foliocurrent,'pendiente'=>$count,);

    $datos = array('title' => "Recibo");
    $data = array('mantto' =>$this->Mantto_model->GetMantto());
    $this->load->view('Layouts/head',$datos);
    $this->load->view('Mantto/index',$data);
    $this->load->view('Layouts/footer');
  }
  public function create()
  {
    $data = array('Folio' =>$this->input->post('Folio'),
    'Name' =>$this->input->post('Name'),
    'Address'=>$this->input->post('Address'),
    'City'=>$this->input->post('City'),
    'Zip' =>$this->input->post('Zip'),
    'Email'=>$this->input->post('Email'),
    'Telefono'=>$this->input->post('Telefono'),
    'Cellphone'=>$this->input->post('Cellphone'));
    try {
        $f=$this->Mantto_model->AddMantto($data);
        redirect(base_url()."Car/create/".$f);
    } catch (\Exception $e) {

    }

    // if (//$this->Mantto_model->AddMantto($data)) {
    //   redirect(base_url().'Car/create/'.Id);
    // }
    // else {
    //   echo "Hubo un error";
    // }
  }
  public function edit($id='')
  {
    $datos = array('title' => "Actualizar Recibos");
    $data = array('mantto' =>$this->Mantto_model->GetManttoId($id));
    $this->load->view('Layouts/head', $datos);
    $this->load->view('Mantto/edit',$data);
    $this->load->view('Layouts/footer');
  }

  public function update()
  {
    $Id=$this->input->post('Id');
    $datos = array('Folio' =>$this->input->post('Folio'),
    'Name' =>$this->input->post('Name'),
    'Address'=>$this->input->post('Address'),
    'City'=>$this->input->post('City'),
    'Zip' =>$this->input->post('Zip'),
    'Email'=>$this->input->post('Email'),
    'Telefono'=>$this->input->post('Telefono'),
    'Cellphone'=>$this->input->post('Cellphone'));

        if ($this->Mantto_model->UpdateMantto($Id,$datos)) {
        redirect(base_url().'Mantto');
        }
        else {
          echo "Error en su Actualizacion de datos";
        }
  }

  public function delete($id='')
  {
    $datos = array('title' => "Eliminar Recibo", );
    $data = array('mantto' =>$this->Mantto_model->GetManttoId($id) , );
    $this->load->view('Layouts/head', $datos);
    $this->load->view('Mantto/delete',$data);
    $this->load->view('Layouts/footer');
  }
  public function deletep($id='')
  {
    if ($this->Mantto_model->Delete($id)) {
       redirect(base_url().'Mantto');
    }
    else{
      echo "Error al Eliminar sus datos";
    }
  }

}
