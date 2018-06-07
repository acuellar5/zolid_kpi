<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('data/Dao_user_model');
    //Cargo el lenguale seleccionado por el usuario 
    $this->lang->load('header',$this->session->lang);

    // $this->load->model('data/Dao_user_model');
    //->load->model('data/configdb_model');
  }

  // validamos si el usuario existe
  public function loginUser(){
    $user = $this->input->post('username');
    $pass = $this->input->post('password');
    $lang = $this->input->post('language');
    $val_user = $this->Dao_user_model->getUserByUsername($user);
    if ($val_user != null) {
      $val_pass = $this->Dao_user_model->validatePass($pass);
      if ($val_pass != null) {
        $data = array(
          'lang' => $lang,
          'role' => $val_user->K_ID_ROLE,
          'id'   => $val_user->K_ID_DOCUMENT,
          'name' => $val_user->N_NAME . " " . $val_user->N_LAST_NAME          
        );

        $this->session->set_userdata($data);
        $this->principal($val_user->K_ID_ROLE);

      }else{
        $response['mensaje'] = "error";
        $this->load->view('login', $response);
      }
    } else {
      $response['mensaje'] = "error";
    $this->load->view('login', $response);
    }

  }

  // Redirige a alguna vista principal dependiendo el roll del usuario logueado
  public function principal($role){
    //Cargo el lenguale seleccionado por el usuario 
    $this->lang->load('header',$this->session->lang);

    $data['title'] = 'principal';
    $this->load->view('parts/header', $data);
    if ($role == 1) {
      $this->lang->load('principal_administrative',$this->session->lang);
      $this->load->view('principal_administrative');
    } else if ($role == 2) {



      // backend para informacion y enviar calificado o calificador


      $this->load->view('principal_worker');
    }
      $this->load->view('parts/footer');

  }

  //destruye la sesion
  public function logOut(){
    $this->session->sess_destroy();
    redirect(base_url());
  }

  //carga la vista de modulo de persona
  public function v_modulo_person(){
    $this->lang->load('header',$this->session->lang);
    $this->lang->load('modulo_person',$this->session->lang);
    $data['title'] = 'Persona';

    $data['information'] = $this->Dao_user_model->m_load_data_person();

    
    $this->load->view('parts/header', $data);
    $this->load->view('modulo_person');
    $this->load->view('parts/footer');
  }
  //insertar nuevas personas en el modulo de persona
  public function insert_new_user(){
    $data = array(
        'K_ID_DOCUMENT' => $this->input->post('K_ID_DOCUMENT'),
        'N_NAME' => $this->input->post('N_NAME'),
        'N_LAST_NAME' => $this->input->post('N_LAST_NAME'),
        'D_START_DAY' => $this->input->post('D_START_DAY'),
        'D_TIME_WORKED' => $this->input->post('D_TIME_WORKED'),
        'I_TRIAL_PERIOD' => $this->input->post('I_TRIAL_PERIOD'),
        'K_ID_POSITION' => $this->input->post('K_ID_POSITION'),
        'K_ID_PROJECT' => $this->input->post('K_ID_PROJECT'),
        'K_ID_ROLE' => 2,
      );
    $data2 = array(
      );
    $this->Dao_user_model->new_person($data);
    $this->v_modulo_person();
  }
  
}