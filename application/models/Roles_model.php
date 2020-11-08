<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  //Hacemos un Crud
  //Este es unn read
  public function GetRoles()
  {
    //Esta funcion nos va a obtener todos los roles
    //ese result nos va a traer un arreglo
    //select*from Roles
    $this->db->select('r.*');
    $this->db->from('Roles r');
    return $this->db->get()->result();
  }

  public function GetRoleById($id='')
  {
    // code...
    $this->db->where('Id', $id);
    return $this->db->get('Roles')->row();
  }
  public function Create($datos)
  {
    return $this->db->insert('Roles', $datos);
  }
  public function Update($id, $data)
  {
    $this->db->where('Id', $id);
    return $this->db->update('Roles', $data);
  }

  public function delete($id)
  {
    // code...
  }


}
