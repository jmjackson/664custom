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

  public function Add()
  {
    $costo=0;
    $costoproveedor=0;
    $deposito=0;
    $manttoId=$this->input->post('ManttoId');
    $service=$this->input->post('Service');
    $costo=$this->input->post('Costo');
    $deposito=$this->input->post('Deposito');
    $proveedor=$this->input->post('Proveedor');
    $costoproveedor=$this->input->post('CostoProveedor');
    $datos = array(
      'ManttoId' =>$manttoId ,
      'Services'=>$service,
      'Costo'=>$costo,
      'Deposito'=>$deposito,
      'Proveedor'=>$proveedor,
      'CostoProveedor'=>$costoproveedor,
      'Ganancia'=>$costo-$costoproveedor,
      'Pagado'=>$costo-$deposito,
    );

    if ($this->ManttoDetails_model->Add($datos)) {
      redirect(base_url().'Mantto/details/'.$manttoId);
    }
    else{
      echo "Tienes un error";
    }
  }

 public function Abono()
 {
   $manttoId=$this->input->post('ManttoId');
   $manttoDetailsId=$this->input->post('ManttoDetailId');
   $abono=$this->input->post('Abono');
   $nota=$this->input->post('Nota');

   $datos = array(
     'CostoAbono' =>$abono ,
     'Nota'=>$nota,
     'ManttoDetailId'=>$manttoDetailsId);

    $manttodetail=$this->ManttoDetails_model->GetMD($manttoDetailsId);
    $this->ManttoDetails_model->AddAbono($datos);

    $pagado=$manttodetail->Pagado;

    $data = array(
      'Pagado' =>$pagado+$abono
       , );
       if ($this->ManttoDetails_model->Update($manttoDetailsId,$data)) {
         redirect(base_url().'Mantto/details/'.$manttoId);
       }
       else{

       }

 }

  public function delete($id)
  {
    $manttoId=$this->input->post('ManttoId');

    $abonos=$this->ManttoDetails_model->GetAbonos($id);
    $mantto=$this->ManttoDetails_model->GetMD($id);
    if (isset($abonos)) {
      foreach ($abonos as $a) {
        $this->ManttoDetails_model->DeleteAbono($a->Id);
      }
    }


    if ($this->ManttoDetails_model->Delete($id))
    {
      return redirect(base_url().'Mantto/details/'.$mantto->ManttoId);
    }
  }

  public function Edit($id='')
  {
    $data = array('title' =>"Actualizar" , );

    $datos = array('MD' => $this->ManttoDetails_model->GetMD($id), );
    $this->load->view('Layouts/head.php', $data);
    $this->load->view('ManttoDetails/edit',$datos);
    $this->load->view('Layouts/footer.php');
  }

  public function Update()
  {
    $costo=0;
    $costoproveedor=0;
    $id=$this->input->post('Id');
    $manttoId=$this->input->post('ManttoId');
    $service=$this->input->post('Service');
    $costo=$this->input->post('Costo');
    $deposito=$this->input->post('Deposito');
    $proveedor=$this->input->post('Proveedor');
    $costoproveedor=$this->input->post('CostoProveedor');

    $datos = array(
      'Services' =>$service ,
      'Costo'=>$costo,
      'Deposito'=>$deposito,
      'Proveedor'=>$proveedor,
      'CostoProveedor'=>$costoproveedor,
      'Ganancia'=>$costo-$costoproveedor,
     );

     if ($this->ManttoDetails_model->update($id,$datos)) {
       return redirect(base_url().'Mantto/details/'.$manttoId);
     }
  }

}
