<?php
	//include('lib/Config.php');
	ob_start();
  $titulo = 'Agenda';
  $subtitulo = '';
?>

<div id="accordion">
	<h3>First</h3>
	<div>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</div>
	<h3>Second</h3>
	<div>Phasellus mattis tincidunt nibh.</div>
	<h3>Third</h3>
	<div>Nam dui erat, auctor a, dignissim quis.</div>
</div>
<p>Date: <input type="text" id="datepicker"></p>

<?php
	$obContent = ob_get_contents();
	ob_end_clean();
	include('base.php');
?>

<script type="text/javascript">
  $( "#accordion" ).accordion();
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>
