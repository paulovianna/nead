<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller {
	
	function __construct(){
	
		parent::__construct();
		
		$this->load->helper('url');
	}
	
	public function agroindustria(){

		$dados['conteudo'] = 'agroindustria';
		$dados['area'] = 'Agroindústria';

		$this->load->view('layout', $dados);
	}

	public function informatica(){

		$dados['conteudo'] = 'informatica';
		$dados['area'] = 'Informática para Internet';

		$this->load->view('layout', $dados);
	}
}