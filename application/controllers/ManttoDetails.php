<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManttoDetails extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Service_model','Mantto_model','ManttoDetails_model',
    'ServiceAdmin_model'));
  }



  public function addDetails($id='')
  {
    $Mantto=$this->Mantto_model->GetManttoId($id);

    if ($Mantto->Status=="InProcess") {
      $datos = array(
        'services' =>$this->Service_model->GetServices() ,
        'Mantto'=>$Mantto,
        'MD'=>$this->ManttoDetails_model->GetServices($id),);
        $data = array('title' =>"Agregar Servicios" , );
        $this->load->view('Layouts/head', $data);
        $this->load->view('ManttoDetails/add',$datos);
        $this->load->view('Layouts/footer');
    }
    else{
      echo "Tienes un Error";
    }
  }

  public function AddSPrice()
  {
    $mdId=$this->input->post('MDetailId');
    $SupplierPrice=$this->input->post('SupplierPrice');
    $md=$this->ManttoDetails_model->GetMD($mdId);
    $data = array('SupplierPrice' =>$SupplierPrice , );
    if ($this->ServiceAdmin_model->UpdateCost($mdId,$data)) {
      redirect(basE_url().'ServicesAdmin/details/'.$md->ManttoId);
    }
  }

  public function addMantto()
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

  public function delete()
  {
    $manttoId=$this->input->post('ManttoId');
    $id=$this->input->post('Id');
    if ($this->ManttoDetails_model->Delete($id))
    {
      return redirect(base_url().'ManttoDetails/addDetails/'.$manttoId);
    }
  }
  public function finish($id='')
  {
      $mantto=$this->Mantto_model->GetManttoId($id);

      $datos = array(
        'Status' =>"Done" , );
        if ($this->Mantto_model->UpdateMantto($id,$datos)) {
          redirect(base_url()."Mantto/invoice/".$id);
        }
        else{
          echo "Tienes un Error";
        }

  }

}
