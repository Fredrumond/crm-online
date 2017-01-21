<?php
	//include('lib/Config.php');
	ob_start();
  $titulo = 'Lembrete';
  $subtitulo = '';
?>



<?php
	$obContent = ob_get_contents();
	ob_end_clean();
	include('base.php');
?>
