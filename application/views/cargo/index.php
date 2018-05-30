<div class="row">
  <div class="col">
    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success mt-4">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php endif; ?>
  </div>
</div>
<div class="animated fadeIn">
  <div class="row justify-content-center">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Cargos</strong>
        </div>
        <div class="card-body">
          <a href="<?= site_url('cargo/cadastrar')?>" class="btn btn-primary btn-sm">
            <i class="fa fa-check"></i> Cadastrar
          </a><br />
          <br />
          <table class="table table-striped table-bordered datatable">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Salário por hora</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php if(isset($cargos)): ?>
                <?php foreach($cargos as $cargo): ?>
                  <tr>
                    <td><?= $cargo->nome;?></td>
                    <td><?= $cargo->descricao;?></td>
                    <td><?= $cargo->salario;?></td>

                    <td class="text-right">
                      <a href="<?php echo base_url() ?>cargo/editar/<?php echo $cargo->id_cargo?>" class="btn btn-primary">
                        <span class="fa fa-edit"></span>
                      </a>
                      <button data-href="cargo/excluir/<?php echo $cargo->id_cargo?>" class="btn btn-danger" title="Excluir cargo" data-toggle="modal" data-target="#modalRemover">
                        <span class="fa fa-times"></span>
                      </button>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalRemover" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Excluir cargo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseja realmente excluir esse cargo?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secundary" data-dismiss="modal">
          Cancelar
        </button>
        <a href="#" class="btn btn-primary btn-remove-ok">
          Confirmar
        </a>
      </div>
    </div>
  </div>
</div>
