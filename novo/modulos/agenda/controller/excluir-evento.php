<?php
include "../../../_app/Config.inc.php";

try {
  $deleta = new Delete();
  $deleta->ExeDelete('agenda', "WHERE id = :id", "id=".$_POST['id-evento']);

  header('Location: ../../../agenda.php');
} catch (Exception $e) {

}

?>
