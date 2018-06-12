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
					SELECT p.K_ID_DOCUMENT AS documento, p.N_NAME AS nombre,
					p.N_LAST_NAME AS apellido, p.D_START_DAY AS dia_de_inicio, p.D_END_DAY AS fecha_fin,
					p.I_TIME_WORKED AS tiempo_trabajado, p.D_TRIAL_PERIOD AS tiempo_de_prueba, 
					po.N_POSITION_NAME AS cargo, pr.N_PROJECT_NAME AS proyecto,
					cm.N_CALCULATEMETHOD_NAME AS metodo_de_calculo, r.N_NAME_ROLE AS role, p.I_STATUS AS estado,
					p.D_END_DAY AS fecha_fin
										FROM person p 
										LEFT JOIN project pr 
										ON p.K_ID_PROJECT = pr.K_ID_PROJECT
										LEFT JOIN project_kpi pk
										ON pk.K_I_ID_PROJECT_KPI = pr.K_ID_PROJECT
										LEFT JOIN calculate_method cm
										ON pr.K_ID_PROJECT = cm.K_ID_PROJECT 
					                    LEFT JOIN role r 
					                    ON p.K_ID_ROLE = r.K_ID_ROLE
					                    LEFT JOIN position po 
					                    ON p.K_ID_POSITION = po.K_ID_POSITION
										;
                     ");

			return $query->result();
		}
       
		//insertara datos en db
		public function new_person($data){
			$this->db->insert('person',$data);
		}
		//actualizar datos de el modulo person
		public function update_person($data){
			$this->db->where('K_ID_DOCUMENT', $data['K_ID_DOCUMENT']);
			$this->db->update('person', $data);
			
		

			$error = $this->db->error();
        if ($error['message']) {
          return 'error';
        }else{
        

          return 1;
        }
	}
		
}