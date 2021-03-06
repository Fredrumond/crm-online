<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  
	<!-- Titulo no navegador -->
    <title>Primeiros Passos</title>
    
	<!--Para aceitar acentuação-->
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	
	<!-- Bootstrap -->
    <link href="libs/css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<!-- Meu Layout-->
	<link rel="stylesheet" type="text/css" href="libs/mycss/style.css"/>
	
  </head>
  <body>
		<div id="cadastrando"><h3>Cadastro</h3></div>
		
		<div id="cadastrar_txt"><h5>Dados</h5></div>

		<div id="box_cadastrar">
			
			<div id="form">
				<form class="form-horizontal">
						
						<input class="input-xxlarge" type="text"  placeholder="Nome">*

						<input class="input-medium" type="text"  placeholder="CPF">*
						
						<select class="input-small">
							<option>Sexo</option>*
							<option>Masculino</option>
							<option>Feminino</option>									  
						</select><span>*</span>
						<br><br>

						<input class="input-medium" type="text"  placeholder="E-mail">*

						<input class="input-medium" type="text"  placeholder="Telefone">*

						<input class="input-medium" type="text"  placeholder="Celular">
						<br><br>

						<input class="input-xxlarge" type="text"  placeholder="Endereço">*

						<input class="input-xlarge" type="text"  placeholder="Bairro">*
						<br><br>

						<input class="input-medium" type="text"  placeholder="Cidade">*
						
						<select class="input-small">
							<option>UF</option>
							<option>Masculino</option>
							<option>Feminino</option>									  
						</select><span>*</span>
					
						<input class="input-medium" type="text"  placeholder="CEP">*
						<br><br>

						<input class="input-medium" type="password"  placeholder="Senha">*
						<input class="input-medium" type="password"  placeholder="Repetir senha">*

						

			</div>
			</div>			
		</div>

		<div id="buscando_emp_txt"><h5>Pesquisando por Empresa</h5></div>

		<div id="box_buscando_emp">
			<div id="buscando_emp_form">
				<form class="form-search">
					  <input type="text" class="input-medium search-query">
					  <button type="submit" class="btn btn-primary">Buscar</button>
				</form>
			</div>			
			<div id="info">				
				<p>Caso deseje vincular-se a uma empresa, verifique se ela já se encontra no sistema no campo de busca ao lado.</p>
			</div>
		</div>
		
		<div id="solicitando_vinc_txt"><h5>Solicitando Vinculo</h5></div>

		<div id="solicitando_vinc">	
			<form class="form-search">
				  <button type="submit" class="btn btn-primary">Solicitar</button>
				  <button type="submit" class="btn btn-primary">Cancelar</button>
			</form>				
			<div id="info">				
				<p>A sua empresa foi encontrada no sistema. Deseja solicitar vinculo?</p>		
			</div>
		</div>

		<div id="cadastrar_emp_txt"><h5>Cadastrar Empresa</h5></div>

		<div id="cadastrar_emp">
			<div id="gravar">
							<a href="home.html" class="btn btn-primary">Cadastrar</a>
							<a class="btn btn-primary">Limpar</a>
						</div>
			<div id="form">
				<form class="form-horizontal">
						
						<input class="input-xlarge" type="text"  placeholder="CNPJ">*
						
						<input class="input-xxlarge" type="text" placeholder="Nome">*
						<br><br>					
						
						<input class="input-large" type="text"  placeholder="Endereço">*
						
						<input class="input-large" type="text"  placeholder="Bairro">*

						<input class="input-small" type="text"  placeholder="Telefone">
						
						<br><br>
						<input class="input-large" type="text"  placeholder="CEP">*				
						
						<input class="input-large" type="text"  placeholder="Cidade">*					

						<select class="input-small">
							<option>UF</option>
							<option>MG</option>
							<option>RJ</option>
							<option>SP</option>			  
						</select><span>*</span>

			</div>
			</div>			
		</div>		
			
		</div>

		<script src="http://code.jquery.com/jquery-latest.js"></script>		
		<script src="js/bootstrap.min.js"></script>		
  </body>
</html> 