<?php $cabecalho_title = "Lembretes"; require_once"includes/header.php";?>


	<div id="busca_lembre">
		<form class="form-search">
			<input type="text" class="input-large search-query" placeholder="Buscar por lembrete">
			<button type="submit" class="btn-primary">Buscar</button>
		</form>
	</div>

	<div id="table_lembre">
		<table class="table"> <!-- Inicia a tabela e coloca uma borda de espessura igual a 1-->					
			<tr bgcolor="#00afef">
				<td>Lembretes</td>
			</tr>					
			<tr> 
				<td><input type="radio">&nbsp;&nbsp;LEMBRETE 1</td>					
			<tr>
		</table>
	</div>	
		
	<div id="novo_lem_btn">
		<button class="btn btn-primary input-large" type="submit" >Novo Lembrete</button>
	</div>
	
	<div id="cad_lem">
		<div id="cad_lemb_form">			
			<form class="form-inline">					
				<input class="input-large" type="text"  placeholder="Titulo Lembrete"><span>*</span>
				<br><br>					
				<input class="input-large" type="text"  placeholder="Data"><span>*</span>					
				<input class="input-large" type="text"  placeholder="Hora"><span>*</span>				
				<br><br>
				<textarea rows="4" placeholder="Informação Lembrete"></textarea><span>*</span>				
			</form>	
		</div>

		<div id="conv_txt"><h3>Convidados</h3></div>
		<div id="add_conv">
			<select class="input-large">
				<option>Adicionar Participante</option>
				<option>Masculino</option>
				<option>Feminino</option>									  
			</select>
			<button class="btn btn-primary" type="submit" >+</button>
		</div>
		<div id="box_conv">				
			<table class="table"> <!-- Inicia a tabela e coloca uma borda de espessura igual a 1-->	
				<tr bgcolor="#00afef">
					<td>Nome</td>						
				</tr>
				<tr> 
					<td><input type="checkbox">&nbsp;&nbsp;Janaina</td>								
				<tr>					
				</table>
				<div id="box_conv_btn">
					<button class="btn btn-primary" type="submit" >Salvar</button>
					<button class="btn btn-primary" type="submit" >Editar</button>
					<button class="btn btn-primary" type="submit" >Cancelar</button>
					<button class="btn btn-primary" type="submit" >Excluir</button>
				</div>			
			</div>
		</div>
		
	<?php require_once"includes/header.php";?>		
</body>
</html> 