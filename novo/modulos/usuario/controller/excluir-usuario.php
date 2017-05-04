<?php
include "../../../_app/Config.inc.php";

try {
  $deleta = new Delete();
  $deleta->ExeDelete('usuario', "WHERE id = :id", "id=".$_POST['id-usuario']);

  header('Location: ../../../usuario.php');
} catch (Exception $e) {

}

?>
