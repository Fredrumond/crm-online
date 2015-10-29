<?php 
#Inserindo apenas Titulo, Data, Hora e Informação.
require_once"../includes/conexao.php";

$titulo = DBEscape($_POST['tit_lem']);
$data = DBEscape($_POST['dat_lem']);
$hora = DBEscape($_POST['hor_lem']);
$info = DBEscape($_POST['inf_lem']);

/*echo $titulo;
echo $data;
echo $hora;
echo $info;*/

$query = "INSERT INTO lembrete(nom_lem,data_lem,hora_lem,inf_lem) VALUES ('$titulo','$data','$hora','$info');";
DBExecute($query);


header("Location: ../lembretes.php");


?>