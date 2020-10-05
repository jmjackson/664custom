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
    $this->db->select('md.Id,md.Hours,md.Rate,md.Total,s.Name,sp.Name Supplier');
    $this->db->from('ManttoDetail md');
    $this->db->join('Services s', 'md.ServiceId = s.Id', 'inner');
    $this->db->join('Suppliers sp', 's.SupplierId = sp.Id', 'inner');
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
}
