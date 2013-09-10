<html>
	<head>
		<meta charset="UTF-8" />
		<title>Dados Pessoais</title>
		<script src="<?php echo base_url("assets/js/jquery.js"); ?>" ></script>
		<script src="<?php echo base_url("assets/js/validacao.js"); ?>" ></script>
	</head>
		

	<body>
		<?php $this->load->view('header') ?>
		
				<p><label for= 'nome' >Cadastro</label></p>
				
				<p><label for='nome'>Name </label>
					<input type='text' name='Name' id='nome'/></p>
					
				<p><label for='email'>Email </label>
					<input type='email' name='email' id='email'/></p>	
				
				<p><label for='senha'>Senha </label>
					<input type='password' name='senha' id='senha'/></p>
					
				<p><label for='telefone1'>Phone</label>
					<input type='text' name='phone' id='telefone1'/></p>
					
				<p><label for='telefone2'>Phone 2 </label>
					<input type='text' name='phone2' id='telefone2'/></p>
					
				<p><label for='aniversario'>Data de Nascimento</label>
					<input type="date" name='nascimento' id='aniversario'/></p>
					
										
					
					<p><label for='rua'>Endereço</label></p> 
					
				<p><label for='rua'>Rua </label>
					<input type='text' name='rua' id='rua'/></p>			
					
				<p><label for='numero'>Número</label>
					<input type='number' name= 'numero' id='numero'/></p>
					
				<p><label for='complemento'>Complemento</label>
					<input type='text' name= 'complemento' id='complemento'/></p>
										
				<p><label for='bairro'>Bairro</label>
					<input type='text' name= 'bairro' id='bairro'/></p>
					
				<p><label for='cidade'>Cidade</label>
					<input type= 'text'  name= 'cidade' id= 'cidade'/></p>					
				
				<p><label for='estado'>Estado</label>
					<select id='estado'>
							
							<option value="MG">Minas Gerais</option>
							<option value="AC">Acre</option>
							<option value="AL">Alagoas</option>
							<option value="AP">Amapá</option>
							<option value="AM">Amazonas</option>
							<option value="BA">Bahia</option>
							<option value="CE">Ceará</option>
							<option value="DF">Distrito Federal</option>
							<option value="ES">Espírito Santo</option>
							<option value="GO">Goiás</option>
							<option value="MA">Maranhão</option>
							<option value="MT">Mato Grosso</option>
							<option value="MS">Mato Grosso do Sul</option>
							<option value="PA">Pará</option>
							<option value="PB">Paraíba</option>
							<option value="PR">Paraná</option>
							<option value="PE">Pernambuco</option>
							<option value="PI">Piauí</option>
							<option value="RR">Roraima</option>
							<option value="RO">Rondônia</option>
							<option value="RJ">Rio de Janeiro</option>
							<option value="RN">Rio Grande do Norte</option>
							<option value="RS">Rio Grande do Sul</option>
							<option value="SC">Santa Catarina</option>
							<option value="SP">São Paulo</option>
							<option value="SE">Sergipe</option>
							<option value="TO">Tocantins</option>
					</select></p>
				
				<p><label for='cep'>Cep</label>
					<input type= 'text'  name= 'cep' id= 'cep'/></p>
				
				<p><label for='cargo'>Cargo</label>
					<input type= 'text'  name= 'cargo' id= 'cargo'/></p>
				
				<input type='submit' value='Salvar' id='salvar'/>	
		
		<?php $this->load->view('footer') ?>		
	</body>
	
</html>