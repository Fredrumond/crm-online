<?php $cabecalho_title = "Cadastrar Cliente"; require_once"includes/header.php";?>

		<div id="cad_cli_txt"><h3>Cadastrar Cliente</h3></div>
		<div id="box_cadastrar_cli">							
			<form class="form-horizontal">
				Tipo de cliente <span>*</span>
				<br>
				<input type="radio" name="tip_pes" value="1" id="pes_fis"> Pessoa Fisica
				<input type="radio" name="tip_pes" value="1" id="pes_jur"> Pessoa Juridica
				<br><br>

				<div id="form_fis" style="display: none;">
						Codigo
						<input class="input-small" type="text"  placeholder="Código">
						CPF
						<input class="input-large" type="text"  placeholder="CPF"><span>*</span>
						Vendedor Responsável
						<select>
							<option>Vendedor</option>
							<option>Maria</option>
							<option>Fernanda</option>
							<option>Bruna</option>			  
						</select><span>*</span>
						<br><br>			
						Nome 
						<input class="input-xxlarge" type="text" placeholder="Nome"><span>*</span>
						<br><br>
						Endereço
						<input class="input-xxlarge" type="text"  placeholder="Endereço"><span>*</span>
						<br><br>
						Bairro
						<input class="input-large" type="text"  placeholder="Bairro"><span>*</span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				
						UF
						<select>
							<option>UF</option>
							<option>MG</option>
							<option>RJ</option>
							<option>SP</option>			  
						</select><span>*</span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						CEP
						<input class="input-large" type="text"  placeholder="CEP"><span>*</span>
						Cidade
						<input class="input-large" type="text"  placeholder="Cidade"><span>*</span>
						<br><br>
						Contato
						<input class="input-large" type="text"  placeholder="Contato">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						Telefone
						<input class="input-large" type="text"  placeholder="Telefone">
						<br><br>
						Contato
						<input class="input-large" type="text"  placeholder="Contato">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						Telefone
						<input class="input-large" type="text"  placeholder="Telefone">
						<br>
						Status<span>*</span><br>
						<input type="radio"> Ativo
						<input type="radio"> Inativo
				</div>

				<div id="form_jur" style="display: none;">
						Codigo
						<input class="input-small" type="text"  placeholder="Código"><span>*</span>
						CNPJ
						<input class="input-large" type="text"  placeholder="CNPJ">	<span>*</span>					
						Vendedor Responsável
						<select>
							<option>Vendedor</option>
							<option>Maria</option>
							<option>Fernanda</option>
							<option>Bruna</option>			  
						</select><span>*</span>
						<br><br>												
						Razão Social
						<input class="input-medium" type="text"  placeholder="Razão Social"><span>*</span>
						Inscr. Estadual
						<input class="input-medium" type="text"  placeholder="Inscr. Estadual"><span>*</span>
						Nome Fantasia
						<input class="input-xlarge" type="text" placeholder="Nome"><span>*</span>
						<br><br>
						Endereço
						<input class="input-xxlarge" type="text"  placeholder="Endereço"><span>*</span>
						<br><br>
						Bairro
						<input class="input-large" type="text"  placeholder="Bairro"><span>*</span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;					
						UF
						<select>
							<option>UF</option>
							<option>MG</option>
							<option>RJ</option>
							<option>SP</option>			  
						</select><span>*</span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						CEP
						<input class="input-large" type="text"  placeholder="CEP">	<span>*</span>
						Cidade
						<input class="input-large" type="text"  placeholder="Cidade"><span>*</span>
						<br><br>
						Contato
						<input class="input-large" type="text"  placeholder="Contato">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;						
						Telefone
						<input class="input-large" type="text"  placeholder="Telefone">
						<br><br>
						Contato
						<input class="input-large" type="text"  placeholder="Telefone">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;						
						Telefone
						<input class="input-large" type="text"  placeholder="Setor">
						<br>
						Status<span>*</span><br>
						<input type="radio"> Ativo
						<input type="radio"> Inativo						
				</div>	
									
		</div>

		<div id="cad_cli_btn">
			<form>
				<button class="btn btn-primary" type="submit" >Salvar</button>
				<button class="btn btn-primary" type="submit" >Cancelar</button>			
			</form>	
		</div>		
		
		
					
		

		<?php require_once"includes/header.php";?>	
		
		
  </body>
</html> 