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
    $folio=0;
    $last=$this->Mantto_model->GetLasRecord();
    if ($last==null) {
       $folio=1;
    }
    else {
      $folio=$last->Folio+1;
    }

    $datos = array('title' => "Recibo");
    $data = array('mantto' =>$this->Mantto_model->GetMantto(),'folio'=>$folio);
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

  public function details($id)
  {
    $datos = array('title' =>"Detalle de Recibo" , );
    $data = array('mantto' =>$this->Mantto_model->GetManttoId($id) , );

    $this->load->view('Layouts/head', $datos);
    $this->load->view('Mantto/details', $data);
    $this->load->view('Layouts/footer');
  }

}
