<?php $cabecalho_title = "Atividades"; require_once"includes/header.php";?>
 		
		<div id="txt_atividades"><h3>Lista de Atividades</h3></div>

		<div id="busca_atividades">
				<form class="form-search">
					<input type="text" class="input-large search-query" placeholder="Buscar data">
					<button type="submit" class="btn-primary">Buscar</button>
				</form>
		</div>

		<div id="table_atividades">
			<table class="table"> <!-- Inicia a tabela e coloca uma borda de espessura igual a 1-->
					
				<tr bgcolor="#00afef">					
					<td>Título </td>
					<td>Horario</td>
					<td>Descrição</td>
					<td></td>
					<td></td>
					
				</tr>			
					
				<tr class="success"> 
					<td><input type="checkbox">&nbsp;&nbsp;Reunião</td>
					<td> </td>
					<td>Descrição</td>					
					<td><button class="btn btn-small btn-primary" type="submit" >Editar</button></td>
					<td><button class="btn btn-small btn-primary" type="submit" >Excluir</button></td> 					
				<tr>
					
				<tr class="error"> 
					<td><input type="checkbox">&nbsp;&nbsp;Visita</td>
					<td> </td>
					<td>Descrição....</td>
					<td><button class="btn btn-small btn-primary" type="submit" >Editar</button></td>
					<td><button class="btn btn-small btn-primary" type="submit" >Excluir</button></td>
				<tr>
			</table>
		</div>
		
		<div id="txt_new_ativi"><h3></h3></div>
		<div id="add_atividades">
			<h3>Nova Atividade</h3>
			
			<div id="formulario">
				<form class="form-inline">					
					<input class="input-large" type="text"  placeholder="Titulo"><span>*</span>
					<br><br>					
					<input class="input-large" type="text"  placeholder="Data"><span>*</span>
					<br><br>
					<input class="input-large" type="text"  placeholder="Horario"><span>*</span>
					
					<br><br>
					<textarea rows="4" placeholder="Informação sobre o atendimento" ></textarea><span>*</span>
					<br><br>
					<button class="btn btn-primary" type="submit" >Limpar</button>					
					<button class="btn btn-primary" type="submit" >Salvar</button>
				</form>
			</div>			
		</div>

		<form id="btn_atividades">
			<input type="checkbox">&nbsp;&nbsp; Selecionar Todos
			<button class="btn btn-primary" type="submit" >Excluir Selecionados</button>			
		</form>
<!--
		<form id="btn_atividades">
			<button class="btn btn-primary" type="submit" >Editar</button>
			<button class="btn btn-primary" type="submit" >Cancelar</button>
			<button class="btn btn-primary" type="submit" >Excluir</button>
			<button class="btn btn-primary" type="submit" >Salvar</button>
		</form>-->
		
		<?php require_once"includes/header.php";?>	
		
		
  </body>
</html> 