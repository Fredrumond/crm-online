<?php
	//include('lib/Config.php');
	ob_start();
  $titulo = 'Agenda';
  $subtitulo = '';
?>

<div class="row">
	<div class="col-lg-12">
			<h2>Eventos</h2>
			<div class="pull-right" style="margin-top: -4rem;">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo-evento">Novo Evento</button>
				<?php include "view/agenda/modal-evento.php"; ?>
			</div>
			<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
							<thead>
									<tr>
											<th>Page</th>
											<th>Visits</th>
											<th>% New Visits</th>
											<th>Revenue</th>
									</tr>
							</thead>
							<tbody>
									<tr class="active">
											<td>/index.html</td>
											<td>1265</td>
											<td>32.3%</td>
											<td>$321.33</td>
									</tr>
							</tbody>
					</table>
			</div>
</div>

<?php
	$obContent = ob_get_contents();
	ob_end_clean();
	include('base.php');
?>
