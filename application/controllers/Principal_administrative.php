<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Principal_administrative extends CI_Controller{ //controlador siempre en mayuscula 
	
	function __construct(){
		parent:: __construct();
	}
	//carga la vista principal del worker
	public function v_principal_administrative(){
		$this->load->view('parts/header');
		$this->load->view('principal_administrative');
		$this->load->view('parts/footer');
	}
	
}

