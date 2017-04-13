<?php
include "../../../_app/Config.inc.php";

$read = new Read();
$read->ExeRead('agenda');
$retEventos = $read->getResult();

echo json_encode(array('eventos'=>$retEventos));
?>
