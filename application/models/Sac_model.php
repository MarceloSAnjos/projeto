<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sac_model extends PR_Model
{
  /**
  * @author: Matheus Ladislau
  * Retorna registro de sac cadastrados no banco com id_sac referente
  *
  * @param integer id_sac refere-se ao id do registro de sac a ser consultado
  * @return array: registro de sac cadastrado com id_sac informado
  */
  public function find($id)
  {
    try {
      $data=$this->db->select('*')->from('sac')->join('produto', 'sac.id_produto=produto.id_produto')->where('sac.id_sac',$id)->get();
      if($data){
        return $data->result();
      }else{
        // echo "não existe";
        return 1;
      }
      }catch (\Exception $e){}
      }

    /**
    * @author: Rodrigo Alves
    * Este método inserção de dados
    */
    public function insert($sac)
    {
        $this->db->insert('sac', $sac);

        $this->setLog($sac['titulo']);

    }

    /**
    * @author: Rodrigo Alves
    * listar todas as ordens
    */
    public function get()
    {
        return $this->db
        ->select('sac.*, pessoa.nome')
        ->join('cliente', 'sac.id_cliente = cliente.id_cliente')
        ->join('pessoa', 'cliente.id_pessoa = pessoa.id_pessoa')
        ->get('sac')
        ->result();
    }

    /**
    * @author: Tiago Villalobos
    * Retorna um sac pelo id do mesmo
    *
    * @param: $id_sac integer
    */
    public function getById($id_sac)
    {
        return $this->db
        ->where('sac.id_sac', $id_sac)
        ->get('sac')
        ->result();
    }

    /**
    * @author: Rodrigo Alves
    * listar todas as ordens que o cliente abriu
    *
    * @param: $id_cliente integer
    */
    public function getClient($id_cliente)
    {
        return $this->db
        ->where('id_cliente', $id_cliente)
        ->get('sac')
        ->result();
    }

    /**
    * @author: Rodrigo Alves
    * Este método atualiza as informações da ordem do sac referenciado pelo id
    *
    * @param: $sac mixed
    */
    public function update($sac)
    {

        $this->db
        ->set('sac.id_produto', $sac['id_produto'])
        ->set('sac.titulo', $sac['titulo'])
        ->set('sac.descricao', $sac['descricao'])
        ->set('sac.abertura', $sac['abertura'])
        ->set('sac.fechamento', $sac['fechamento'])
        ->set('sac.encerrado', $sac['encerrado'])
        ->where('sac.id_sac', $sac['id_sac'])
        ->update('sac');

        $this->setLog($sac['titulo'], $sac['id_sac']);

    }

    /**
    * @author: Rodrigo Alves
    * Alterar estatus de um Sac
    *
    * @param: $status boolean
    * @param: $id_sac integer
    */
    public function changeStatus($status, $id_sac)
    {
        $sac = $this->db->where('sac.id_sac', $id_sac)->get('sac')->row();

        $this->db
        ->set('encerrado', $status)
        ->where('id_sac', $id_sac)
        ->update('sac');

        $this->setLog($sac->titulo, $id_sac);
    }

     /**
    *analizando o desenvolvimento do projeto, esta função de remoção se tornou inviavel para uso
    *
    
    public function remove($id_sac)
    {
        $sac = $this->db->where('sac.id_sac', $id_sac)->get('sac')->row();

        $this->db
        ->where('id_sac', $id_sac)
        ->delete('sac');

        $this->setLog($sac->titulo, $id_sac);
    }

   */
  /**
  * @author: Pedro Henrique Guimarães
  * Busca o último SAC
  *
  * @return mixed
  */
  public function getLastSac()
  {
      $this->db->select('*')
               ->from('sac as s')
               ->join('cliente as c', 's.id_cliente = c.id_cliente')
               ->join('pessoa as p', 'c.id_pessoa = p.id_pessoa');
      $query = $this->db->get();

      if ($query->num_rows() > 0)
        return $query->result()[0];
      return null;
  }
}
