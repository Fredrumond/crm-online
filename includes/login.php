<?php
    session_start();

    require_once"conexao.php";

    $mgs="";

    $email=DBEscape($_POST['email']);
    $senha=DBEscape($_POST['senha']);
    #$query = "SELECT codigo, tipUsu FROM usuario WHERE email ='$login' AND senha='$senha'";
    $query = "SELECT id_usu,tipo_usu,nome_usu FROM usuario WHERE email_usu ='$email' AND senha_usu='$senha'";
    // prepara uma consulta SQL com parâmetros. 
    $result = DBExecute($query); 
    $linha = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    if ($linha>0){

        if ($row[1] == 'A') {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['id_usu'] = $row[0];
            $_SESSION['tipo_usu'] = $row[1];
            $_SESSION['nome_usu'] = $row[2];            
            header("Location:../lembretes.php");

        }

        else  {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['tipUsu'] = $row[1];
            $_SESSION['codigo'] = $row[0];  
            header("Location:../lembretes.php");
        }
    }

    else {

        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        echo "<script> alert(\"Email ou senha incorretos, tente novamente!\"); window.location=\"../index.php\"; </script>";
        // 
    } 
   
?>