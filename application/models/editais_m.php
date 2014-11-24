<?php

class Editais_m extends CI_Model{
    
    function editais_m(){
            
        parent::__construct();
        $this->load->database();
    }

    function select_editais_ultimos(){

        $this->db->order_by("id", "desc");
        $query = $this->db->get('editais', 4);
        return $query->result();
    }

    function select_editais_alunos(){

        $this->db->where('categoria', 'Alunos');
        $this->db->order_by("id", "desc");
        $query = $this->db->get('editais');
        return $query->result();
    }

    function select_editais_professores(){

        $this->db->where('categoria', 'Professores');
        $this->db->order_by("id", "desc");
        $query = $this->db->get('editais');
        return $query->result();
    }

    function select_editais_tutores(){

        $this->db->where('categoria', 'Tutores');
        $this->db->order_by("id", "desc");
        $query = $this->db->get('editais');
        return $query->result();
    }
}
?>