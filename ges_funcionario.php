<?php $cabecalho_title = "Gestão Funcionario"; require_once"includes/header.php";?>
		
		<div id="txt_notpen"><h3>Notificações Pendentes</h3></div>	

		<div id="busa_not">
				<form class="form-search">
					<input type="text" class="input-large search-query" placeholder="Busca Notificações">
					<button type="submit" class="btn-primary">Busca</button>
				</form>
		</div>			
				
		<div id="table_notifi">
			<table class="table"> <!-- Inicia a tabela e coloca uma borda de espessura igual a 1-->
					
				<tr bgcolor="#00afef">
					<td>Título </td>
					<td>Cliente</td>
					<td>Data</td>
					<td></td>
				</tr>			
					
				<tr class="success"> 
					<td>Solicitação de Vinculo - Marcelo Werneck</td>
					<td> PUCMinas</td>
					<td>22/05/2014</td>
					<td><a href="cadastrarusuario.html" class="btn btn-small btn-primary  disabled">Aceitar</a>&nbsp <a href="visita.html" class="btn btn-small btn-primary  disabled">Recusar</a</td>
				<tr>
					
				<tr class="error"> 
					<td> Convite de Atividade - Eduardo Melo</td>
					<td> Coca Cola</td>
					<td>23/05/2014</td>
					<td><a href="cadastrarusuario.html" class="btn btn-small btn-primary  disabled">Aceitar</a>&nbsp <a href="visita.html" class="btn btn-small btn-primary  disabled">Recusar</a></td>
				<tr>
			</table>
		</div>

		<div id="view_func">
			
			<div id="form">
				<form class="form-horizontal">
						
						<input class="input-xlarge" type="text"  placeholder="Nome">

						<input class="input-medium" type="text"  placeholder="CPF">
						<br><br>

						<input class="input-xlarge" type="text"  placeholder="Endereço">

						<input class="input-medium" type="text"  placeholder="Bairro">					

						<input class="input-medium" type="text"  placeholder="Cidade">

						<select class="input-small">
							<option>Estado</option>
							<option>Masculino</option>
							<option>Feminino</option>									  
						</select>

						<input class="input-medium" type="text"  placeholder="CEP">		
						<br><br>

						<input class="input-medium" type="text"  placeholder="E-mail">

						<input class="input-medium" type="text"  placeholder="Telefone">

						<input class="input-medium" type="text"  placeholder="Celular">				
			</div>

			<div id="table_acesso">
				<table class="table"> <!-- Inicia a tabela e coloca uma borda de espessura igual a 1-->
						
					<tr bgcolor="#00afef">
						<td>Nivel de Acesso</td>
					</tr>			
						
					<tr> 
						<td><input type="radio">&nbsp;&nbsp;Administrador</td>					
					<tr>
					<tr> 
						<td><input type="radio">&nbsp;&nbsp;Funcionario</td>					
					<tr>				
				</table>
			</div>

			<div id="table_cargo">
				<table class="table"> <!-- Inicia a tabela e coloca uma borda de espessura igual a 1-->
						
					<tr bgcolor="#00afef">
						<td>Cargo</td>
					</tr>			
						
					<tr> 
						<td><input type="radio">&nbsp;&nbsp;Vendas</td>					
					<tr>
					<tr> 
						<td><input type="radio">&nbsp;&nbsp;Marketing</td>					
					<tr>

					<tr> 
						<td><input type="radio">&nbsp;&nbsp;Gerência</td>					
					<tr>				
				</table>
			</div>

			<div id="table_cli_vin">
				<table class="table"> <!-- Inicia a tabela e coloca uma borda de espessura igual a 1-->
						
					<tr bgcolor="#00afef">
						<td>Clientes Vinculados</td>
					</tr>			
						
					<tr> 
						<td><input type="checkbox">&nbsp;&nbsp;Gerdau</td>					
					<tr>
					<tr> 
						<td><input type="checkbox">&nbsp;&nbsp;Vallourec</td>					
					<tr>
					<tr> 
						<td><input type="checkbox">&nbsp;&nbsp;Accelor</td>					
					<tr>				
				</table>
		    </div>	
		</div>

		<div id="ges_fun_btn">
			<form>
				<button class="btn btn-primary" type="submit" >Salvar</button>
				<button class="btn btn-primary" type="submit" >Cancelar</button>			
			</form>			
		<div>

		<?php require_once"includes/header.php";?>	
		
		
  </body>
</html> 