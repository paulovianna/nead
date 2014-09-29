<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct(){
    
        parent::__construct();
        
        $this->load->helper(array('url','form'));
        $this->load->library('session');
        $this->load->model('admin_m');
    }
    
    function index(){
        
        if($this->logado()){
            $dados['area'] = 'home';
            $this->load->view('admin/home', $dados);
        }else{
            $this->load->view('admin/login');
        }
    }

    function logado(){

        if($this->session->userdata('usuario')['logado']){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function login(){

        if($this->logado()){

            $dados['area'] = 'home';
            $this->load->view('admin/home', $dados);

        }else{

            $this->load->library('encrypt');

            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

            $this->form_validation->set_rules('usuario', 'Usuário', 'trim|required|xss_clean');
            $this->form_validation->set_rules('senha', 'Senha', 'trim|required|xss_clean|callback_check_database');

            if($this->form_validation->run() == FALSE)
            {
             $this->load->view('admin/login');
            }
            else
            {
             $this->load->view('admin/home');
            }
        }
    }

    function check_database($password){

       $username = $this->input->post('username');
       $result = $this->admin_m->login($username, $password);
     
       if($result)
       {
         $sess_array = array();
         foreach($result as $row)
         {
           $sessao = array(
             'id' => $row->id,
             'usuario' => $row->usuario,
             'nome' => $row->nome,
             'logado' => TRUE
           );
           $this->session->set_userdata('usuario', $sessao);
         }
         return TRUE;
       }
       else
       {
         $this->form_validation->set_message('check_database', 'Usuário ou senha inválidos');
         return FALSE;
       }
    }

    function logout(){

        $this->session->sess_destroy();
        $this->load->view('admin/login');
    }

    function agenda(){

        if($this->logado()){

            $dados['eventos'] = $this->admin_m->eventos();
            $dados['area'] = 'agenda';
            $this->load->view('admin/agenda', $dados);
        }else{

            $this->load->view('admin/login');
        }
    }

    function form_novo_evento(){

        if($this->logado()){
            $dados['area'] = 'agenda';
            $this->load->view('admin/novo_evento', $dados);
        }else{

            $this->load->view('admin/login');
        }
    }

    function novo_evento(){

        if($this->logado()){

            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
            $this->form_validation->set_rules('titulo', 'Título', 'trim|required');
            $this->form_validation->set_rules('url', 'URL', 'trim|required|prep_url');
            $this->form_validation->set_rules('classe', 'Classe', 'required');
            $this->form_validation->set_rules('inicio', 'Início', 'required');
            $this->form_validation->set_rules('encerramento', 'Encerramento', 'required');

            if($this->form_validation->run() == FALSE){
                $dados['area'] = 'agenda';
                $this->load->view('admin/novo_evento', $dados);
            }else{

                if($this->admin_m->novo_evento($this->input->post())){
                    $dados['area'] = 'agenda';
                    $dados['sucesso'] = TRUE;
                    $dados['mensagem'] = 'Evento inserido com sucesso.';
                    $this->load->view('admin/novo_evento',$dados);
                }else{
                    $dados['area'] = 'agenda';
                    $dados['sucesso'] = FALSE;
                    $dados['mensagem'] = 'Falha ao inserir o evento, tente novamente.';
                    $this->load->view('admin/novo_evento',$dados);
                }   
            }
        }else{

            $this->load->view('admin/login');
        }
    }

    function form_editar_evento($id){

        if($this->logado()){
            $dados['area'] = 'agenda';
            $dados['evento'] = $this->admin_m->select_evento($id);
            $this->load->view('admin/editar_evento', $dados);
        }else{

            $this->load->view('admin/login');
        }
    }

    function editar_evento(){

        if($this->logado()){

            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
            $this->form_validation->set_rules('titulo', 'Título', 'trim|required');
            $this->form_validation->set_rules('url', 'URL', 'trim|required|prep_url');
            $this->form_validation->set_rules('classe', 'Classe', 'required');
            $this->form_validation->set_rules('inicio', 'Início', 'required');
            $this->form_validation->set_rules('encerramento', 'Encerramento', 'required');

            if($this->form_validation->run() == FALSE){
                $dados['area'] = 'agenda';
                $dados['evento'] = $this->admin_m->select_evento($this->input->post('id'));
                $this->load->view('admin/editar_evento', $dados);
            }else{

                if($this->admin_m->editar_evento($this->input->post())){
                    $dados['area'] = 'agenda';
                    $dados['evento'] = $this->admin_m->select_evento($this->input->post('id'));
                    $dados['sucesso'] = TRUE;
                    $dados['mensagem'] = 'Evento editado com sucesso.';
                    $this->load->view('admin/editar_evento',$dados);
                }else{
                    $dados['area'] = 'agenda';
                    $dados['evento'] = $this->admin_m->select_evento($this->input->post('id'));
                    $dados['sucesso'] = FALSE;
                    $dados['mensagem'] = 'Falha ao editar o evento, tente novamente.';
                    $this->load->view('admin/editar_evento',$dados);
                }   
            }
        }else{

            $this->load->view('admin/login');
        }
    }

    function deletar_evento($id){

        if($this->logado()){
            $dados['area'] = 'agenda';
            if($this->admin_m->deletar_evento($id)){
                $dados['area'] = 'agenda';
                $dados['eventos'] = $this->admin_m->eventos();
                $dados['sucesso'] = TRUE;
                $dados['mensagem'] = 'Evento deletado com sucesso.';
                $this->load->view('admin/agenda',$dados);
            }else{
                $dados['area'] = 'agenda';
                $dados['eventos'] = $this->admin_m->eventos();
                $dados['sucesso'] = FALSE;
                $dados['mensagem'] = 'Falha ao deletar o evento, tente novamente.';
                $this->load->view('admin/agenda',$dados);
            } 
        }else{

            $this->load->view('admin/login');
        }
    }    
}