<?php $this->load->view('header') ?>
		
		
		
		<title>Dados Pessoais</title>
		<!-- <link href="C:/wamp/www/sistema_de_ponto/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->


	
	<script src = "<?php echo base_url('/assets/js/cadastro.js')?>"> </script>

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
					<label class="control-label">Função</label>
					<div class="controls">
						<input type="string" name='funcao' id='l' placeholder="Diretor de marketing"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Endereço</label>
				</div>
				<div class="control-group">
					<label class="control-label">Estado</label>
					<div class="controls">
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
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">CEP</label>
					<div class="controls">
						<input type="text" name='cep' id='k' placeholder="39.440-000"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Cidade</label>
					<div class="controls">
						<input type= 'text'  name= 'cidade' id= 'i' placeholder="Cidade"/>
					</div>
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
					<label class="control-label">Bairro</label>
					<div class="controls">
						<input type='text' name= 'bairro' id='h' placeholder="Bairro"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Complemento</label>
					<div class="controls">
						<input type='text' name= 'complemento' id='g' placeholder="Complemento"/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">Cadastrar</label>
					<div class="controls">
						<button id="confirme" name="confirme" class="btn btn-info">
							Confirme
						</button>

			</fieldset>
		</form>
		<?php $this->load->view('footer') ?>

	</body>

</html>