<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nead extends CI_Controller {
	
	function __construct(){
	
		parent::__construct();
		
		$this->load->helper('url');
	}
	
	public function sobre(){

		$dados['conteudo'] = 'sobre';
		$dados['area'] = 'Sobre';

		$this->load->view('layout', $dados);
	}

	public function contato(){

		$dados['conteudo'] = 'contato';
		$dados['area'] = 'Contato';

		$this->load->view('layout', $dados);
	}

	public function editais(){

		$dados['conteudo'] = 'editais';
		$dados['area'] = 'Editais';

		$this->load->view('layout', $dados);
	}
}