<?php
	//include('lib/Config.php');
	ob_start();
  $titulo = 'Agenda';
  $subtitulo = '';
?>

<div class="row">
	<div class="col-lg-12">
		<div class="testetabela">

		</div>
			<h2>Eventos</h2>
			<div class="pull-right" style="margin-top: -4rem;">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo-evento">Novo Evento</button>
				<?php include "modulos/agenda/view/modal-evento.php"; ?>
			</div>
			<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
							<thead>
									<tr>
											<th>Evento</th>
											<th>Data</th>
											<th>Horario</th>
											<th>Ações</th>
									</tr>
							</thead>
							<tbody class="container-teams">

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
<link href="modulos/agenda/css/agenda.css" rel="stylesheet">
<script type="text/javascript" src="modulos/agenda/js/agenda.js"></script>
