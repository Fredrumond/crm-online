<?php $cabecalho_title = "Atendimento"; require_once"includes/header.php";?>

		
		<div id="table_atendimento">
			<table class="table"> <!-- Inicia a tabela e coloca uma borda de espessura igual a 1-->
					
				<tr bgcolor="#00afef">					
					<td>Razão do Contato </td>
					<td>Cliente</td>
					<td>Data</td>
					<td>Hora</td>
					<td>Status</td>
					<td></td>
					<td></td>
				</tr>			
					
				<tr class="success"> 
					<td><input type="checkbox">&nbsp;&nbsp;Reunião com Marcos</td>
					<td> PUCMinas</td>
					<td>22/05/2014</td>
					<td>09:00</td>
					<td>Em andamento</td>
					<td><button class="btn btn-small btn-primary" type="submit" >Editar</button></td>
					<td><button class="btn btn-small btn-primary" type="submit" >Excluir</button></td>
				<tr>
					
				<tr class="error"> 
					<td><input type="checkbox">&nbsp;&nbsp;Visita</td>
					<td> Coca Cola</td>
					<td>23/05/2014</td>
					<td>15:45</td>
					<td>Em espera</td>
					<td><button class="btn btn-small btn-primary" type="submit" >Editar</button></td>
					<td><button class="btn btn-small btn-primary" type="submit" >Excluir</button></td>
				<tr>
					
				<tr> 
					<td><input type="checkbox">&nbsp;&nbsp;Ligar para Glivia</a></td>
					<td>PUCMinas</td>
					<td>30/05/2014</td>
					<td>16:00</td>
					<td>Cancelado</td>
					<td><button class="btn btn-small btn-primary" type="submit" >Editar</button></td>
					<td><button class="btn btn-small btn-primary" type="submit" >Excluir</button></td>
				<tr>
					
			</table>
			</div>
			
			<div id="busca_atendimento">
				<form class="form-search">
					<input type="text" class="input-large search-query" placeholder="Buscar por atendimento">
					<button type="submit" class="btn-primary">Buscar</button>
				</form>
			</div>

		<div id="txt_atendimento"><h3>Lista de Atendimentos</h3></div>
		</div>		
		
		<div id="txt_new_ativi"><h3></h3></div>

		<div id="add_atendimento">
			<h3>Novo Atendimento</h3>
			
			<div id="formulario">
				<form class="form-inline">					
					<select>
					  <option>Clientes</option>
					  <option>Cliente 1</option>
					  <option>Cliente 2</option>
					  <option>Cliente 3</option>			  
					</select><span>*</span>
					<br><br>					
					<input class="input-large" type="text"  placeholder="Data"><span>*</span>
					<br><br>
					<input class="input-large" type="text"  placeholder="Hora"><span>*</span>
					<br><br>
					<select>
					  <option>Status Atendimento</option>
					  <option>Em andamento</option>
					  <option>Em espera</option>			  
					</select><span>*</span>
					<br><br>
					<select>
					  <option>Razão contato</option>
					  <option>Cliente 1</option>
					  <option>Cliente 2</option>
					  <option>Cliente 3</option>			  
					</select><span>*</span>
					<br><br>
					<textarea rows="4" placeholder="Informação sobre o atendimento" ></textarea><span>*</span>
					<br><br>
					<button class="btn btn-primary" type="submit" >Salvar</button>
					<button class="btn btn-primary" type="submit" >Limpar</button>
				</form>
			</div>			
		</div>				
		
		<form id="btn_atividades">
			<input type="checkbox">&nbsp;&nbsp; Selecionar Todos
			<button class="btn btn-primary" type="submit" >Excluir Selecionados</button>			
		</form>
		
		<?php require_once"includes/header.php";?>	
		
		
  </body>
</html> 