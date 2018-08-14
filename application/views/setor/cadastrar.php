<div class="row justify-content-center align-items-center">
  <div class="col-lg-10">
    <div class="card">
      <div class="card-header">
        <strong>Cadastrar Setor</strong>
      </div>
      <div class="row" style="margin-top: 5px;">
        <div class="col-md-12">
          <?php if ($this->session->flashdata('success')) : ?>
          <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok-sign"></span> <?= $this->session->flashdata('success') ?>
          </div>
          <?php elseif ($this->session->flashdata('danger')) : ?>
          <div class="alert alert-danger">
            <span class="glyphicon glyphicon-remove-sign"></span> <?= $this->session->flashdata('danger') ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <form action="<?php echo site_url('setor/cadastrar'); ?>" method="POST" class="form-horizontal" id="form_setor" onsubmit="return checkForm(this);">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="form-group col-8">
                <label class=" form-control-label"><red>*</red>Nome do setor</label>
                <input type="text" id="nome" name="nome" value = "<?php echo isset($old_data['nome']) ? $old_data['nome'] : null;?>" placeholder="Nome do setor" class="form-control" required>
            </div>
          </div>
        </div>
        <div class="card-footer text-right">

          <a title="Cancelar Cadastro" href="<?= site_url('setor')?>" class="btn btn-danger btn-sm">
            <i class="fa fa-times"></i> Cancelar
          </a>
          <button title="Cadastrar Setor" type="submit" class="btn btn-primary btn-sm" onclick="this.disabled=true;this.form.submit();">
            <i class="fa fa-plus"></i> Cadastrar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
