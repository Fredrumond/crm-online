<?php
include "../../../_app/Config.inc.php";

$read = new Read();
$read->ExeRead('agenda', 'WHERE id = :id ', "id=".$_GET['id']);
$retEvento = $read->getResult();


echo json_encode(array('evento'=>$retEvento));
?>
