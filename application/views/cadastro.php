<?php $this->load->view('header')
?>

<title>Dados Pessoais</title>
<!-- <link href="C:/wamp/www/sistema_de_ponto/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->

<script src = "<?php echo base_url('/assets/js/cadastro.js')?>" type="text/javascript"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.min.js" type="text/javascript"></script>
<body>

<body>
	<div class="container">

		<!--<form class="form-inline" id="formu" method="post" action="">-->
			<fieldset>
				<legend>
					Cadastro
				</legend>
				<div class="row-fluid">
					<div class="span5">
						<label class="control-label">Nome</label>
						<div class="controls">
							<input class="span10" type='text' name='Name' id='Name' placeholder="Nome Completo" />
						</div>
					</div>
					<div class="span4">
						<label class="control-label">Email</label>
						<div class="controls">
							<input class="span10" type='email' name='email' id='email' placeholder="Email" />
						</div>
					</div>
					<div class="span3">
						<label class="control-label">Senha</label>
						<div class="controls">
							<input class="span10" type='password' name='senha' id='senha' placeholder="Senha"/>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span3">
						<br/>
						<label class="control-label">Data de Nascimento</label>
						<div class="controls">
							<input class="span10" type="date" name='nascimento' id='nascimento' placeholder="12/12/1990"/>
						</div>
					</div>
					<div class="span3">
						<br/>
						<label class="control-label">Telefone</label>
						<div class="controls">
							<input class="span10" type='tel' name='phone' id='phone' placeholder="(38)9121-1232"/>
						</div>
					</div>
					<div class="span3">
						<br/>
						<label class="control-label">Telefone 2</label>
						<div class="controls">
							<input class="span10" type='tel' name='phone2' id='phone2' placeholder="(38)9121-1232"/>
						</div>
					</div>
					<div class="span3">
						<br/>
						<label class="control-label">Função</label>
						<div class="controls">
							<input class="span10" type="text" name='funcao' id='funcao' placeholder="Diretor de marketing"/>
						</div>
					</div>
				</div>
				<br/>
				Endereço
				<br/>
				<div class="row-fluid">
					<div class="span3">
						<br/>
						<label class="control-label">Estado</label>
						<div class="controls">
							<div class="input-append">
								<input class="span8" id="estado" name="estado" placeholder="Escolha uma opção" type="text">
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
						</div>
					</div>
					<div class="span3">
						<br/>
						<label class="control-label">CEP</label>
						<div class="controls">
							<input class="span10" type="number" name='cep' id='cep' placeholder="39.440-000"/>
						</div>
					</div>
					<div class="span3">
						<br/>
						<label class="control-label">Bairro</label>
						<div class="controls">
							<input class="span10" type='text' name= 'bairro' id='bairro' placeholder="Bairro"/>
						</div>
					</div>
					<div class="span3">
						<br/>
						<label class="control-label">Cidade</label>
						<div class="controls">
							<input class="span10" type= 'text'  name= 'cidade' id= 'cidade' placeholder="Cidade"/>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span4">
						<br/>
						<label class="control-label">Rua</label>
						<div class="controls">
							<input class="span10" type='text' name='rua' id='rua' placeholder="Rua"/>
						</div>
					</div>
					<div class="span4">
						<br/>
						<label class="control-label">Número</label>
						<div class="controls">
							<input class="span10" type='number' name= 'numero' id='numero' placeholder="Número"/>
						</div>
					</div>
					<div class="span4">
						<br/>
						<label class="control-label">Complemento</label>
						<div class="controls">
							<input class="span10" type='text' name= 'complemento' id='complemento' placeholder="Complemento"/>
						</div>
					</div>
				</div>

				<div class="row-fluid">
					<br/>
					<!--<button id="confirme" name="confirme" class="btn btn-success">
						Cadastrar
					</button>-->
					<input type="submit" id="confirme" value="Cadastrar" name="confirme" class="btn btn-success" />
				</div>
			</fieldset>
		</form>

		<!--<?php $this->load->view('footer') ?> -->

	</div>
</body>

</html>