<?php $this->load->view('header')?>
<head>
	<title>Dados Pessoais</title>
	<!-- <link href="C:/wamp/www/sistema_de_ponto/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<script src = "<?php echo base_url('/assets/js/cadastro.js')?>" type="text/javascript"></script>
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
				<?php $this->load->view('menu')?>
			</div>
			<div class="span9">
				<!--<?php $this->load->view('footer')?>--> só testando aqui
			</div>
		</div>
	</div>
	
</body>