<html>
	<head>
		<meta charset="UTF-8" />
		<title>Dados Pessoais</title>
	</head>
	<?php $this->load->view('header') ?>	

	<body>
		<form>
				<p><label for= 'a' >Cadastro</label></p>
				
				<p><label for='a'>Name </label>
					<input type='text' name='Name' id='a'/></p>
					
				<p><label for='b'>Email </label>
					<input type='email' name='email' id='b'/></p>	
				
				<p><label for='l'>Senha </label>
					<input type='password' name='senha' id='l'/></p>
					
				<p><label for='c'>Phone</label>
					<input type='string' name='phone' id='c'/></p>
					
				<p><label for='d'>Phone 2 </label>
					<input type='string' name='phone2' id='d'/></p>
					
				<p><label for='j'>Data de Nascimento</label>
					<input type="string" name='nascimento' id='j'/></p>
					
										
					
					<p><label for='e'>Endereço</label></p> 
					
				<p><label for='e'>Rua </label>
					<input type='text' name='rua' id='e'/></p>			
					
				<p><label for='numero'>Número</label>
					<input type='string' name= 'numero' id='numero'/></p>
					
				<p><label for='g'>Complemento</label>
					<input type='text' name= 'complemento' id='g'/></p>
										
				<p><label for='h'>Bairro</label>
					<input type='text' name= 'bairro' id='h'/></p>
					
				<p><label for='i'>Cidade</label>
					<input type= 'text'  name= 'cidade' id= 'i'/></p>					
				
				<p><label for='s'>Estado</label>
					<select id='s'>
							
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
				<input type='submit' value='Salvar' id='salvar'/>	
		</form>
		<?php $this->load->view('footer') ?>		
	</body>
	
</html>