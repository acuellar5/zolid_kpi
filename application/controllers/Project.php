<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('data/Dao_project_model');
    $this->lang->load('header',$this->session->lang);
  }


  //
  public function index(){

  	$data['title'] = 'proyecto';
  	$this->load->view('parts/header', $data);
  	$this->load->view('v_project');
  	$this->load->view('parts/footer');
  }

  //trae todos los proyectos
  public function getListProject(){
  	$proyectos = $this->Dao_project_model->getAllProjects();
  	echo json_encode($proyectos);
  }
  
  
}
