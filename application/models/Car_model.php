<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function GetCar()
  {
    return $this->db->get('Car')->result();

  }
  public function GetCarId($id)
  {
    $this->db->select('c.*,m.Folio,m.Name Nombre,m.DateMantto,md.Hours,md.Rate,md.Total,s.Name');
    $this->db->from('Car c');
    $this->db->join('Mantto m', 'c.ManttoId = m.Id', 'inner');
    $this->db->join('ManttoDetail md', 'm.Id = md.ManttoId', 'inner');
    $this->db->join('Services s', 'md.ServiceId = s.Id', 'inner');
    $this->db->where('c.Id', $id);
    return $this->db->get()->result();
  }

  public function Addcar($datos){
    return $this->db->insert('Car', $datos);

  }
  public function UpdateCar($id,$datos)
  {
    $this->db->where('Id', $id);
    return $this->db->update('Car', $datos);
  }
  public function GetCarbyId($id)
  {
    // code...
    $this->db->select('c.*,m.Folio,m.Name,m.DateMantto');
    $this->db->from('Car c');
    $this->db->join('Mantto m', 'c.ManttoId = m.Id', 'inner');
    $this->db->where('c.Id', $id);
    return $this->db->get()->row();
  }


}
