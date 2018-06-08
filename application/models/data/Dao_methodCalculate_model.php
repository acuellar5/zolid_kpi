<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dao_methodCalculate_model extends CI_Model {

  function __construct() {

  }

  //Obtiene los metodos de calculo
  // Solo trae nombre y el id de mc
  public function m_getMethodCalculate(){
  	$query = $this->db->query("
  			SELECT 
			K_ID_CALCULATE_METHOD, N_CALCULATEMETHOD_NAME
			FROM 
			calculate_method;  		
  		");
  	return $query->result();
  }
  
}


