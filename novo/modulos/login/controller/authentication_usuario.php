<?php
/**
 * Autenticação de Usuário
 */
include "../../../_app/Config.inc.php";

try {

    // Verifica dados de login
    if (isset($_POST['usuario']) && isset($_POST['senha'])){

       // Realiza a autenticação
       $read = new Read();
       $read->fullRead("SELECT * FROM usuario WHERE senha = :senha AND email = :email","email={$_POST['usuario']}&senha={$_POST['senha']}");
       $retConf = $read->getResult();
       var_dump($retConf = $read->getResult());
       //$res = Doctrine_Core::getTable('Cliente')->findOneByEmailAndSenha($_POST['usuario'],$_POST['senha']);

       // Verifica se o grupo está ativo autenticação
       if ($retConf){

                       // Seta seção
                       $_SESSION['sess_cliente_id'] = $retConf[0]['id'];

                       $nome = explode(' ', $retConf[0]['nome']);
                       $_SESSION['sess_cliente_nome'] = $nome[0];

                       // Seta seções de retorno
                       $_SESSION['site_return_type']          = false;
                       $_SESSION['site_return_message']       = false;

                       // Encaminhamento para a página principal
                        header('Location: ../../../agenda.php');


       } else {

           // Tratamento de retorno
           $_SESSION['site_return_type']                               = 'error';
           $_SESSION['site_return_message']       = 'Acesso negado!';
           header('Location: '.URL.'?erro=1');

       }

    } else {
         // print_r($_POST);
         // Tratamento de retorno
         $_SESSION['site_return_type']                               = 'error';
         $_SESSION['site_return_message']       = 'Acesso negado!';
         header('Location: '.URL.'?erro=2');

    }

} catch (Exception $e){
      echo $e;
      // Tratamento de retorno
      $_SESSION['site_return_type']                               = 'warning';
      $_SESSION['site_return_message']       = 'Ocorreu um erro, tente novamente!';
      // echo $e;
      header('Location: '.URL.'?erro=2');

}
