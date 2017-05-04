<?php
include "../../../_app/Config.inc.php";

$read = new Read();
$read->ExeRead('usuario', 'WHERE id = :id ', "id=".$_GET['id']);
$retUsuario = $read->getResult();


echo json_encode(array('usuario'=>$retUsuario));
?>
