<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManttoDetails_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function Add($datos)
  {
    return $this->db->insert('ManttoDetail', $datos);
  }

  public function GetServices($id)
  {
    $this->db->select('md.*');
    $this->db->from('ManttoDetail md');
    $this->db->join('Mantto m', 'md.ManttoId = m.Id','inner');
    $this->db->where('md.ManttoId', $id);
    return $this->db->get()->result();
  }
  public function Delete($id)
  {
    $this->db->where('Id', $id);
    return $this->db->delete('ManttoDetail');
  }

  public function GetMD($id)
  {
    $this->db->where('Id', $id);
    return $this->db->get('ManttoDetail')->row();
  }

  public function Update($id,$datos)
  {
    $this->db->where('Id', $id);
    return $this->db->update('ManttoDetail', $datos);
  }

  public function AddAbono($datos)
  {
    return $this->db->insert('Abono', $datos);
  }

  public function GetAbonos($id)
  {
    $this->db->select('a.*');
    $this->db->from('Abono a');
    $this->db->where('a.ManttoDetailId', $id);
    return $this->db->get()->result();
  }

  public function DeleteAbono($id)
  {
    $this->db->where('Id', $id);
    return $this->db->delete('Abono');
  }
}
