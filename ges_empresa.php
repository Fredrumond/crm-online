<?php $cabecalho_title = "Gestão Empresa"; require_once"includes/header.php";?>


		<div id="gestao_emp_txt"><h3>Gestao do Cadastro da Empresa</h3></div>

		<div id="gestao_emp">

		<div id="form_view">			
			<form class="form-horizontal">
					Código
					<input class="input-small" type="text"  placeholder="Código">					
					Vendedor Responsável
					<select>
						<option>Vendedor</option>
						<option>Maria</option>
						<option>Fernanda</option>
						<option>Bruna</option>			  
					</select>
					<br><br>
					CNPJ
					<input class="input-large" type="text"  placeholder="CNPJ">										
					Razão Social
					<input class="input-medium" type="text"  placeholder="Razão Social">
					Inscr. Estadual
					<input class="input-medium" type="text"  placeholder="Inscr. Estadual">
					<br><br>
					Nome
					<input class="input-xxlarge" type="text" placeholder="Nome">					
					Endereço
					<input class="input-xxlarge" type="text"  placeholder="Endereço">
					<br><br>
					Bairro
					<input class="input-large" type="text"  placeholder="Bairro">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;					
					UF
					<select>
						<option>UF</option>
						<option>MG</option>
						<option>RJ</option>
						<option>SP</option>			  
					</select>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					CEP
					<input class="input-large" type="text"  placeholder="CEP">					
					Cidade
					<input class="input-large" type="text"  placeholder="Cidade">
					<br><br>
					Contato
					<input class="input-large" type="text"  placeholder="Contato">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Setor
					<input class="input-large" type="text"  placeholder="Setor">
					Telefone
					<input class="input-large" type="text"  placeholder="Setor">
					<br><br>
					Contato
					<input class="input-large" type="text"  placeholder="Contato">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Setor
					<input class="input-large" type="text"  placeholder="Setor">
					Telefone
					<input class="input-large" type="text"  placeholder="Setor">						
		</div>

		<div id="gest_emp_btn">
			<form>
				<button class="btn btn-primary" type="submit" >Salvar</button>
				<button class="btn btn-primary" type="submit" >Cancelar</button>			
			</form>			
		<div>


		
		<?php require_once"includes/header.php";?>	
		
		
  </body>
</html> 