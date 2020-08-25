<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Roles_model'));
  }
  //Este es un Read de muchos roles
  public function index()
  {
    $data = array('title' =>"Roles" , );
    $datos = array('paquito' =>$this->Roles_model->GetRoles() , );

    $this->load->view('Layouts/head', $data);
    $this->load->view('Roles/index',$datos);
    $this->load->view('Layouts/footer');
  }
  //CRUD Create, Read,Update, Delete
 //este es un read
  public function details($id)
  {
    //aca recibimos valores por get
    $data = array('title' =>"Detalle de Rol" , );
    $datos = array('rol' =>$this->Roles_model->GetRoleById($id) , );
    $this->load->view('Layouts/head', $data);
    $this->load->view('Roles/details',$datos);
    $this->load->view('Layouts/footer');
  }
  //este un ccreate
  public function create()
  {
    // aca vamos a mandar vistas
    $data = array('title' =>"Crear Rol" , );
    $this->load->view('Layouts/head', $data);
    $this->load->view('Roles/create');
    $this->load->view('Layouts/footer');
  }
//create
  public function addrol()
  {
    // vamos a pasar valores por post
    $rolname=$this->input->post('RolName');

    $datos = array('RolName' =>$rolname , );
    if ($this->Roles_model->Create($datos)) {
      redirect(base_url().'Roles');
    }
    else{
      echo "Ni pedos tiene un error";
    }
  }
//update
  public function edit($id)
  {
    // recibimos valores por get
    $data = array('title' =>"Actualizar" , );
    $datos = array('rol' =>$this->Roles_model->GetRoleById($id) , );
    $this->load->view('Layouts/head', $data);
    $this->load->view('Roles/edit',$datos);
    $this->load->view('Layouts/footer');
  }
//uppdate
  public function update()
  {
    // recibe valorespor post
    $id=$this->input->post('Id');
    $rolname=$this->input->post('RolName');
    $datos = array('RolName' =>$rolname , );
    if ($this->Roles_model->Update($id,$datos)) {
      redirect(base_url().'Roles');
    }
    else{
      echo "Ni pedos tiene un error";
    }
  }
//delete
  public function delete($id)
  {
    // recibe valores por get
  }
  //delete
  public function truedelete()
  {
    //recibe valores por post
  }
}
