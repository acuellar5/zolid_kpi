<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dao_user_person extends CI_Model {

    protected $session;

    public function __construct() {
        
    }

    // trae las personas  que se encuentre en bs
    public function get_all_person() {
        $query = $this->db->query("
            SELECT K_ID_DOCUMENT, CONCAT(p.N_NAME,' ' , p.N_LAST_NAME) AS persona,
            r.N_NAME_ROLE, p.D_START_DAY, p.I_STATUS
            FROM 
            person p
            INNER JOIN role r
            ON P.K_ID_ROLE = r.K_ID_ROLE
            ;
        ");

        return $query->result();
    }
    

}
