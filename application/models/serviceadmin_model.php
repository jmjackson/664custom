<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceAdmin_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function GetSerAdmin()
  {
    $this->db->select('c.*,m.Folio, m.Name, m.Id IdMantto');
    $this->db->from('Car c');
    $this->db->join('Mantto m', 'c.ManttoId = m.Id', 'inner');
    return $this->db->get()->result();
  }

  public function GetSerAdminbyId($Id)
{
  $this->db->select('m.*,md.Hours,s.Name ServiceName,sp.Name SupplierName,md.Total');
  $this->db->from('Mantto m');
  $this->db->join('ManttoDetail md', 'm.Id = md.ManttoId', 'inner');
  $this->db->join('Services s', 'md.ServiceId = s.Id', 'inner');
  $this->db->join('Suppliers sp', 's.SupplierId = sp.Id', 'inner');
  $this->db->where('m.Id', $Id);
  return $this->db->get()->result();
}

}
