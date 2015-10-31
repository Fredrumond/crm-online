<?php 

require_once"../includes/conexao.php";

#$cpf = DBEscape($_POST['cpf_cli']);
if ($cpf = DBEscape($_POST['cpf_cli']) != null) {
	$cpf = DBEscape($_POST['cpf_cli']);
	$nome = DBEscape($_POST['nom_cli']);
	$endereco = DBEscape($_POST['end_cli']);
	$bairro = DBEscape($_POST['bai_cli']);
	$cep = DBEscape($_POST['cep_cli']);
	$cidade = DBEscape($_POST['cid_cli']);
	$contato = DBEscape($_POST['cont_cli']);
	$telefone = DBEscape($_POST['tel_cli']);

	echo $cpf;
	echo $nome;

	$query = "INSERT INTO cliente(cpf_cli,cnpj_cli,nom_cli,end_cli,bai_cli,cep_cli,cid_cli,cont_cli,tel_cli) VALUES ('$cpf','0','$nome','$endereco','$bairro','$cep','$cidade','$contato','$telefone');";
	DBExecute($query);
}
else{
	$cnpj = DBEscape($_POST['cnpj_cli']);
	$nome = DBEscape($_POST['nom_cli']);
	$endereco = DBEscape($_POST['end_cli']);
	$bairro = DBEscape($_POST['bai_cli']);
	$cep = DBEscape($_POST['cep_cli']);
	$cidade = DBEscape($_POST['cid_cli']);
	$contato = DBEscape($_POST['cont_cli']);
	$telefone = DBEscape($_POST['tel_cli']);

	$query = "INSERT INTO cliente(cpf_cli,cnpj_cli,nom_cli,end_cli,bai_cli,cep_cli,cid_cli,cont_cli,tel_cli) VALUES ('0','$cnpj','$nome','$endereco','$bairro','$cep','$cidade','$contato','$telefone');";
	DBExecute($query);

}






header("Location: ../cad_cliente.php");


?>