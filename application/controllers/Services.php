<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More

    $this->load->model(array('Service_model','Supplier_model'));
  }

  public function index()
  {

    $datos = array('title' => "Servicios", );
    $data = array('services' =>$this->Service_model->GetServices() ,
  'suppliers'=>$this->Supplier_model->GetSupplier(), );
    $this->load->view('Layouts/head', $datos);
    $this->load->view('Services/index',$data);
    $this->load->view('Layouts/footer');
  }

  public function create()
  {
    $name=$this->input->post('Name');
    $supplierid=$this->input->post('SupplierId');
    $description=$this->input->post('Description');

    $data = array('Name' =>$name ,
    'SupplierId'=>$supplierid,
    'Description'=>$description);
    if ($this->Service_model->AddServices($data)) {
      redirect(base_url().'Services');
    }
    else {
      echo "Hubo un error";
    }
  }

  public function edit($id='')
  {
    $datos = array('title' => "Actualizar Servicios", );
    $data = array('service' =>$this->Service_model->GetServicebyId($id) ,
  'suppliers'=>$this->Supplier_model->GetSupplier(), );
    $this->load->view('Layouts/head', $datos);
    $this->load->view('Services/edit',$data);
    $this->load->view('Layouts/footer');
  }

  public function update()
  {
      $id=$this->input->post('Id');
      $name=$this->input->post('Name');
      $supplierid=$this->input->post('SupplierId');
      $description=$this->input->post('Description');
      $datos = array(
        'Name' =>$name ,
        'SupplierId'=>$supplierid,
        'Description'=>$description);

        if ($this->Service_model->UpdateServices($id,$datos)) {
          redirect(base_url().'Services');
        }
        else{
          echo "No Actualizado";
        }
  }

  public function delete($id='')
  {
    $datos = array('title' => "Eliminar Servicio", );
    $data = array('service' =>$this->Service_model->GetServicebyId($id) , );
    $this->load->view('Layouts/head', $datos);
    $this->load->view('Services/delete',$data);
    $this->load->view('Layouts/footer');
  }
  public function deletep($id='')
  {
    if ($this->Service_model->Delete($id)) {
       redirect(base_url().'Services');
    }
    else{
      echo "Error al Eliminar sus datos";
    }
  }

}
