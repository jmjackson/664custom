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
    $this->db->select('c.*,m.Folio, m.Name');
    $this->db->from('Car c');
    $this->db->join('Mantto m', 'c.ManttoId = m.Id', 'inner');
    return $this->db->get()->result();
  }

}
