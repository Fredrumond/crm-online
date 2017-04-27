<?php

include "../../../_app/Config.inc.php";

//CONVERTER DATA
$dataConvertida = explode( '/', $_POST['data'] );
$dataEvento= $dataConvertida[2]."-".$dataConvertida[1]."-".$dataConvertida[0];

try {

  $titulo = $_POST['titulo'];
  $horario = $_POST['horario'];
  $data = $dataEvento;
  $descricao = $_POST['descricao'];
  $local = $_POST['local'];
  $data_cadastro = date('Y-m-d H:i:s');

  $evento = new Agenda($titulo,$horario,$data,$descricao,$local,$data_cadastro);
  $evento->adicionarEvento($evento);
  $id =  $evento->getResult();

  //VERIFICA SE TEM CONVIDADOS PARA INSERIR NA LISTA

  if (isset($_POST['lista-convidados']) && $_POST['lista-convidados'] != '') {
    $evento->adicionaConvidados($_POST['lista-convidados'],$id);
  }


} catch (Exception $e) {

}

header('Location: ../../../agenda.php');

 ?>
