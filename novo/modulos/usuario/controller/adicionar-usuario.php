<?php

include "../../../_app/Config.inc.php";

try {

  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $sexo = $_POST['sexo'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $celular = $_POST['celular'];
  $endereco = $_POST['endereco'];
  $bairro = $_POST['bairro'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $cep = $_POST['cep'];
  $senha = $_POST['senha'];
  $tipo_usuario_id = $_POST['tipo_usuario_id'];
  $data_cadastro = date('Y-m-d H:i:s');

  $usuario = new Usuario($nome,$cpf,$sexo,$email,$telefone,$celular,$endereco,$bairro,$cidade,$estado,$cep,$senha,$tipo_usuario_id,$data_cadastro);
  $usuario->adicionarUsuario($usuario);

} catch (Exception $e) {

}

header('Location: ../../../usuario.php');

 ?>
