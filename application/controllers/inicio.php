<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
	
	function __construct(){
	
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->model(array('noticias_m', 'editais_m'));
	}

	public function index(){
		$dados['conteudo'] = 'inicio';
		$dados['area'] = 'Início';
		$dados['noticias1'] = $this->noticias_m->select_noticias_inicio1();
		$dados['noticias2'] = $this->noticias_m->select_noticias_inicio2();
		$dados['editais'] = $this->editais_m->select_editais_ultimos();

		$this->load->view('layout', $dados);
	}
}