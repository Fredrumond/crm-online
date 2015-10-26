<?php
require_once"conexao.php";


	session_start(); 
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)) { 
        unset($_SESSION['email']); 
        unset($_SESSION['senha']); 
        session_destroy();
        header('location:../index.php'); 
    } 

   if ($_SESSION['tipo_usu'] != "A") {
    	#header('location:../../lembretes.php');
    }

    $id_usu = $_SESSION['id_usu'];
    $nome_usu = $_SESSION['nome_usu'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--Para aceitar acentuação-->
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	
	<!-- Bootstrap -->
    <link href="libs/css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<!-- Meu Layout-->
	<link rel="stylesheet" type="text/css" href="libs/mycss/style.css"/>

	<script src="libs/jquery-1.3.2.min.js" type="text/javascript"></script>	

	<script>
		$(document).ready(function(){
			$("#pes_fis").click(function(evento){
				if ($("#pes_fis").is(":checked")){
					$("#form_fis").css("display", "block");
                    $("#form_jur").css("display", "none");
				}else{
					$("#form_fis").css("display", "none");
				}
			});
		});
        
		$(document).ready(function(){
			$("#pes_jur").click(function(evento){
				if ($("#pes_jur").is(":checked")){
					$("#form_jur").css("display", "block");
                    $("#form_fis").css("display", "none");
				}else{
					$("#form_jur").css("display", "none");
				}
			});
		});

	</script>

	<title><?php print $cabecalho_title; ?></title>
</head>
<body>
	<header>
	<?php echo $nome_usu;?>				
		<div id="logo_small"><img src="imagens/logo2.png"></div>			
	</header>	
	
	<nav>
		<div class="header">	  
			<div class="nav">
				<ul>
					<li><a href="lembretes.php">Lembretes</a></li>
					<li><a href="atividades.php">Atividades</a></li>
					<li><a href="atendimentos.php">Atendimento</a></li>
					<li>
						<a href="#">Cadastro</a>
						<ul>
							<li><a href="cad_cliente.php">Cliente</a></li>
						</ul>
					</li>
					<li>
					  	<a href="#">Gestao</a>
						<ul>
							<li><a href="ges_funcionario.php">Funcionario</a></li>
					  		<li><a href="ges_empresa.php">Empresa</a></li>
					  	</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>	