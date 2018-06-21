<div class="row justify-content-center align-items-center">
  <div class="col-lg-10">
    <div class="card">
      <div class="card-header">
        <strong>Atualizar Setor</strong>
      </div>
      <div class="col-md-8">
        <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success">
          <span class="glyphicon glyphicon-ok-sign"></span><?= $this->session->flashdata('success');?>
        </div>
        <?php elseif ($this->session->flashdata('danger')) : ?>
        <div class="alert alert-danger">
          <span class="glyphicon glyphicon-remove-sign"></span><?= $this->session->flashdata('danger');?>
        </div>
        <?php endif;?>
      </div>
      <form action="<?php site_url('setor/editar'.$id_setor); ?>" method="POST" class="form-horizontal" id="form_setor">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="form-group col-8">
              <label class="control-label">Nome do Setor</label>
              <input type="text" id="nome" name="nome" class="form-control" value="<?= htmlspecialchars($setor[0]->nome)?>" value = "<?php echo isset($old_data['nome']) ? $old_data['nome'] : null;?>" required>
            </div>
          </div>
        </div>
        <div class="card-footer text-right">
          <a title="Cancelar Edição" href="<?= site_url('setor')?>" class="btn btn-danger btn-sm">
            <i class="fa fa-times btn-sm"></i> Cancelar
          </a>
          <button title="Atualizar Setor" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editarSetor">
            <i class="fa fa-check btn-sm"></i> Atualizar
          </button>
                </div>
                <div class="modal fade" id="editarSetor" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Atualizar Setor</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Deseja realmente atualizar esse setor?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                    Cancelar
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Confirmar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
