<?php
	//include('lib/Config.php');
	ob_start();
  $titulo = 'Lembrete';
  $subtitulo = '';
?>

<div class="row">
	<div class="col-lg-12">
			<h2>Lembretes</h2>
			<div class="pull-right" style="margin-top: -4rem;">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo-lembrete">Novo Lembrete</button>
				<?php include "view/lembrete/modal-lembrete.php"; ?>
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
									<tr class="success">
											<td>/about.html</td>
											<td>261</td>
											<td>33.3%</td>
											<td>$234.12</td>
									</tr>
									<tr class="warning">
											<td>/sales.html</td>
											<td>665</td>
											<td>21.3%</td>
											<td>$16.34</td>
									</tr>
									<tr class="danger">
											<td>/blog.html</td>
											<td>9516</td>
											<td>89.3%</td>
											<td>$1644.43</td>
									</tr>
									<tr>
											<td>/404.html</td>
											<td>23</td>
											<td>34.3%</td>
											<td>$23.52</td>
									</tr>
									<tr>
											<td>/services.html</td>
											<td>421</td>
											<td>60.3%</td>
											<td>$724.32</td>
									</tr>
									<tr>
											<td>/blog/post.html</td>
											<td>1233</td>
											<td>93.2%</td>
											<td>$126.34</td>
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
