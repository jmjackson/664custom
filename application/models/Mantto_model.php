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
    $this->db->where('Id', $id);
    return $this->db->get('Mantto')->row();
  }

  public function UpdateMantto($id,$datos)
  {
    $this->db->where('Id', $id);
    return $this->db->update('Mantto', $datos);
  }

  public function Delete($id)
  {
    $this->db->where('Id', $id);
    return  $this->db->delete('Mantto');
  }

  public function GetLasRecord()
  {
    $this->db->select('Mantto')->ORDER_BY('Folio',"desc"->limit(1));
    $this->db->from('Mantto');
    $datos=$this->db->get()->row();

    return $datos;
  }
}
