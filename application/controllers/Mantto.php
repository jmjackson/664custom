<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Mantto extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Mantto_model','Car_model'));
  }

  function index()
  {

    $datos = array('title' => "Recibo");
    $data = array('mantto' =>$this->Mantto_model->GetMantto(),'car'=>$this->Car_model->GetCar(), );
    $this->load->view('Layouts/head',$datos);
    $this->load->view('Mantto/index',$data);
    $this->load->view('Layouts/footer');
  }

  public function create()
  {
    $folio=0;
    $last=$this->Mantto_model->GetLasRecord();
    if ($last==null) {
       $folio=1;
    }
    else {
      $folio=$last->Folio+1;
    }
    $data = array('folio'=>$folio);
    $datos = array('title' => "Nuevo Recibo", );
    $this->load->view('Layouts/head', $datos);
    $this->load->view('Mantto/create',$data);
    $this->load->view('Layouts/footer');
  }

  public function addMantto()
  {
    $data = array('Folio' =>$this->input->post('Folio'),
    'Name' =>$this->input->post('Name'),
    'Address'=>$this->input->post('Address'),
    'City'=>$this->input->post('City'),
    'Zip' =>$this->input->post('Zip'),
    'Email'=>$this->input->post('Email'),
    'Telefono'=>$this->input->post('Telefono'),
    'Cellphone'=>$this->input->post('Cellphone'),
    'DateMantto'=>$this->input->post('DateMantto'),
    'Status'=>"InProcess",
      );
    $manttoid=$this->Mantto_model->AddMantto($data);

    if ($manttoid>0) {
      $dataCar = array(
        'Plate' =>$this->input->post('Plate'),
        'Make'=>$this->input->post('Make'),
        'Model'=>$this->input->post('Model'),
        'Color'=>$this->input->post('Color'),
        'Notes'=>$this->input->post('Notes'),
        'Year'=>$this->input->post('Year'),
        'ManttoId'=>$manttoid
        );

    }
    else {
      echo "No se cargaron los archivos";
    }
    if ($this->Car_model->AddCar($dataCar)) {
      redirect(base_url().'ManttoDetails/addDetails/'.$manttoid);
    }
    else {
      echo "Hubo un error";
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
  public function invoice($id='')
  {
    $mantto=$this->Mantto_model->GetManttoId($id);
    $data = array('title' =>"Recibo" , );
    $this->load->view('Layouts/head', $data);
    $this->load->view('Mantto/invoice',);
    $this->load->view('Layouts/footer', $data);
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
    $data = array('mantto' =>$this->Mantto_model->GetManttoId($id),);
    $this->load->view('Layouts/head', $datos);
    $this->load->view('Mantto/details', $data);
    $this->load->view('Layouts/footer');
  }
  
}
