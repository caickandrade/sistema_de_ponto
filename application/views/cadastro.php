
<?php $this->load->view('header') ?>
		
		
		
		<title>Dados Pessoais</title>
		<!-- <link href="C:/wamp/www/sistema_de_ponto/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->


	
	<script src = "<?php echo base_url('/assets/js/cadastro.js')?>" type="text/javascript"> </script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.min.js" type="text/javascript"></script>
	<body>

		<form class="form-horizontal formCadastro" id="formu" method="post" >
			<fieldset>
				<legend>
					Cadastro
				</legend>
				<div class="control-group">
					<label class="control-label" for="Name">Nome</label>
					<div class="controls">
						<input type='text' name='Name' id='Name' placeholder="Nome Completo" class="required isBlanck" />
					</div>
				</div>

<title>Dados Pessoais</title>
<!-- <link href="C:/wamp/www/sistema_de_ponto/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->


<script src = "<?php echo base_url('/assets/js/cadastro.js')?>"></script>

				<div class="control-group">
					<label class="control-label" for="email">Email</label>
					<div class="controls">
						<input type='email' name='email' id='email' placeholder="Email" class="required isBlanck" />


<body>
<div class="container">
	 <div class="row">
    <div class="span8 offset2">
	<form class="form-inline">
		<fieldset>
			<legend>
				Cadastro
			</legend>
			<div class="control-group ">
				<label class="control-label">Nome</label>


				<input class="span4" type='text' name='Name' id='a' placeholder="Nome Completo" class="isBlanck" />
				&nbsp &nbsp<label class="control-label">Email</label>

				<input type='email' name='email' id='b' placeholder="Email" class="isBlanck" />
			</div>

			<div class="control-group">

				<label class="control-label">Senha</label>
				<input type='password' name='senha' id='L' placeholder="Senha"/>
				<label class="control-label">Data de Nascimento</label>
				<input type="date" name='nascimento' id='j' placeholder="12/12/1990"/>

			</div>

			<div class="control-group">
				<label class="control-label">Telefone</label>

				<input type='text' name='phone' id='c' placeholder="(38)9121-1232"/>
				<label class="control-label">Telefone 2</label>

				<input type='text' name='phone2' id='d' placeholder="(38)9121-1232"/>

			</div>

			<div class="control-group">
				<label class="control-label">Função</label>

				<input type="text" name='funcao' id='l' placeholder="Diretor de marketing"/>

			</div>

			<label class="control-label">Endereço</label>

			<div class="control-group">
				<label class="control-label">Estado</label>

				<div class="input-append">
					<input id="estado" name="estado" class="span2" placeholder="Escolha uma opção" type="text">
					<div class="btn-group">
						<button class="btn dropdown-toggle" data-toggle="dropdown">
							Escolha
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">

							<li>
								<a href="javascript:void(0)" class="estado">Minas Gerais</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Acre</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Alagoas</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Amapá</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Amazonas</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Bahia</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Ceará</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Distrito Federal</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Espírito Santo</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Goiás</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Maranhão</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Mato Grosso</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Mato Grosso do Sul</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Pará</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Paraíba</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Paraná</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Pernambuco</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Piauí</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Roraima</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Rio de Janeiro</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Rio Grande do Norte</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Rio Grande do Sul</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Santa Catarina</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">São Paulo</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Sergipe</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="estado">Tocantis</a>
							</li>
						</ul>

					</div>

				</div>
				<label class="control-label">CEP</label>


				<input type="text" name='cep' id='k' placeholder="39.440-000"/>

			</div>

			<div class="control-group">
				<label class="control-label">Cidade</label>

				<input type= 'text'  name= 'cidade' id= 'i' placeholder="Cidade"/>
				<label class="control-label">Rua</label>

				<input type='text' name='rua' id='e' placeholder="Rua"/>

			</div>

			<div class="control-group">
				<label class="control-label">Número</label>

				<input type='text' name= 'numero' id='numero' placeholder="Número"/>
				<label class="control-label">Bairro</label>

				<input type='text' name= 'bairro' id='h' placeholder="Bairro"/>

			</div>

			<div class="control-group">
				<label class="control-label">Complemento</label>

				<input type='text' name= 'complemento' id='g' placeholder="Complemento"/>
				<label class="control-label">Cadastrar</label>

				<button id="confirme" name="confirme" class="btn btn-info">
					Confirme
				</button>

			</div>

		</fieldset>
	</form>

	<!--<?php $this->load->view('footer') ?> -->
</div>
</div>
</div>
</body>

</html>