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

  public function c_saveProject(){
    $data = array(
       //clave ()         y     valor ()
        'N_PROJECT_NAME' =>  $this->input->post('N_PROJECT_NAME'),
        'K_ID_CALCULATE_METHOD' => $this->input->post('K_ID_CALCULATE_METHOD'),
        'N_PROJECT_DESCRIPTION' => $this->input->post('N_PROJECT_DESCRIPTION'),
        'I_STATUS' => 1
    );

    $res = $this->Dao_project_model->insertProject($data);

    $response = ($res) ? 'ok' : 'error';
    redirect( base_url("project?msj=$response") );   
  }

  public function c_editProject(){
    $data = array(      
        'K_ID_PROJECT' =>  $this->input->post('K_ID_PROJECT'),
        'N_PROJECT_NAME' =>  $this->input->post('N_PROJECT_NAME'),
        'K_ID_CALCULATE_METHOD' => $this->input->post('K_ID_CALCULATE_METHOD'),
        'N_PROJECT_DESCRIPTION' => $this->input->post('N_PROJECT_DESCRIPTION'),
        'I_STATUS' => 1
    );

    $res = $this->Dao_project_model->m_editProject($data);


    $response = ($res) ? 'ok' : 'error';
    redirect( base_url("project?msj=$response") ); 
  }

  public function c_statusProject(){
    $status = ($this->input->post('I_STATUS') == 1) ? 0 : 1;
    $data = array(      
        'K_ID_PROJECT' =>  $this->input->post('K_ID_PROJECT'),
        'I_STATUS' =>  $status
    );

    $res = $this->Dao_project_model->m_statusProject($data);

    $response = ($res) ? 'ok' : 'error';
    redirect( base_url("project?msj=$response") ); 
  }
  
  
}
