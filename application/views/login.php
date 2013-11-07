<?php  $this->load->view('header')
?>	
<html>
	<head>
		<title>Login</title>
		
		<script src = "<?php echo base_url('/assets/js/login.js')?>" type="text/javascript"></script>
		
	
	</head>
	<body>
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span">
						<div id="imglog">
							<img src="assets/img/teste.jpg" class="img-rounded">
						</div> 
					</div>
					<div class="container" id='formlog'>
						
					<div class="span9">
						<legend>
								Sistema de Ponto
						</legend>
						<div class="row-fluid">
							<div class="span12">
								<label class="control-label">Email</label>
									<div class="controls">
										<input class="span12" type='email' name='email' id='email' placeholder="Email" />
									</div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<label class="control-label">Senha</label>
									<div class="controls">
										<input class="span12" type='password' name='senha' id='senha' placeholder="Senha"/>
									</div>
							</div>
							
						</div>
						<div class="row-fluid">
							<button id="entrar" name="entrar" class="btn btn-success">
									Entrar
							</button>
						</div>
					</div>
					</div>
				</div>
			</div>
		</body>

</html>