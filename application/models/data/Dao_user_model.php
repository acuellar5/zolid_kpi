<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Dao_user_model extends CI_Model{

        public function __construct(){

        }

        //
        //consulta usuario unico por username
		public function getUserByUsername($username){
			$query = $this->db->get_where('person', array('K_ID_DOCUMENT' => $username));
			if ($query->num_rows() > 0) {
				return $query->row();
			} else {
				return null;
			}
		}

		//consulta usuario unico por passwork	
		public function validatePass($pass){
			$query = $this->db->get_where('person', array('N_PASSWORD' => $pass));
			if ($query->num_rows() > 0) {
				return true;
			}else{
				return null;
			}
		}

       



    }
?>
