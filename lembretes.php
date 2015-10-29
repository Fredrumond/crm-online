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
			<?php
		      $query = "SELECT * FROM lembrete ORDER BY data_lem DESC "; /*asc*/
		      $result = DBExecute($query); 
		      $linha = mysqli_num_rows($result);
		      while ($row = mysqli_fetch_array($result)) 
		      {        
		    ?>
		      <tr>
		        <td><?php echo $row['nom_lem']?></td>		        
		      </tr>
		    <?php 
		      }
		    ?>
		</table>
	</div>	
		
	<div id="novo_lem_btn">
		<button class="btn btn-primary input-large" type="submit" >Novo Lembrete</button>
	</div>
	
	<div id="cad_lem">
		<div id="cad_lemb_form">			
			<form class="form-inline" method="POST" action="acoes/inserir_lembrete.php">					
				<input class="input-large" type="text" id="tit_lem" name="tit_lem"  placeholder="Titulo Lembrete"><span>*</span>
				<br><br>					
				<input class="input-large" type="date" id="dat_lem" name="dat_lem"  placeholder="Data"><span>*</span>					
				<input class="input-large" type="time" id="hor_lem" name="hor_lem"  placeholder="Hora"><span>*</span>				
				<br><br>
				<textarea rows="4" id="inf_lem" name="inf_lem" placeholder="Informação Lembrete"></textarea><span>*</span>				
			
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
				</form>				
			</div>
		</div>
		
	<?php require_once"includes/header.php";?>		
</body>
</html> 