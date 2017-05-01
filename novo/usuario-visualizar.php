<?php

	ob_start();
  $titulo = 'Dados do  Usuario';
  $subtitulo = '';


  $read = new Read();
  $read->ExeRead('usuario', 'WHERE id = :id ', "id=".$_GET['id']);
  $retEvento = $read->getResult();

  print_r($retEvento);

?>

<div class="row">
	<div class="col-lg-12">
      <div class="form-group">
        <label for="">Nome</label>
        <span></span>
      </div>
      <div class="form-group">
        <label for="">CPF</label>

      </div>
      <div class="form-group">
        <label for="">Sexo</label>

      </div>
      <div class="form-group">
        <label for="">Telefone</label>

      </div>
      <div class="form-group">
        <label for="">Celular</label>

      </div>
      <div class="form-group">
        <label for="">CEP</label>

      </div>
      <div class="form-group">
        <label for="">Endereco</label>

      </div>
      <div class="form-group">
        <label for="">Bairro</label>

      </div>
      <div class="form-group">
        <label for="">Cidade</label>

      </div>
      <div class="form-group">
        <label for="">Estado</label>

      </div>
      <div class="form-group">
        <label for="">E-mail</label>

      </div>
      <div class="form-group">
        <label for="">Senha</label>

      </div>
      <div class="form-group">
        <label for="">Tipo Usuario</label>

      </div>
      <div class="row pull-right">
        <button type="button" class="btn btn-default">Voltar</button>
      </div>
	</div>
</div>

<?php
	$obContent = ob_get_contents();
	ob_end_clean();
	include('base.php');
?>
