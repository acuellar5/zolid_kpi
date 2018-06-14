<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MethodCalculate extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('data/Dao_methodCalculate_model');
	}


	//Obtiene los metodos de calculo
	public function c_getMethodCalculate(){
		$data = $this->Dao_methodCalculate_model->m_getMethodCalculate();
		echo json_encode($data);

		// $colegio['cursos'] = 'primero';

		// foreach ($colegio as $indice => $valor) {
		// 	print_r($);
		// }	
	}
	  //trae todos los Metodos de Calculos
  	public function c_getAllmethodCalculate(){
  	$calculatemethod = $this->Dao_methodCalculate_model->m_getAllmethodCalculate();
<<<<<<< HEAD
   	echo json_encode($calculatemethod);
=======
  	echo json_encode($calculatemethod);
>>>>>>> 0d6389941e7ae5e28c9a177d8b0a301a49d5387a
  }
  
}
