<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if (!$this->session->userdata("login")) {
     redirect(base_url());
    }
    $this->load->model(array('Supplier_model'));
  }

  public function index()
  {
    $data = array('title' =>"Proveedor" , );
    $datos = array('suppliers' =>$this->Supplier_model->GetSupplier() , );
    $this->load->view('Layouts/head', $data);
    $this->load->view('Supplier/index',$datos);
    $this->load->view('Layouts/footer');
  }

  public function add()
  {
    $name=$this->input->post('Name');
    $email=$this->input->post('Email');
    $phone=$this->input->post('Phone');
    $nota=$this->input->post('Nota');

    $data = array(
      'Name' =>$name ,
      'Email'=>$email,
      'Phone'=>$phone,
      'Nota'=>$nota);

    if ($this->Supplier_model->AddSupplier($data)) {
      redirect(base_url().'Supplier');
    }
    else{
      echo "Usted tuvo un error en su captura";
    }
  }

  public function edit($id='')
  {


    $data = array('title' =>"Actualizar Proveedor" , );
    $datos = array('supplier' =>$this->Supplier_model->GetSupplierId($id) , );
    $this->load->view('Layouts/head', $data);
    $this->load->view('Supplier/edit',$datos);
    $this->load->view('Layouts/footer');
  }
  public function Update()
  {
    $id=$this->input->post('Id');
    $name=$this->input->post('Name');
    $phone=$this->input->post('Phone');
    $email=$this->input->post('Email');
    $nota=$this->input->post('Nota');

    $datos = array(
      'Name' =>$name ,
      'Phone'=>$phone,
      'Email'=>$email,
      'Nota'=>$nota,);

    if ($this->Supplier_model->UpdateSupplier($id,$datos)) {
    redirect(base_url().'Supplier');
    }
    else {
      echo "Error en su Actualizacion de datos";
    }
  }

  public function delete($id)
  {
    $data = array('title' =>"Eliminar Proveedor" , );
    $datos = array('supplier' =>$this->Supplier_model->GetSupplierId($id) , );
    $this->load->view('Layouts/head', $data);
    $this->load->view('Supplier/delete',$datos);
    $this->load->view('Layouts/footer');
  }
  public function deletep($id)
  {
    if ($this->Supplier_model->Delete($id)) {
       redirect(base_url().'Supplier');
    }
    else{
      echo "Error al Eliminar sus datos";
    }
  }
}
