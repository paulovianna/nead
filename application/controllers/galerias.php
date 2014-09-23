<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Galerias extends CI_Controller{
	
	function __construct(){
		
		parent::__construct();
		
		$this->load->helper(array('form','url'));
		$this->load->model('galerias_m');
	}

	function index(){
		$dados['conteudo'] = 'galerias';
		$dados['area'] = 'Galerias';
		$dados['galerias'] = $this->galerias_m->select_galerias();

		$this->load->view('layout', $dados);
	}

	function galeria($id){
		
		$dados['galeria'] = $this->galerias_m->select_galeria($id);
		if ($dados['galeria'] == False){
			$dados['area'] = 'Erro 404';
			$dados['conteudo'] = '404';
			$this->load->view('layout', $dados);
		}else{
			$dados['conteudo'] = 'galeria';
			$dados['area'] = 'Galeria';
			$dados['imagens'] = $this->galerias_m->select_imagens($id);
			$this->load->view('layout', $dados);
		}
	}

	/*function form_upload(){

		$this->load->view('upload');
	}

	function upload(){

		$galeria = 1; 
		

		$config['upload_path'] = 'fotos/'.$galeria;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '10240000';
		$config['max_height']  = '768000';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			echo $this->upload->display_errors();
		}
		else
		{
			$this->load->library('image_lib'); 
					
			$data = $this->upload->data();
			$data['desc']    = $_POST['desc'];
			$data['gallery'] = $galeria; 

		    $config['image_library'] 	= 'GD2';
			$config['source_image']		= 'fotos/'. $galeria. '/' .$data['file_name'];
			$config['create_thumb'] 	= TRUE;
			$config['maintain_ratio']   = FALSE;
			$config['width']	 		= 200;
			$config['height']			= 140;
			
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();
			unset($config);

			$config['image_library'] 	= 'GD2';
			$config['source_image']		= 'fotos/'. $galeria. '/' .$data['file_name'];
			$config['create_thumb'] 	= FALSE;
			$config['maintain_ratio']   = FALSE;
			$config['quality']          = '90%';
			if($data['image_width'] >= $data['image_height']){
				$height = ($data['image_height'] * 800) / $data['image_width'];
				$width = 800;
			}else{
				$width = ($data['image_width'] * 800) / $data['image_height'];
				$height = 800;
			}
			$config['width']	 		= $width;
			$config['height']			= $height;
			
			
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			if (isset($_POST['capa'])){
				$this->galerias_m->capa($data['raw_name']."_thumb".$data['file_ext'], $galeria);
			}
			$this->galerias_m->upload($data);

			$this->load->view('upload');
		}
	}*/
}