<?php $this->load->view('header')
?>

	<title>Dados Pessoais</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<!-- <link href="C:/wamp/www/sistema_de_ponto/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
	<script src = "<?php echo base_url('/assets/js/editar.js')?>" type="text/javascript"></script>
	<script src = "<?php echo base_url('/assets/js/jquery-ui.js')?>" type="text/javascript"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.min.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
		<div class="span2">
			<div class="imagem">
				<img src="<?php echo base_url('/assets/img/teste.jpg')?>" alt="not found" class="img-rounded">
			</div>
		</div>

		<div class="span9">
			<?php $this->load->view('menu') ?>
		</div>
	

		<div class="span9">
		<div id="cadastro">
			<div class="form-inline">

				<fieldset>
					<legend>
						<div class="title">
							Editar
						</div>

						<div style="clear:both;"></div>
					</legend>

					<div class="row-fluid">
						<div class="span4">
							<label class="control-label">Nome</label>
							<div class="controls">
								<input class="span10" type='text' name='Name' id='Name' placeholder="Nome Completo" value="<?php echo $usuario->name ?>"/>
							</div>
						</div>
						<div class="span3">
							<label class="control-label">CPF</label>
							<div class="controls">
								<input class="span10" type='tel' name='CPF' id='CPF' placeholder="193.234.234-54" value="<?php echo $usuario->cpf ?>" />
							</div>
						</div>

						<div class="span3">
							<label class="control-label">Email</label>
							<div class="controls">
								<input class="span10" type='email' name='email' id='email' placeholder="Email" value="<?php echo $usuario->email ?>" />
							</div>
						</div>
						<div class="span2">
							<label class="control-label">Senha</label>
							<div class="controls">
								<input class="span11" type='password' name='senha' id='senha' placeholder="Senha" disabled="disabled" value="<?php echo $usuario->email ?>"/>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
							<br/>
							<label class="control-label">Data de Nascimento</label>
							<div class="controls">
								<input class="span10" type="date" name='nascimento' id='nascimento' placeholder="12/12/1990" value="<?php echo $usuario->birthday ?>"/>
							</div>
						</div>
						<div class="span3">
							<br/>
							<label class="control-label">Telefone</label>
							<div class="controls">
								<input class="span10" type='tel' name='phone' id='phone' placeholder="(38)9121-1232" value="<?php echo $usuario->phone1 ?>"/>
							</div>
						</div>
						<div class="span3">
							<br/>
							<label class="control-label">Telefone 2</label>
							<div class="controls">
								<input class="span10" type='tel' name='phone2' id='phone2' value="<?php echo $usuario->phone2 ?>" />
							</div>
						</div>
						<div class="span3">
							<br/>
							<label class="control-label">Função</label>
							<div class="controls">
								<select class="span10" name='funcao' id='funcao' selected="<?php echo $usuario->id_position ?>" ></select>
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
									<input class="span8" id="estado" name="estado" value="<?php echo $endereco->state ?>" type="text">
									<div class="btn-group">
										<button class="btn dropdown-toggle" data-toggle="dropdown">
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
								<input class="span10 cep" type="tel" name='cep' id='cep' placeholder="39.440-000" value="<?php echo $endereco->zip_code ?>"/>
							</div>
						</div>
						<div class="span3">
							<br/>
							<label class="control-label">Bairro</label>
							<div class="controls">
								<input class="span10" type='text' name= 'bairro' id='bairro' placeholder="Bairro" value="<?php echo $endereco->neighborhood ?>"/>
							</div>
						</div>
						<div class="span3">
							<br/>
							<label class="control-label">Cidade</label>
							<div class="controls">
								<input class="span10" type= 'text'  name= 'cidade' id= 'cidade' placeholder="Cidade" value="<?php echo $endereco->city ?>"/>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span4">
							<br/>
							<label class="control-label">Rua</label>
							<div class="controls">
								<input class="span10" type='text' name='rua' id='rua' placeholder="Rua" value="<?php echo $endereco->street ?>"/>
							</div>
						</div>
						<div class="span4">
							<br/>
							<label class="control-label">Número</label>
							<div class="controls">
								<input class="span10" type='number' name= 'numero' id='numero' placeholder="Número" value="<?php echo $endereco->number ?>"/>
							</div>
						</div>
						<div class="span4">
							<br/>
							<label class="control-label">Complemento</label>
							<div class="controls">
								<input class="span10" type='text' name= 'complemento' id='complemento' placeholder="Complemento" value="<?php echo $endereco->complement ?>"/>
							</div>
						</div>
						<input name= 'ident' id='ident' type="hidden" value="<?php echo $usuario->id ?>"/>
						<input name= 'idEnd' id='idEnd' type="hidden" value="<?php echo $usuario->addresses_id ?>"/>
					</div>
					<div class="row-fluid">
						<br/>
						<button id="editar" name="editar" class="btn btn-success"  >
							Editar
						</button>
					</div>
				</fieldset>
			</div>
		</div>
		</div>
	</div>
	</div>
	<!--<?php $this->load->view('footer') ?> -->

	
	<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				×
			</button>
			<h3 id="myModalLabel">Aviso</h3>
		</div>
		<div class="modal-body">

		</div>
		<div class="modal-footer">
			<button class="btn" id="btModal" data-dismiss="modal" aria-hidden="true">
				OK
			</button>
		</div>
	</div>
</body>

</html>