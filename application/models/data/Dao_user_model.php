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

		//consulta usuario unico por password	
		public function validatePass($pass){
			$query = $this->db->get_where('person', array('N_PASSWORD' => $pass));
			if ($query->num_rows() > 0) {
				return true;
			}else{
				return null;
			}
		}

		//carga los datos de la persona
		public function m_load_data_person(){
			$query = $this->db->query("
				SELECT p.K_ID_DOCUMENT AS documento, p.N_NAME AS nombre, p.N_LAST_NAME AS apellido, p.D_START_DAY AS dia_de_inicio, p.D_TIME_WORKED AS tiempo_trabajado, p.I_TRIAL_PERIOD AS tiempo_de_prueba, p.K_ID_POSITION AS cargo, pr.N_PROJECT_NAME AS proyecto, cm.N_CALCULATEMETHOD_NAME AS metodo_de_calculo
					FROM person p 
					LEFT JOIN project pr 
					ON p.K_ID_PROJECT = pr.K_ID_PROJECT
					LEFT JOIN project_kpi pk
					ON pk.K_I_ID_PROJECT_KPI = pr.K_ID_PROJECT
					LEFT JOIN calculate_method cm
					ON pr.K_ID_PROJECT = cm.K_ID_PROJECT 
					;");

			return $query->result();
		}
       



    }
?>