<?php

include "../../_app/Config.inc.php";

//CONVERTER DATA
$dataConvertida = explode( '/', $_POST['data'] );
$dataEvento= $dataConvertida[2]."-".$dataConvertida[1]."-".$dataConvertida[0];

try {

  $titulo = $_POST['titulo'];
  $horario = $_POST['horario'];
  $data = $dataEvento;
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
