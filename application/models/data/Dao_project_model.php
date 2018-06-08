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
    ;
  	");
  	return $query->result();
  }

}	