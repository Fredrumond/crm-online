<?php

include "../../../_app/Config.inc.php";
//print_r($_POST);

try {
  $id = $_POST['id-usuario'];
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
  $data_atualizacao = date('Y-m-d H:i:s');

  $usuario = new Usuario();
  $ArrUsuario = [
      'nome' => $nome,
      'cpf' => $cpf,
      'sexo' => $sexo,
      'email' => $email,
      'telefone' => $telefone,
      'celular' => $celular,
      'endereco' => $endereco,
      'bairro' => $bairro,
      'cidade' => $cidade,
      'estado' => $estado,
      'cep' => $cep,
      'senha' => $senha,
      'tipo_usuario_id' => $tipo_usuario_id,
      'data_atualizacao' => $data_atualizacao
  ];


  $usuario->editarUsuario($id,$ArrUsuario);

} catch (Exception $e) {

}

header('Location: ../../../usuario.php');

 ?>
