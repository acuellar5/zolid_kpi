<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('data/Dao_user_model');
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
        $role = ($val_user->K_ID_ROLE == 2) ? 'EN' : 'ES';
        $data = array(
          'lang' => $lang,
          'role' => $role,
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

   if ($role == 1) {
     echo "admin<br>";
     print_r($this->session->userdata('role'));
     // $this->load->view('principal_admin');
   } else if ($role == 2) {
     echo "obrero<br>";
     print_r($this->session->userdata('role'));
     // $this->load->view('principal_worker');


 // backend para informacion y enviar calificado o calificador


   }

  }
  
  
}
?>