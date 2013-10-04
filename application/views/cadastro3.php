<?php $this->load->view('header')
?>

<title>Dados Pessoais</title>
<!-- <link href="C:/wamp/www/sistema_de_ponto/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->

<script src = "<?php echo base_url('/assets/js/cadastro.js')?>" type="text/javascript"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.min.js" type="text/javascript"></script>
</head>
	<body>

	<label>Nome</label>
	<input type="text" id="Name"/>

	<label>Email</label>
	<input type="email" id="email"/>

	<label>Senha</label>
	<input type="password"	id="senha" />

	<label>Telefone 1 </label>
	<input type="number" id="phone" />

	<label>Telefone 2 </label>
	<input type="number" id="phone2" />

	<label>Nascimento</label>
	<input type="text" id="nascimento" />

	<label>Funcao</label>
	<input type="number" id="funcao" />

	<label>Estado</label>
	<input type="text" id="estado" />

	<label>Cep</label>
	<input type="number" id="cep" />

	<label>Bairro</label>
	<input type="text" id="bairro" />

	<label>Cidade</label>
	<input type="text" id="cidade" />

	<label>Rua</label>
	<input type="text" id="rua" />

	<label>Numero</label>
	<input type="number" id="numero" />

	<label>Complemento</label>
	<input type="text" id="complemento" />

	<input type="submit" value="enviar" id="confirme"/>
	
	</body>

</html>