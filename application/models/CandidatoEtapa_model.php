<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CandidatoEtapa_model extends CI_Model
{

  public function __construct(){
      parent::__construct();
  }

  /**
  * @author: Matheus Ladislau
  * Realiza registro de candidato_etapa
  *
  *@param array: Dados (id_setor,nome) a serem registrados
  */
  public function insert($data)
  {
    $this->db->insert('candidato_etapa',$data);
  }


  /**
  * @author: Matheus Ladislau
  * Remove o registro de candidato_etapa
  *
  * @param integer:  refere-se ao id do a ser deletado
  */
  public function remove($id_candidato,$id_vaga_etapa)
  {
    $this->db->where('id_candidato', $id_candidato);
    $this->db->where('id_vaga_etapa', $id_vaga_etapa);
    $this->db->delete('candidato_etapa');
  }


  public function selectAll()
  {
    $this->db->select('*');
    $this->db->from('candidato');
    $this->db->join('pessoa', 'pessoa.id_pessoa = candidato.id_pessoa');
    $query=$this->db->get();
    return $query;
  }

  public function selectCandidatoByIdUsuario($id_usuario)
  {
    $this->db->select('*');
    $this->db->from('candidato');
    $this->db->join('usuario', 'candidato.id_pessoa = usuario.id_pessoa');
    $query=$this->db->get();
    return $query->row();
  }
}