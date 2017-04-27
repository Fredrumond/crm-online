<?php

include "../../../_app/Config.inc.php";

//CONVERTER DATA
$dataConvertida = explode( '/', $_POST['data'] );
$dataEvento= $dataConvertida[2]."-".$dataConvertida[1]."-".$dataConvertida[0];

try {
  $id = $_POST['id-evento'];
  $titulo = $_POST['titulo'];
  $horario = $_POST['horario'];
  $data = $dataEvento;
  $descricao = $_POST['descricao'];
  $local = $_POST['local'];
  $data_atualizacao = date('Y-m-d H:i:s');

  $evento = new Agenda();
  $ArrEvento = [
      'titulo' => $titulo,
      'horario' => $horario,
      'data' => $data,
      'descricao' => $descricao,
      'local' => $local,
      'data_atualizacao' => $data_atualizacao
  ];
  $evento->editarEvento($id,$ArrEvento);

} catch (Exception $e) {

}

header('Location: ../../../agenda.php');

 ?>
