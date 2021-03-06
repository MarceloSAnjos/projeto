<div class="row justify-content-center align-items-center">
   <div class="col-lg-10">
  <div class="card">
  <div class="card-header">
          <strong class="card-title">Cadastrar Fornecedor</strong>
        </div>
     <form action="<?php echo site_url('fornecedor/cadastrar'); ?>" method="POST" id="form_fornecedor" novalidate="novalidate">

    <div class="card-body card-block">

        <div class="row">

          <!--NOME-->
          <div class="form-group col-12 col-md-6">
            <label class=" form-control-label"><red>*</red>Nome</label>
                <input type="text" id="nome" name="nome" value="<?php echo isset($old_data['nome']) ? $old_data['nome'] : null;?>" placeholder="Nome completo da empresa" class="form-control <?php echo isset($errors['nome']) ? 'is-invalid' : '' ?>"required>
                <span class="invalid-feedback">
	                <?php echo isset($errors['nome']) ? $errors['nome'] : '' ; ?>
	              </span>
          </div>

          <!--EMAIL-->
          <div class="form-group col-12 col-md-6">
             <label for="email-input" class=" form-control-label"><red>*</red>E-mail</label>
             <input type="text" id="email" name="email" placeholder="email@provedor.com" value="<?php echo isset($old_data['email']) ? $old_data['email'] : null;?>" class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : '' ?>" required>
                <span class="invalid-feedback">
	                <?php echo isset($errors['email']) ? $errors['email'] : '' ; ?>
	              </span>
          </div>

          <div class="form-group col-12 col-md-6">
            <label class="form-control-label"><red>*</red>Senha</label>
            <input id="senha" value="<?php echo isset($old_data['senha']) ? $old_data['senha'] : null;?>" name="senha" type="password" placeholder="Digite sua senha" class="form-control <?php echo isset($errors['senha']) ? 'is-invalid' : '' ?>" required>
          </div>

          <div class="form-group col-12 col-md-6">
            <label class="form-control-label"><red>*</red>Confirmar Senha</label>
            <input id="senha2" value="<?php echo isset($old_data['senha2']) ? $old_data['senha2'] : null;?>" name="senha2" type="password" placeholder="Digite novamente a senha" class="form-control <?php echo isset($errors['senha2']) ? 'is-invalid' : '' ?>" required>
          </div>

          <div class="form-group col-12 col-md-4">
             <label class=" form-control-label"><red>*</red>Razão Social</label>
             <input type="text" id="razao_social" name="razao_social" placeholder="Nome registrado da empresa" value="<?php echo isset($old_data['razao_social']) ? $old_data['razao_social'] : null;?>" class="form-control <?php echo isset($errors['razao_social']) ? 'is-invalid' : '' ?>" required>
                <span class="invalid-feedback">
	                <?php echo isset($errors['razao_social']) ? $errors['razao_social'] : '' ; ?>
	              </span>
          </div>

           <div class="form-group col col-md-4">
              <label class=" form-control-label"><red>*</red>CNPJ</label>
               <input type="text" id="cnpj" name="cnpj" placeholder="00.000.000/0000-00" maxlength="18" value="<?php echo isset($old_data['cnpj']) ? $old_data['cnpj'] : null;?>" class="form-control cnpj <?php echo isset($errors['cnpj']) ? 'is-invalid' : '' ?>" required>
                <span class="invalid-feedback">
	                <?php echo isset($errors['cnpj']) ? $errors['cnpj'] : '' ; ?>
	              </span>
          </div>

          <div class="form-group col-12 col-md-4">
             <label class=" form-control-label"><red>*</red>Telefone</label>
             <input type="text" id="telefone" name="telefone" placeholder="(00)0000-0000" maxlength="15" value="<?php echo isset($old_data['telefone']) ? $old_data['telefone'] : null;?>" class="form-control telefone alter_mask <?php echo isset($errors['telefone']) ? 'is-invalid' : '' ?>" required>
                <span class="invalid-feedback">
	                <?php echo isset($errors['telefone']) ? $errors['telefone'] : '' ; ?>
	              </span>
          </div>


      <div class="form-group col-12 col-md-6">
          <label class="form-control-label"><red>*</red>Estado</label>
           <select name="id_estado" class="form-control <?php echo isset($errors['id_estado']) ? 'is-invalid' : '' ?>" id="estado">
              <option value="" disabled selected>Selecione o estado</option>
             <?php foreach ($estados as $estado): ?>
               <option value="<?php echo $estado->id_estado ?>"><?php echo $estado->nome; ?></option>
             <?php endforeach; ?>
           </select>
           <span class="invalid-feedback">
               <?php echo isset($errors['id_estado']) ? $errors['id_estado'] : '' ; ?>
           </span>
      </div>

       <div class="form-group col-12 col-md-6">
          <label class="form-control-label"><red>*</red>Cidade</label>
          <select name="id_cidade" class="form-control <?php echo isset($errors['id_cidade']) ? 'is-invalid' : '' ?>" id="cidade">
             <option value="">Selecione a cidade</option>
          </select>
          <span class="invalid-feedback">
               <?php echo isset($errors['id_cidade']) ? $errors['id_cidade'] : '' ; ?>
          </span>
      </div>

      <div class="form-group col-12 col-md-3">
         <label class=" form-control-label"><red>*</red>CEP</label>
         <input type="text" id="cep" name="cep" placeholder="00000-000" maxlength="9" value="<?php echo isset($old_data['cep']) ? $old_data['cep'] : null;?>" class="form-control cep <?php echo isset($errors['cep']) ? 'is-invalid' : '' ?>" required>
                <span class="invalid-feedback">
                  <?php echo isset($errors['cep']) ? $errors['cep'] : '' ; ?>
                </span>
          </div>
      <div class="form-group col-12 col-md-4">
          <label class="form-control-label"><red>*</red>Estado</label>
          <input type="text" name="estado" class="form-control" id="estado">
      </div>

       <div class="form-group col-12 col-md-5">
          <label class="form-control-label"><red>*</red>Cidade</label>
          <input type="text" name="cidade" class="form-control" id="cidade">
      </div>

      <div class="form-group col-12 col-md-9">
         <label class=" form-control-label"><red>*</red>Logradouro</label>
         <input type="text" id="logradouro" name="logradouro" placeholder="Nome da rua/av./praça/alameda" value="<?php echo isset($old_data['logradouro']) ? $old_data['logradouro'] : null;?>" class="form-control <?php echo isset($errors['logradouro']) ? 'is-invalid' : '' ?>" required>
                <span class="invalid-feedback">
	                <?php echo isset($errors['logradouro']) ? $errors['logradouro'] : '' ; ?>
	              </span>
          </div>


      <div class="form-group col-12 col-md-3">
         <label class=" form-control-label"><red>*</red>Número</label>
         <input type="text" id="numero" name="numero" placeholder="Número da residência" value="<?php echo isset($old_data['numero']) ? $old_data['numero'] : null;?>" class="form-control <?php echo isset($errors['numero']) ? 'is-invalid' : '' ?>" required>
                <span class="invalid-feedback">
	                <?php echo isset($errors['numero']) ? $errors['numero'] : '' ; ?>
	              </span>
          </div>

      <div class="form-group col-12 col-md-5">
         <label class=" form-control-label"><red>*</red>Bairro</label>
         <input type="text" id="bairro" name="bairro" placeholder="Bairro" value="<?php echo isset($old_data['bairro']) ? $old_data['bairro'] : null;?>" class="form-control <?php echo isset($errors['bairro']) ? 'is-invalid' : '' ?>" required>
                <span class="invalid-feedback">
	                <?php echo isset($errors['bairro']) ? $errors['bairro'] : '' ; ?>
	              </span>
          </div>

      <div class="form-group col-12 col-md-4">
         <label class=" form-control-label">Complemento</label>
         <input type="text" id="complemento" name="complemento" placeholder="complemento" class="form-control">
      </div>

   </div>


    </div>
     <div class="card-footer text-right">
        <a title="Cancelar Cadastro" href="<?=site_url('fornecedor')?>" class="btn btn-danger btn-sm">
            <i class="fa fa-times"></i> Cancelar
          </a>
          <button title="Cadastrar Fornecedor" type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Cadastrar
          </button>

        </div>
       </form>
  </div>
</div>
</div>
