<?php
class Admin_m extends CI_Model{

    function admin_m(){
        
        parent::__construct();
        $this->load->database();
    }

    function login($username, $password){
      $this->db->select('id, nome, usuario,senha');
      $this->db->from('usuarios');
      $this->db->where('usuario', $username);
      $this->db->limit(1);
     
      $query = $this->db->get();
     
      if($query->num_rows() == 1){
        foreach($query->result() as $row){
          
          if($this->encrypt->decode($row->senha) == $password){
            return $query->result();
          }else{
            return FALSE;
          }
        }
      }else{
        return FALSE;
      }
    }

    function eventos(){

       $query = $this->db->get('eventos');
       return $query->result();
    }

    function novo_evento($evento){

      $data = array(
         'titulo' => $evento['titulo'],
         'url' => $evento['url'],
         'classe' => $evento['classe'],
         'inicio' => date( 'Y-m-d H:i:s', strtotime($evento['inicio'])),
         'fim' => date( 'Y-m-d H:i:s', strtotime($evento['encerramento']))
      );

      return $this->db->insert('eventos', $data); 
    }

    function select_evento($id){
      $this->db->where('id', $id);
      $query = $this->db->get('eventos');
      return $query->row();
    }

    function editar_evento($evento){

      $data = array(
         'titulo' => $evento['titulo'],
         'url' => $evento['url'],
         'classe' => $evento['classe'],
         'inicio' => date( 'Y-m-d H:i:s', strtotime($evento['inicio'])),
         'fim' => date( 'Y-m-d H:i:s', strtotime($evento['encerramento']))
      );
      $this->db->where('id', $evento['id']);
      return $this->db->update('eventos', $data);
    }

    function deletar_evento($id){

      $this->db->where('id', $id);
      return $this->db->delete('eventos');
    }

    function editais(){

      $this->db->order_by("id", "desc");
      $query = $this->db->get('editais');
      return $query->result();
    }

    function novo_edital($edital, $arquivo){

      $data = array(
         'titulo' => $edital['titulo'],
         'categoria' => $edital['perfil'],
         'arquivo' => $arquivo
      );

      return $this->db->insert('editais', $data); 
    }

    function select_edital($id){
      $this->db->where('id', $id);
      $query = $this->db->get('editais');
      return $query->row();
    }

    function editar_edital_texto($edital){

      $data = array(
         'titulo' => $edital['titulo'],
         'categoria' => $edital['perfil']
      );
      $this->db->where('id', $edital['id']);
      return $this->db->update('editais', $data); 
    }

    function editar_edital($edital, $arquivo){

      $data = array(
         'titulo' => $edital['titulo'],
         'categoria' => $edital['perfil'],
         'arquivo' => $arquivo
      );
      $this->db->where('id', $edital['id']);
      return $this->db->update('editais', $data); 
    }

    function deletar_edital($id, $arquivo){

      if(unlink(BASEPATH . '../docs/' . $arquivo)){
        $this->db->where('id', $id);
        return $this->db->delete('editais');
      }else{
        return false;
      }
    }
}