<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Principal_worker extends CI_Controller{
	
	function __construct(){
		parent:: __construct();
	}
	//carga la vista principal del worker
	public function v_principal_worker(){
		$this->load->view('parts/header');
		$this->load->view('principal_worker');
		$this->load->view('parts/footer');
	}
}

