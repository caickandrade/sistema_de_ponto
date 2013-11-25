<?php $this->load->view('header')

?>
<head>

	<title>Busca</title>
	<script src = "<?php echo base_url('/assets/js/typeahead.min.js')?>"></script>
	<script src = "<?php echo base_url('/assets/js/busca.js')?>" ></script>

</head>

<body>
	<div class="cotainer-fluid">
		<div class="row-fluid">
			<div class="span2">
				<div class="imagem">
					<img src="<?php echo base_url('/assets/img/teste.jpg')?>" alt="not found" class="img-rounded">
				</div>
			</div>

			<div class="span9">
				<?php $this->load->view('menu')
				?>
			</div>
			<div class="span9">
				<div class="search">
					<div id="busca">
						Buscar
						<input type="text" class="text-search span4"  id="buscar" />
						<input type="image" src="<?php echo base_url('/assets/img/search.png')?>" alt="Submit" class="searchButton" id="pesquisar">
					</div>
				</div>
			</div>
			<div class="span9">
				<div id="tabela">
					<div class="bs-docs-example">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Cargo</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Tesla Andrade Alves Antunes Almeida Junior</td>
									<td>CEO</td>
									<td>ceo@infobits.com.br</td>
								</tr>
								<tr>
									<td>Testadondo Andrade Alves Antunes Almeida Junior</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<td>Texta Andrade Alves Antunes Almeida Junior</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
