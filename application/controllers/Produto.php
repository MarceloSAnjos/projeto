<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*Produto_controller tera controle sobre as rotas em:
 * http://localhost/projeto/produto
 */

class Produto extends CI_Controller
{
    /**
      *@author: Dhiego Balthazar
      * Esse método tem a finalidade de retornar uma lista com todos os produtos
      * cadastrados
      *
      * @return array - carrega lista produtos para view
      */
    // Rota: http://localhost/projeto/produto
    public function index()
    {
      $dados['title'] = 'Produtos';
      $dados['produtos'] = $this->produto->get();
      loadTemplate('includes/header', 'produto/index', 'includes/footer', $dados);
    }

    /**
     * @author: Dhiego Balthazar
     * Esse método tem a finalidade de cadastrar um produto, cujo os dados são recebidos de um formularios da view insert.php
     * 
     * Rota: http://localhost/projeto/produto/salvar
     */

    public function save()
    {      

      if($this->form_validation->run('produto')){
        $array = array(
         'nome' => $this->input->post('nome'),
         'codigo' => $this->input->post('codigo'),
         'fabricacao' => date('Y-m-d',strtotime(str_replace('/','-',$this->input->post('fabricacao')))),
         'validade' => date('Y-m-d', strtotime(str_replace('/','-',$this->input->post('validade')))),
         'lote' => $this->input->post('lote'),
         'recebimento' => date('Y-m-d',strtotime(str_replace('/','-',$this->input->post('recebimento')))),
       );
        $this->produto->insert($array);
        $this->session->set_flashdata('success','Cadastrado com sucesso');
        redirect('produto/index');
      }else{
        $this->session->set_flashdata('danger','Não foi possível cadastrar o produto');
        redirect('produto/cadastrar');
      }

      $dados['title'] = 'Cadastrar produto';
      loadTemplate('includes/header', 'produto/cadastrar', 'includes/footer', $dados);
    }

    
     /**
     * @author: Dhiego Balthazar
     * Esse método tem a finalidade de alterar um produto
     * 
     * Rota: http://localhost/projeto/produto/alterar
     */
     public function update(){        

      if($this->form_validation->run('produto')){
        $array = array(
         'nome' => $this->input->post('nome'),
         'codigo' => $this->input->post('codigo'),
         'fabricacao' => date('Y-m-d',strtotime(str_replace('/','-',$this->input->post('fabricacao')))),
         'validade' => date('Y-m-d', strtotime(str_replace('/','-',$this->input->post('validade')))),
         'lote' => $this->input->post('lote'),
         'recebimento' => date('Y-m-d',strtotime(str_replace('/','-',$this->input->post('recebimento')))),
       );
        $this->produto->update($array);
        $this->session->set_flashdata('success','Alterado com sucesso.');
        redirect('produto/index');
      }else{
        $this->session->set_flashdata('danger','Não foi possível Alterar o produto.');
        redirect('produto/editar');
      }

      $dados['title'] = 'Alterar produto';
      loadTemplate('includes/header', 'produto/editar', 'includes/footer', $dados);
    }

    /**
     * @author: Dhiego Balthazar
     * Esse método tem a finalidade de deletar um elemento pelo $id. ID é recebido através de um formulario da view delete.php
     * 
     * Rota: http://localhost/projeto/produto/deletar
     */
    public function delete($id){
      $produto = $this->produto->findById($id);
      if($produto){
        $this->produto->delete($id);
        $this->session->set_flashdata('sucsses', 'Deletado com sucesso.<br>Id: ' . $id);
      }else{
        $this->session->set_flashdata('danger', 'Impossível Deletar!<br>Id: ' . $id);
      }
      redirect('produto/index');
    }
}
