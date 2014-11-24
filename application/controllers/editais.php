<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editais extends CI_Controller {
    
    function __construct(){
    
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->model('editais_m');
    }

    public function index(){
        $dados['conteudo'] = 'editais';
        $dados['area'] = 'Editais';
        $dados['alunos'] = $this->editais_m->select_editais_alunos();
        $dados['professores'] = $this->editais_m->select_editais_professores();
        $dados['tutores'] = $this->editais_m->select_editais_tutores();

        $this->load->view('layout', $dados);
    }
}