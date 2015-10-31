<?php $cabecalho_title = "Cadastrar Cliente"; require_once"includes/header.php";?>

		<div id="cad_cli_txt"><h3>Cadastrar Cliente</h3></div>
		<div id="box_cadastrar_cli">							
			<form class="form-horizontal" method="POST" action="acoes/inserir_cliente.php">
				Tipo de cliente <span>*</span>
				<br>
				<input type="radio" name="tip_pes" value="1" id="pes_fis"> Pessoa Fisica
				<input type="radio" name="tip_pes" value="1" id="pes_jur"> Pessoa Juridica
				<br><br>

				<div id="form_fis" style="display: none;">
						
						CPF
						<input class="input-large" type="text" id="cpf_cli" name="cpf_cli"  placeholder="CPF"><span>*</span>
						Vendedor Responsável
						<select>
							<option>Vendedor</option>
							<option>Maria</option>
							<option>Fernanda</option>
							<option>Bruna</option>			  
						</select><span>*</span>
						<br><br>			
						Nome 
						<input class="input-xxlarge" type="text" id="nom_cli" name="nom_cli" placeholder="Nome"><span>*</span>
						<br><br>
						Endereço
						<input class="input-xxlarge" type="text" id="end_cli" name="end_cli"  placeholder="Endereço"><span>*</span>
						<br><br>
						Bairro
						<input class="input-large" type="text" id="bai_cli" name="bai_cli"  placeholder="Bairro"><span>*</span>
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
						<input class="input-large" type="text" id="cep_cli" name="cep_cli" placeholder="CEP"><span>*</span>
						Cidade
						<input class="input-large" type="text" id="cid_cli" name="cid_cli" placeholder="Cidade"><span>*</span>
						<br><br>
						Contato
						<input class="input-large" type="text" id="cont_cli" name="cont_cli" placeholder="Contato">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						Telefone
						<input class="input-large" type="text" id="tel_cli" name="tel_cli" placeholder="Telefone">
						<br><br>
						
						Status<span>*</span><br>
						<input type="radio"> Ativo
						<input type="radio"> Inativo
				</div>

				<div id="form_jur" style="display: none;">
						
						CNPJ
						<input class="input-large" type="text" id="cnpj_cli" name="cnpj_cli" placeholder="CNPJ">	<span>*</span>					
						Vendedor Responsável
						<select>
							<option>Vendedor</option>
							<option>Maria</option>
							<option>Fernanda</option>
							<option>Bruna</option>			  
						</select><span>*</span>
						<br><br>			
						Nome 
						<input class="input-xxlarge" type="text" id="nom_cli" name="nom_cli" placeholder="Nome"><span>*</span>
						<br><br>
						Endereço
						<input class="input-xxlarge" type="text" id="end_cli" name="end_cli"  placeholder="Endereço"><span>*</span>
						<br><br>
						Bairro
						<input class="input-large" type="text" id="bai_cli" name="bai_cli"  placeholder="Bairro"><span>*</span>
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
						<input class="input-large" type="text" id="cep_cli" name="cep_cli" placeholder="CEP"><span>*</span>
						Cidade
						<input class="input-large" type="text" id="cid_cli" name="cid_cli" placeholder="Cidade"><span>*</span>
						<br><br>
						Contato
						<input class="input-large" type="text" id="cont_cli" name="cont_cli" placeholder="Contato">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						Telefone
						<input class="input-large" type="text" id="tel_cli" name="tel_cli" placeholder="Telefone">
						<br><br>
						
						Status<span>*</span><br>
						<input type="radio"> Ativo
						<input type="radio"> Inativo						
				</div>	
									
		</div>

		<div id="cad_cli_btn">
			
				<button class="btn btn-primary" type="submit" >Salvar</button>
				<button class="btn btn-primary" type="submit" >Cancelar</button>			
			</form>	
		</div>		
		
		
					
		

		<?php require_once"includes/header.php";?>	
		
		
  </body>
</html> 