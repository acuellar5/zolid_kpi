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

  public function m_getAllmethodCalculate(){
      $query = $this->db->query("   
      SELECT K_ID_CALCULATE_METHOD,
      N_CALCULATEMETHOD_NAME,
      I_STATUS,
      I_PORCENTAGEKPISA,
      I_PORCENTAGEKPISB,
      I_PORCENTAGEKPISC,
      I_PORCENTAGEBONUSA,
      I_PORCENTAGEBONUSB,
      I_PORCENTAGEBONUSC
      FROM kpi.calculate_method
      ORDER BY  I_STATUS DESC, N_CALCULATEMETHOD_NAME;
      ");
      return $query->result();
   }
  
}


