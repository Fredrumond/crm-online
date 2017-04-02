<?php

include "../../_app/Config.inc.php";

try {

  $titulo = $_POST['titulo'];
  $horario = $_POST['horario'];
  $data = $_POST['data'];
  $descricao = $_POST['descricao'];
  $data_cadastro = date('Y-m-d H:i:s');

  // $titulo = 'teste';
  // $horario = 'teste';
  // $data = 'teste';
  // $descricao = 'teste';
  // $data_cadastro = date('Y-m-d H:i:s');

  $evento = new Agenda($titulo,$horario,$data,$descricao,$data_cadastro);
  $evento->adicionarEvento($evento);


} catch (Exception $e) {

}

header('Location: ../../agenda.php'); 




 ?>
