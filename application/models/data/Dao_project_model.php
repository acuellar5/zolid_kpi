<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dao_project_model extends CI_Model {

  function __construct() {
    //->load->model('data/configdb_model');
  }
  
  //
  public function getAllProjects(){
  	$query = $this->db->query("
      SELECT 
      p.K_ID_PROJECT, p.N_PROJECT_NAME, p.N_PROJECT_DESCRIPTION, p.I_STATUS, cm.K_ID_CALCULATE_METHOD, cm.N_CALCULATEMETHOD_NAME
      FROM 
      project p
      inner join calculate_method cm
      on p.K_ID_CALCULATE_METHOD = cm.K_ID_CALCULATE_METHOD
      ORDER BY  I_STATUS DESC, N_PROJECT_NAME ASC
      ;
  	");
  	return $query->result();
  }

  public function insertProject($datos){
    $this->db->insert('project', $datos);

    $error = $this->db->error();
    if ($error['message']) {
      return false;
    }else{ 
      return true;
    }
  }

  public function m_editProject($datos){
    $this->db->where('K_ID_PROJECT', $datos['K_ID_PROJECT']);
    $this->db->update('project', $datos);

    $error = $this->db->error();
    if ($error['message']) {
      return false;
    }else{ 
      return true;
    }
  }
  public function m_statusProject($datos){
    $this->db->where('K_ID_PROJECT', $datos['K_ID_PROJECT']);
    //Actualice en la tabla "Proyecto"
    $this->db->update('project', $datos);

    $error = $this->db->error();
    if ($error['message']) {
      return false;
    }else{ 
      return true;
    }
  }  
}	