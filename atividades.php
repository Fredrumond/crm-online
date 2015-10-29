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
				<?php
			      $query = "SELECT * FROM atividade ORDER BY data_atv DESC "; /*asc*/
			      $result = DBExecute($query); 
			      $linha = mysqli_num_rows($result);
			      while ($row = mysqli_fetch_array($result)) 
			      {        
			    ?>
			      <tr>
			        <td><?php echo $row['nom_atv']?></td>
			        <td><?php echo $row['hora_atv']?></td>
			        <td><?php echo $row['inf_atv']?></td>
			        <td><button class="btn btn-small btn-primary" type="submit" >Editar</button></td>
					<td><button class="btn btn-small btn-primary" type="submit" >Excluir</button></td> 		        
			      </tr>
			    <?php 
			      }
			    ?>				
			</table>
		</div>
		
		<div id="txt_new_ativi"><h3></h3></div>
		<div id="add_atividades">
			<h3>Nova Atividade</h3>
			
			<div id="formulario" >
				<form class="form-inline" method="POST" action="acoes/inserir_atividade.php">					
					<input class="input-large" type="text" id="tit_atv" name="tit_atv"  placeholder="Titulo"><span>*</span>
					<br><br>					
					<input class="input-large" type="date" id="dat_atv" name="dat_atv"  placeholder="Data"><span>*</span>
					<br><br>
					<input class="input-large" type="time" id="hor_atv" name="hor_atv"  placeholder="Horario"><span>*</span>
					
					<br><br>
					<textarea rows="4" id="inf_lem" name="inf_atv" placeholder="Informação sobre o atendimento" ></textarea><span>*</span>
					<br><br>
					<!--<button class="btn btn-primary" type="submit" >Limpar</button>-->					
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