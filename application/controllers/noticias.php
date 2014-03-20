<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Noticias extends CI_Controller{
	
	function __construct(){
		
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->model('noticias_m');
	}

	function index(){
		$dados['conteudo'] = 'noticias';
		$dados['area'] = 'Notícias';
		$dados['noticias'] = $this->noticias_m->select_noticias();

		$this->load->view('layout', $dados);
	}

	function noticia($id){
		$dados['conteudo'] = 'noticia';
		$dados['area'] = 'Notícia';
		$dados['noticia'] = $this->noticias_m->select_noticia($id);
		$this->load->view('layout', $dados);
	}
}