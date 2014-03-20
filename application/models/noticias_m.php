<?php

class Noticias_m extends CI_Model{
	
function noticias_m(){
		
	parent::__construct();
	$this->load->database();
	}

function select_noticias_inicio1(){
    $this->db->order_by("criado_em", "desc");
    $this->db->select('id,titulo,criado_em');
    $query = $this->db->get('noticias_noticia',4);
    return $query->result();
    }

function select_noticias_inicio2(){
    $this->db->limit(4, 4);
    $this->db->order_by("criado_em", "desc");
    $this->db->select('id,titulo,criado_em');
    $query = $this->db->get('noticias_noticia');
    return $query->result();
    }

function select_noticias(){
    $this->db->order_by("criado_em", "desc");
    $this->db->select('id,titulo,criado_em');
    $query = $this->db->get('noticias_noticia');
    return $query->result();
    }

function select_noticia($id){
    $this->db->where('id', $id);
    $query = $this->db->get('noticias_noticia');
    return $query->row();
    }
}