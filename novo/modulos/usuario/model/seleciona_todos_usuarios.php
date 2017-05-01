<?php
include "../../../_app/Config.inc.php";

$read = new Read();
$read->ExeRead('usuario');
$retUsuarios = $read->getResult();

echo json_encode(array('usuarios'=>$retUsuarios));
?>
