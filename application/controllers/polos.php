<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Polos extends CI_Controller {
	
	function __construct(){
	
		parent::__construct();
		
		$this->load->helper('url');
	}
	
	public function constantina(){

		$dados['conteudo'] = 'constantina';
		$dados['area'] = 'Constantina';

		$this->load->view('layout', $dados);
	}

	public function palmeira(){

		$dados['conteudo'] = 'palmeira';
		$dados['area'] = 'Palmeira das Missões';

		$this->load->view('layout', $dados);
	}

	public function planalto(){

		$dados['conteudo'] = 'planalto';
		$dados['area'] = 'Planalto';

		$this->load->view('layout', $dados);
	}

	public function ronda(){

		$dados['conteudo'] = 'ronda';
		$dados['area'] = 'Ronda Alta';

		$this->load->view('layout', $dados);
	}

	public function sagrada(){

		$dados['conteudo'] = 'sagrada';
		$dados['area'] = 'Sagrada Família';

		$this->load->view('layout', $dados);
	}

	public function trindade(){

		$dados['conteudo'] = 'trindade';
		$dados['area'] = 'Trindade do Sul';

		$this->load->view('layout', $dados);
	}
}