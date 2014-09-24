<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendario extends CI_Controller {
    
    function __construct(){
    
        parent::__construct();
        
        $this->load->helper('url');
    }
    
    public function index(){

        $dados['conteudo'] = 'calendario';
        $dados['area'] = 'Calendário';

        $this->load->view('layout', $dados);
    }
}