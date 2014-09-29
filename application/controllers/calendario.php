<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendario extends CI_Controller {
    
    function __construct(){
    
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->model('agenda_m');
    }
    
    public function index(){

        $dados['conteudo'] = 'calendario';
        $dados['area'] = 'Calendário';

        $this->load->view('layout', $dados);
    }

    public function eventos(){

        $eventos = $this->agenda_m->eventos();
        
        foreach($eventos as $row) {
            $out[] = array(
                'id' => $row->id,
                'title' => $row->titulo,
                'class' => $row->classe,
                'url' => $row->url,
                'start' => strtotime($row->inicio) . '000',
                'end' => strtotime($row->fim) . '000' 
            );
        }

        echo json_encode(array('success' => 1, 'result' => $out));
    }
}