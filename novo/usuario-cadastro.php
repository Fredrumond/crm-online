<?php
	ob_start();
  $titulo = 'Cadastro Novo Usuario';
  $subtitulo = '';
?>

<div class="row">
	<div class="col-lg-12">
    <form class="" action="modulos/usuario/controller/adicionar-usuario.php" method="post">
      <div class="form-group col-md-4">
        <label for="">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" >
      </div>
      <div class="form-group col-md-2">
        <label for="">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" >
      </div>
      <div class="form-group col-md-2">
        <label for="">Sexo</label>
        <select class="form-control" id="sexo" name="sexo">
          <option value='0' >Masculino</option>
          <option value='1' >Feminino</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" >
      </div>
      <div class="form-group col-md-2">
        <label for="">Celular</label>
        <input type="text" class="form-control" id="celular" name="celular" >
      </div>
      <div class="form-group col-md-2">
        <label for="">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" >
      </div>
      <div class="form-group col-md-4">
        <label for="">Endereco</label>
        <input type="text" class="form-control" id="endereco" name="endereco" >
      </div>
      <div class="form-group col-md-2">
        <label for="">Bairro</label>
        <input type="text" class="form-control" id="bairro" name="bairro" >
      </div>
      <div class="form-group col-md-2">
        <label for="">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" >
      </div>
      <div class="form-group col-md-2">
        <label for="">Estado</label>
        <input type="text" class="form-control" id="estado" name="estado" >
      </div>
      <div class="form-group col-md-4">
        <label for="">E-mail</label>
        <input type="text" class="form-control" id="email" name="email" >
      </div>
      <div class="form-group col-md-4">
        <label for="">Senha</label>
        <input type="text" class="form-control" id="senha" name="senha" >
      </div>
      <div class="form-group col-md-4">
        <label for="">Tipo Usuario</label>
        <input type="text" class="form-control" id="tipo_usuario_id" name="tipo_usuario_id" >
      </div>
      <div class="row pull-right">
        <button type="button" class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
    </form>
	</div>
</div>

<?php
	$obContent = ob_get_contents();
	ob_end_clean();
	include('base.php');
?>
<link href="css/usuario.css" rel="stylesheet">
<script type="text/javascript" src="js/usuario.js"></script>
