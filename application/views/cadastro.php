<html>
	<head>
		<meta charset="UTF-8" />
		<title>Dados Pessoais</title>
		<!-- <link href="C:/wamp/www/sistema_de_ponto/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->

	</head>
	<?php $this->load->view('header') ?>

	<body>

		<form class="form-horizontal">
			<fieldset>
				<legend>
					Cadastro
				</legend>
				<div class="control-group">
					<label class="control-label">Nome</label>
					<div class="controls">
						<input type='text' name='Name' id='a' placeholder="Nome Completo" class="isBlanck" />
					</div>
				</div>


				<div class="control-group">
					<label class="control-label">Email</label>
					<div class="controls">
						<input type='email' name='email' id='b' placeholder="Email" class="isBlanck" />


					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Senha</label>
					<div class="controls">
						<input type='password' name='senha' id='L' placeholder="Senha"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Telefone</label>
					<div class="controls">
						<input type='text' name='phone' id='c' placeholder="(38)9121-1232"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Telefone 2</label>
					<div class="controls">
						<input type='text' name='phone2' id='d' placeholder="(38)9121-1232"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Data de Nascimento</label>
					<div class="controls">
				<input type="text" name='nascimento' id='j' placeholder="12/12/1990"/>
				</div>
				</div>
				<div class="control-group">
					<label class="control-label">CEP</label>
					<div class="controls">
					<input type="text" name='cep' id='k' placeholder="39.440-000"/>
				</div>
				</div>
				<div class="control-group">
					<label class="control-label">Função</label>
					<div class="controls">
					<input type="string" name='funcao' id='l' placeholder="Diretor de marketing"/>
				</div>
				</div>
				<div class="control-group">
					<label class="control-label">Endereço</label>
				</div>
				<div class="control-group">
					<label class="control-label">Rua</label>
					<div class="controls">
					<input type='text' name='rua' id='e' placeholder="Rua"/>
				</div>
				</div>
				<div class="control-group">
					<label class="control-label">Número</label>
					<div class="controls">
					<input type='text' name= 'numero' id='numero' placeholder="Número"/>
				</div>
				</div>
				<div class="control-group">
					<label class="control-label">Complemento</label>
					<div class="controls">
					<input type='text' name= 'complemento' id='g' placeholder="Complemento"/>
				</div>
				</div>
				<div class="control-group">
					<label class="control-label">Bairro</label>
					<div class="controls">
					<input type='text' name= 'bairro' id='h' placeholder="Bairro"/>
				</div>
				</div>
					<div class="control-group">
					<label class="control-label">Cidade</label>
					<div class="controls">
					<input type= 'text'  name= 'cidade' id= 'i' placeholder="Cidade"/>
				</div>
				</div>
				<div class="control-group">
					<label class="control-label">Estado</label>
					<div class="controls">
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
					</select>
				</p>
				<input type='submit' value='Salvar' id='salvar'/>
			</fieldset>
		</form>
		<?php $this->load->view('footer') ?>

	</body>

</html>