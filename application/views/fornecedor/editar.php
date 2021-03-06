<div class="animated fadeIn">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-10">
            <div class="card">

                <div class="card-header">
                    <strong>Atualizar Fornecedor</strong>
                </div>

                <div class="card-body card-block">

                    <form action="<?php echo base_url('fornecedor/editar/'.$fornecedor[0]->id_fornecedor); ?>" method="POST" id="form_fornecedor" id_usuario ="<?php echo $fornecedor[0]->id_usuario; ?>">
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label class=" form-control-label">Nome</label>
                                <input type="text" id="nome" name="nome" placeholder="Nome" value="<?= htmlspecialchars($fornecedor[0]->nome)?>" class="form-control <?php echo isset($errors['nome']) ? 'is-invalid' : '' ?>" required>
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="form-group col-12 col-md-6">

                            </div>

                            <div class="form-group col-12 col-md-4">
                                <label class=" form-control-label">Razão Social</label>
                                <input type="text" id="razao_social" name="razao_social" placeholder="Razão Social" class="form-control" value="<?= htmlspecialchars($fornecedor[0]->razao_social)?>" required>
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="form-group col col-md-4">
                                <label class=" form-control-label">CNPJ</label>
                                <input type="text" id="cnpj" name="cnpj" placeholder="CNPJ" class="form-control cnpj" value="<?= htmlspecialchars($fornecedor[0]->cnpj)?>" required>
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="form-group col-12 col-md-4">
                                <label class="form-control-label">Telefone</label>
                                <input type="text" id="telefone" name="telefone" placeholder="(00)0000-0000" class="form-control telefone alter_mask" value="<?php echo htmlspecialchars($fornecedor[0]->telefone); ?>" >
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="form-group col-12 col-md-6">
                                <label class="form-control-label">Estado</label>
                                <select name="id_estado" class="form-control" id="estado">
                                    <option value="0" disabled selected>Selecione um estado</option>
                                    <?php foreach ($estados as $estado): ?>
                                        <option value="<?php echo $estado->id_estado ?>" <?php if($estado_atual[0]->id_estado == $estado->id_estado){echo "selected";} ?>><?php echo $estado->nome; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="form-group col-12 col-md-6">
                                <label class="form-control-label">Cidade</label>
                                <select name="id_cidade" class="form-control" id="cidade">
                                    <?php foreach ($cidades as $cidade): ?>
                                        <option value="<?php echo $cidade->id_cidade; ?>" <?php if($fornecedor[0]->id_cidade == $cidade->id_cidade){echo "selected";} ?>><?php echo $cidade->nome; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="form-group col-12 col-md-3">
                                <label class=" form-control-label">CEP</label>
                                <input type="text" id="cep" name="cep" placeholder="CEP" class="form-control cep"  value="<?= htmlspecialchars($fornecedor[0]->cep)?>" required>
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="form-group col-12 col-md-9">
                                <label class=" form-control-label">Logradouro</label>
                                <input type="text" id="logradouro" name="logradouro" placeholder="Logradouro" class="form-control"  value="<?= htmlspecialchars($fornecedor[0]->logradouro)?>" required>
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="form-group col-12 col-md-3">
                                <label class=" form-control-label">Número</label>
                                <input type="text" id="numero" name="numero" placeholder="" class="form-control"  value="<?= htmlspecialchars($fornecedor[0]->numero)?>" required>
                                <span class="invalid-feedback"></span>
                            </div>

                            <div class="form-group col-12 col-md-5">
                                <label class=" form-control-label">Bairro</label>
                                <input type="text" id="bairro" name="bairro" placeholder="Bairro" class="form-control"  value="<?= htmlspecialchars($fornecedor[0]->bairro)?>" required>
                                <span class="invalid-feedback"></span>
                            </div>





                            <div class="form-group col-12 col-md-4">
                                <label class=" form-control-label">Complemento</label>
                                <input type="text" id="complemento" name="complemento" placeholder="complemento" class="form-control"  value="<?= htmlspecialchars($fornecedor[0]->complemento)?>">
                            </div>

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
                <label class=" form-control-label"><red>*</red>Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Nome" value="<?= htmlspecialchars($fornecedor[0]->nome)?>" class="form-control <?php echo isset($errors['nome']) ? 'is-invalid' : '' ?>" required>
                 <span class="invalid-feedback">Nome inválido.</span>
              </div>

             <div class="form-group col-12 col-md-6">
                <label for="email-input" class=" form-control-label"><red>*</red>Email</label>
                <input type="email" id="email" name="email" placeholder="e-mail" class="form-control"  value="<?= htmlspecialchars($fornecedor[0]->email)?>" required>
              </div>

             <div class="form-group col-12 col-md-4">
                <label class=" form-control-label"><red>*</red>Razão Social</label>
                <input type="text" id="razao_social" name="razao_social" placeholder="Razão Social" class="form-control" value="<?= htmlspecialchars($fornecedor[0]->razao_social)?>" required>
              </div>

              <div class="form-group col col-md-4">
                 <label class=" form-control-label"><red>*</red>CNPJ</label>
                  <input type="text" id="cnpj" name="cnpj" placeholder="CNPJ" class="form-control cnpj" value="<?= htmlspecialchars($fornecedor[0]->cnpj)?>" required>
              </div>

             <div class="col-12 col-md-4">
                <label class=" form-control-label"><red>*</red>Telefone</label>
                <input type="text" id="telefone" name="telefone" placeholder="(12)3889-9090" class="form-control telefone" maxlength="15"  value="<?= htmlspecialchars($fornecedor[0]->telefone)?>" required>
            </div>

        <div class="form-group col-12 col-md-3">
            <label class=" form-control-label"><red>*</red>CEP</label>
            <input type="num" id="cep" name="cep" placeholder="CEP" class="form-control cep"  value="<?= htmlspecialchars($fornecedor[0]->cep)?>" required>
         </div>

          <div class="form-group col-12 col-md-4">
              <label class="form-control-label"><red>*</red>Estado</label>
              <input type="text" name="estado" class="form-control" id="estado" value="<?php echo $fornecedor[0]->estado;?>">
          </div>

           <div class="form-group col-12 col-md-5">
              <label class="form-control-label"><red>*</red>Cidade</label>
              <input type="text" name="cidade" class="form-control" id="cidade" value="<?php echo $fornecedor[0]->cidade;?>">
          </div>

        <div class="form-group col-12 col-md-9">
            <label class=" form-control-label"><red>*</red>Logradouro</label>
            <input type="text" id="logradouro" name="logradouro" placeholder="Logradouro" class="form-control"  value="<?= htmlspecialchars($fornecedor[0]->logradouro)?>" required>

         </div>

          <div class="form-group col-12 col-md-3">
            <label class=" form-control-label"><red>*</red>Número</label>
            <input type="num" id="numero" name="numero" placeholder="" class="form-control"  value="<?= htmlspecialchars($fornecedor[0]->numero)?>" required>
         </div>

         <div class="form-group col-12 col-md-5">
            <label class=" form-control-label"><red>*</red>Bairro</label>
            <input type="text" id="bairro" name="bairro" placeholder="Bairro" class="form-control"  value="<?= htmlspecialchars($fornecedor[0]->bairro)?>" required>
         </div>

                </div>
                <div class="card-footer text-right">
                    <a href="<?= base_url('fornecedor')?>" class="btn btn-danger btn-sm" title="Cancelar Edição">
                        <i class="fa fa-times"></i> Cancelar
                    </a>
                    <button title="Atualizar Cadastro" type="submit" class="btn btn-primary btn-sm">
                        <span class="fa fa-check"></span>
                        Atualizar
                    </button>

                </div>
            </form>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="modalAtualizar" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Atualizar Fornecedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Deseja realmente atualizar esse fornecedor?
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
