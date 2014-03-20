<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
	
	function __construct(){
	
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->model('noticias_m');
	}

	public function index(){
		$dados['conteudo'] = 'inicio';
		$dados['area'] = 'Início';
		$dados['noticias1'] = $this->noticias_m->select_noticias_inicio1();
		$dados['noticias2'] = $this->noticias_m->select_noticias_inicio2();

		$this->load->view('layout', $dados);
	}
}