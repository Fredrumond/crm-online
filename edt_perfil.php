<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  
	<!-- Titulo no navegador -->
    <title>Cadastrar Cliente</title>
    
	<!--Para aceitar acentuação-->
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	
	<!-- Bootstrap -->
    <link href="libs/css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<!-- Meu Layout-->
	<link rel="stylesheet" type="text/css" href="libs/mycss/style.css"/>
	
  </head>
  <body>
		<header>
			<div id="user"><h4>Bem-vindo(a) - Usuario</h4></div>
				
				<div id="icon_conf">
					<div class="dropdown">
					  <img src="imagens/edit-icon.png" class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">				    
					    <b class="caret"></b>
					  </a>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
					    <li><a href="editarperfil.html">Editar Perfil</a><li>
						<li><a href="#">Sair</a><li>
					  </ul>
					</div>	
				</div>	
				
				<div id="logo_small"><img src="imagens/logo2.png"></div>			
		</header>
		
		<nav>
			<div class="header">	  
				<div class="nav">
					<ul>
					  <li><a href="lembretes.html">Lembretes</a></li>
					  <li><a href="atividades.html">Atividades</a></li>
					  <li><a href="atendimentos.html">Atendimento</a></li>
					  <li>
					  	<a href="#">Cadastro</a>
					  	<ul>
					  		<li><a href="cadastrarcliente.html">Cliente</a></li>
					  	</ul>
					  </li>
					  <li>
					  	<a href="#">Gestao</a>
						<ul>
							<li><a href="gestaofuncionario.html">Funcionario</a></li>
					  		<li><a href="gestaoempresa.html">Empresa</a></li>
					  	</ul>
					  </li>
					</ul>
				</div>
			</div>
		</nav>

		<div id="edit_per_txt"><h3>Editar Perfil</h3></div>
		<div id="box_edit_per">							
			<form class="form-horizontal">
					Nome					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input class="input-xxlarge" type="text" placeholder="Nome">
					<br><br>					
					Endereço					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input class="input-xxlarge" type="text"  placeholder="Endereço">
					<br><br>
					Bairro
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input class="input-large" type="text"  placeholder="Bairro">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;					
					UF
					<select>
						<option>UF</option>
						<option>MG</option>
						<option>RJ</option>
						<option>SP</option>			  
					</select>
					<br><br>										
					Cidade
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input class="input-large" type="text"  placeholder="Cidade">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					CEP
					<input class="input-large" type="text"  placeholder="CEP">					
		</div>

		<div id="edit_per_btn">
			<form>
				<button class="btn btn-primary" type="submit" >Salvar</button>
				<button class="btn btn-primary" type="submit" >Cancelar</button>			
			</form>			
		<div>		
		
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		
  </body>
</html> 