<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo_model extends CI_Model
{
  public $id_cargo;
  public $nome;
  public $descricao;
  public $id_setor;//estrangeira

  public function __construct(){
      parent::__construct();
  }
  /**
  * @author: Matheus Ladislau
  * Retorna todos registro de cargo cadastrados no banco
  * @return array: todos registro de cargo
  */
  public function get(){
      $query = $this->db->get('cargo');
      return $query->result();
  }

  /**
  * @author: Matheus Ladislau
  * Realiza registro de cargo
  *
  *@param array: Dados (id_cargo,nome,descricao,id_setor) a serem registrados
  */
  public function insert($data)
  {
    $this->db->insert('cargo',$data);
  }

  /**
  * @author: Matheus Ladislau
  * Edita o registro de cargo pelo id_cargo referente
  *
  * @param integer $id_cargo refere-se ao id do registro de cargo a ser editado
  * @return boolean: True - caso editado com sucesso, False - não editado
  */
  public function update($id_cargo,$data)
  {
    return $this->db->update("cargo",$data,array('id_cargo'=>$id_cargo));
  }

  /**
  * @author: Matheus Ladislau
  * Remove o registro de cargo pelo id_cargo referente
  *
  * @param integer: $id_cargo refere-se ao id do registro de cargo a ser deletado
  */
  public function remove($id_cargo)
  {
  	$this->db->where('id_cargo', $id_cargo);
  	$this->db->delete('cargo');
  }
}
?>
