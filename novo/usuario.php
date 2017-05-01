<?php
	//include('lib/Config.php');
	ob_start();
  $titulo = 'Usuarios';
  $subtitulo = '';
?>

<div class="row">
	<div class="col-lg-12">
			<h2>Usuarios do Sistema</h2>
			<div class="pull-right" style="margin-top: -4rem;">
        <a href="usuario-cadastro.php" class="btn btn-success">Novo Usuario</a>
				<!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo-evento">Novo Usuario</button> -->
				<?php include "modulos/agenda/view/modal-evento.php"; ?>
			</div>
			<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
							<thead>
									<tr>
											<th>Nome</th>
											<th>Email</th>
											<th>Telefone</th>
											<th>Ações</th>
									</tr>
							</thead>
							<tbody class="container-usuarios">

							</tbody>
					</table>
					<?php include "modulos/agenda/view/modal-visualizar-evento.php"; ?>
					<?php include "modulos/agenda/view/modal-editar-evento.php"; ?>
					<?php include "modulos/agenda/view/modal-excluir-evento.php"; ?>
			</div>
</div>

<?php
	$obContent = ob_get_contents();
	ob_end_clean();
	include('base.php');
?>
<link href="modulos/usuario/css/usuario.css" rel="stylesheet">
<script type="text/javascript" src="modulos/usuario/js/usuario.js"></script>
