<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mantto_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function GetMantto()
  {
    $this->db->select('Id,Folio,Name,Cellphone');
    return $this->db->get('Mantto')->result();

  }

  public function AddMantto($data)
  {
    $this->db->insert('Mantto', $data);
    return   $this->db->insert_id();
  }

  public function GetManttoId($id)
  {
    //Esta funcion llama los datos a la base de datos,
    //Contiene dos join y contiene una lista de o arreglo de datos
    //El asterisco dice que me voy a traer todos los datos.
    $this->db->select('m.*,c.Id carId, c.Plate,c.Year,c.Make,c.Model,c.Color,c.Notes');
    $this->db->from('Mantto m');
    $this->db->join('Car c', 'm.Id = c.manttoId', 'inner');
    $this->db->where('m.Id', $id);
    return $this->db->get()->row();
  }

  public function UpdateMantto($id,$datos)
  {
    $this->db->where('Id', $id);
    return $this->db->update('Mantto', $datos);
  }

  public function DeleteMantto($id)
  {
    $this->db->where('Id', $id);
    return  $this->db->delete('Mantto');
  }
  public function DeleteCar($id)
  {
    $this->db->where('ManttoId', $id);
    return  $this->db->delete('Car');
  }

  public function GetLasRecord()
  {
    $this->db->select('Mantto.*')->ORDER_BY('Id',"desc")->limit(1);
    $this->db->from('Mantto');
    $datos=$this->db->get()->row();

    return $datos;
  }
  public function Getmanttodetails()
  {
    $this->db->select('c.*,m.Folio, m.Name');
    $this->db->from('Car c');
    $this->db->join('Mantto m', 'c.ManttoId = m.Id', 'inner');
    return $this->db->get()->result();
  }

}
