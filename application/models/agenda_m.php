<?php
class Agenda_m extends CI_Model{

    function agenda_m(){
        
        parent::__construct();
        $this->load->database();
    }

    function eventos(){

        $query = $this->db->get('eventos');
        return $query->result();
    }
}