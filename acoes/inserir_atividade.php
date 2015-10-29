<?php 

require_once"../includes/conexao.php";

$titulo = DBEscape($_POST['tit_atv']);
$data = DBEscape($_POST['dat_atv']);
$hora = DBEscape($_POST['hor_atv']);
$info = DBEscape($_POST['inf_atv']);


$query = "INSERT INTO atividade(nom_atv,data_atv,hora_atv,inf_atv) VALUES ('$titulo','$data','$hora','$info');";
DBExecute($query);


header("Location: ../atividades.php");


?>