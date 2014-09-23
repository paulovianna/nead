<?php

class Galerias_m extends CI_Model{
	
function galerias_m(){
		
	parent::__construct();
	$this->load->database();
	}

function upload($data){
	
	$sql =  "insert into imagens(arquivo,extencao,id_galeria,descricao) values ('".$data['raw_name']."','".$data['file_ext']."','".$data['gallery']."','".$data['desc']."');";
	$query = $this->db->query($sql);
	return $query;
	}

function capa($capa,$galeria){
	
	$sql =  "update galerias set capa = '".$capa."' where id = ".$galeria.";";
	$query = $this->db->query($sql);
	return $query;
	}
function select_imagens($id){
	
	$sql = "select * from imagens where id_galeria = ".$id.";";
	$query = $this->db->query($sql);
	return $query->result();
	}

function select_galeria($id){
	
	$sql = "select * from galerias where id = ".$id.";";
	$query = $this->db->query($sql);
	return $query->row();
	}

function select_galerias(){
	
	$sql = "select * from galerias;";
	$query = $this->db->query($sql);
	return $query->result();
	}
}