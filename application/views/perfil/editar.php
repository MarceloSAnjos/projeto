<form action="<?php echo site_url('perfil/editar/'); ?>" method="POST" id="form_perfil">

   <div class="animated fadeIn">
      <div class="row justify-content-center align-items-center">
         <div class="col-lg-10">
            <div class="card">
               
               <div class="card-header">
                 <strong>Atualizar Dados</strong>
               </div>
               
               
               <div class="row" style="margin-top: 5px;">
                  <div class="col-md-12">
                     <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success">
                           <p><span class="glyphicon glyphicon-ok-sign"></span> <?= $this->session->flashdata('success') ?></p>
                        </div>
                     <?php elseif ($this->session->flashdata('danger')) : ?>
                        <div class="alert alert-danger">
                           <p><span class="glyphicon glyphicon-remove-sign"></span> <?= $this->session->flashdata('danger') ?></p>
                        </div>
                     <?php endif; ?>
                  </div>
               </div>
               
      <div class="card-body card-block">
         
      <div class="row">

              <div class="form-group col-12 col-md-6">
                <label class=" form-control-label">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Nome" value="<?= htmlspecialchars($pessoa[0]->nome)?>" class="form-control <?php echo isset($errors['nome']) ? 'is-invalid' : '' ?>" required>
                 <span class="invalid-feedback">Nome inválido.</span>
              </div>

             <div class="form-group col-12 col-md-6">
                <label for="email-input" class=" form-control-label">Email</label>
                <input type="email" id="email" name="email" placeholder="e-mail" class="form-control"  value="<?= htmlspecialchars($pessoa[0]->email)?>" required>
              </div>

            

          <div class="form-group col-12 col-md-6">
              <label class="form-control-label">Estado</label>
               <select name="id_estado" class="form-control" id="estado">
                  <option value="0" disabled selected>Selecione um estado</option>
                 <?php foreach ($estados as $estado): ?>
                   <option value="<?php echo $estado->id_estado ?>" <?php if($estado_atual[0]->id_estado == $estado->id_estado){echo "selected";} ?>><?php echo $estado->nome; ?></option>
                 <?php endforeach; ?>
               </select>
          </div>

           <div class="form-group col-12 col-md-6">
              <label class="form-control-label">Cidade</label>
              <select name="id_cidade" class="form-control" id="cidade">
                 <?php foreach ($cidades as $cidade): ?>
                   <option value="<?php echo $cidade->id_cidade; ?>" <?php if($endereco[0]->id_cidade == $cidade->id_cidade){echo "selected";} ?>><?php echo $cidade->nome; ?></option>
                 <?php endforeach; ?>
               </select>
          </div>

         <div class="form-group col-12 col-md-3">
            <label class=" form-control-label">CEP</label>
            <input type="num" id="cep" name="cep" placeholder="CEP" class="form-control cep"  value="<?= htmlspecialchars($endereco[0]->cep)?>" required>
         </div>

        <div class="form-group col-12 col-md-9">
            <label class=" form-control-label">Logradouro</label>
            <input type="text" id="logradouro" name="logradouro" placeholder="Logradour" class="form-control"  value="<?= htmlspecialchars($endereco[0]->logradouro)?>" required>
         </div>

          <div class="form-group col-12 col-md-3">
            <label class=" form-control-label">Número</label>
            <input type="num" id="numero" name="numero" placeholder="" class="form-control"  value="<?= htmlspecialchars($endereco[0]->numero)?>" required>
         </div>

         <div class="form-group col-12 col-md-5">
            <label class=" form-control-label">Bairro</label>
            <input type="text" id="bairro" name="bairro" placeholder="Bairro" class="form-control"  value="<?= htmlspecialchars($endereco[0]->bairro)?>" required>
         </div>





         <div class="form-group col-12 col-md-4">
            <label class=" form-control-label">Complemento</label>
            <input type="text" id="complemento" name="complemento" placeholder="complemento" class="form-control"  value="<?= htmlspecialchars($endereco[0]->complemento)?>" required>
         </div>







      </div>
   </div>
       <div class="card-footer text-right">
          <a href="<?= site_url('perfil')?>" class="btn btn-danger  btn-sm" title="Cancelar Edição">
               <i class="fa fa-times"></i> Cancelar
            </a>
            <button title="Atualizar Cadastro" type="button" class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#editarPerfil">
               <span class="fa fa-check"></span>
               Atualizar
           </button>

          </div>
          </div>
    
   </div>
</div>
</div>


 <div class="modal fade" id="editarPerfil" role="dialog" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">Atualizar Dados</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   Deseja Realmente Atualizar seus Dados?
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-danger" data-dismiss="modal">
                       Cancelar
                   </button>
                   <button  type="submit" class="btn btn-primary btn-edit">
                       Confirmar
                   </button>
               </div>
           </div>
       </div>
     </div>
</form>

<script type="text/javascript">
   $("#estado").change(function(){

      var id = $("#estado").val();

      $.ajax({
           type: "GET",
           url: "<?=site_url("filtrar_cidades");?>/"+id,
           contentType: "application/json; charset=utf-8",
           cache: false,
           success: function(retorno) {
             // Interpretando retorno JSON...

             var cidades = JSON.parse(retorno);

            $("#cidade").html(null);

             // Listando cada cliente encontrado na lista...
             $.each(cidades,function(i, cidade){
                 var item = "<option value='"+cidade.id_cidade+"'> "+cidade.nome+"</option>";
                 $("#cidade").append(item);
             });

           }
       });
   });
</script>
