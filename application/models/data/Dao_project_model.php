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
		p.K_ID_PROJECT, p.N_PROJECT_NAME, p.N_PROJECT_RULES, p.I_STATUS, cm.N_CALCULATEMETHOD_NAME
		FROM 
		project p
		inner join calculate_method cm
		on p.K_ID_PROJECT = cm.K_ID_PROJECT
		;
  	");
  	return $query->result();
  }

}	