<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Mantto extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Mantto_model','Car_model','ManttoDetails_model','Service_model'));

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
    $date=$this->input->post('DateMantto');
    //var_dump($date);


    $data = array('Folio' =>$this->input->post('Folio'),
    'Auto'=>$this->input->post('Auto'),
    'Name' =>$this->input->post('Name'),
    'Address'=>$this->input->post('Address'),
    'Email'=>$this->input->post('Email'),
    'Cellphone'=>$this->input->post('Cellphone'),
    'DateMantto'=>$date,
    'Status'=>"InProcess",

      );


    $manttoid=$this->Mantto_model->AddMantto($data);

    if ($manttoid>0) {
      $dataCar = array(
        'Plate' =>$this->input->post('Plate'),
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
      redirect(base_url().'Mantto/details/'.$manttoid);
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

    $dataMantto= array('Folio' =>$this->input->post('Folio'),
    'Auto'=>$this->input->post('Auto'),
    'Name' =>$this->input->post('Name'),
    'Address'=>$this->input->post('Address'),
    'Email'=>$this->input->post('Email'),
    'Cellphone'=>$this->input->post('Cellphone'));

    $dataCar = array('Plate' =>$this->input->post('Plate'),
    'Color'=>$this->input->post('Color'),
    'Notes'=>$this->input->post('Notes'),
    'Year'=>$this->input->post('Year'));

    $carId=$this->input->post('CarId');

    $this->Mantto_model->UpdateMantto($Id,$dataMantto);
    if ($this->Car_model->UpdateCar($carId,$dataCar)){
        redirect(base_url().'Mantto');
    }
    else{
      echo "Error en su Actualizacion de datos";
    }
  }
  public function invoice($id='')
  {
    $this->load->library('PdfGenerator');
    $mantto=$this->Mantto_model->GetManttoId($id);
    //$data = array('title' =>"Recibo" , );
    $datos = array('mantto' =>$mantto , 'MD'=>$this->ManttoDetails_model->GetServices($id));

    $html=$this->load->view('Mantto/invoice',$datos,TRUE);
    //$this->load->view('Mantto/invoice',$datos);
    //

     $file='comprobante_'.$mantto->Folio;
     $this->pdfgenerator->generate($html,$file,true,'Letter','portrait');

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
    $datos=$this->ManttoDetails_model->GetServices($id);

    if ($datos != null) {
    foreach ($datos as $d) {
      $this->ManttoDetails_model->Delete($d->Id);
    }

    }
    $this->Mantto_model->DeleteCar($id);

    if ($this->Mantto_model->DeleteMantto($id)) {
    redirect(base_url().'Mantto');
    }
    else {
      echo "Error en su Borrar los datos";
    }
  }
  public function details($id)
  {
    $datos = array('title' =>"Detalle de Recibo" , );
    $data = array('mantto' =>$this->Mantto_model->GetManttoId($id),'MD'=>$this->ManttoDetails_model->GetServices($id));
    $this->load->view('Layouts/head', $datos);
    $this->load->view('Mantto/details', $data);
    $this->load->view('Layouts/footer');

  }

  public function InvoiceDetails($id)
  {
    $datos = array('title' =>"Detalle de Recibo" , );
      $data = array('mantto' =>$this->Mantto_model->GetManttoId($id),'MD'=>$this->ManttoDetails_model->GetServices($id),
    'Abonos'=>$this->ManttoDetails_model->GetAbonosAll($id));
    $this->load->view('Layouts/head', $datos);
    $this->load->view('Mantto/InvoiceDetail',$data);
    $this->load->view('Layouts/footer');
  }

}
