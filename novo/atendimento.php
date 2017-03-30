<?php
	//include('lib/Config.php');
	ob_start();
  $titulo = 'Atendimento';
  $subtitulo = '';
?>

<div class="row">
	<div class="col-lg-8">
			<h2>Atendimentos</h2>
			<div class="table-responsive">
					  <?php include "view/atendimento/tabela-atendimento.php"; ?>
			</div>
    </div>
    <div class="col-lg-4">
      <h2>Nova Atividade</h2>
      <div class="nova-atividade">
        <?php include "view/atendimento/form-novo-atendimento.php"; ?>
      </div>
    </div>
</div>

<?php
	$obContent = ob_get_contents();
	ob_end_clean();
	include('base.php');
?>
