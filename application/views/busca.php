<?php $this->load->view('header')

?>


	<title>Busca</title>
	
	

</head>

<body>
	<div class="cotainer-fluid">
		<div class="row-fluid">
			<div class="span2">
				<div class="imagem">
					<img src="<?php echo base_url('/assets/img/teste.jpg')?>" alt="not found" class="img-rounded">
				</div>
			</div>

			<div class="span9" id = menu >
				<?php $this->load->view('menu')	?>
			</div>

			<div class="span9">				
					<div id="busca">
						<div id="conteudo">
							<form method="GET" action = "/sistema_de_ponto/index.php/busca/getUserTable">
								<label for="consulta">Buscar:</label>
								<input type="text" id="procurar" name="consulta" maxlength="255" required />
								<input type="submit" value="Buscar" />
							</form>							
						</div>
					</div>
			</div>
			<div class="span9">
				
					<div id="tabela">
						<div class="bs-docs-example">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nome</th>
										<th>Cargo</th>
										<th>Email</th>
										<th colspan="2">Ações</th>
									</tr>
								</thead>
								<tbody>
									<?php if(isset($resultado)){?>
										
										<?php foreach($resultado as $user) { ?>
										<tr>
											<td><?php echo $user->id ?></td>
											<td><?php echo $user->name ?></td>
											<td><?php echo $user->position ?></td>
											<td><?php echo $user->email ?></td>
											<td><a class="btn btn-info" href="#"><i class="icon-edit"></i></a></td>
											<td><a class="btn btn-danger" href="/sistema_de_ponto/index.php/busca/?excluir=<?php echo $user->id?>"><i class="icon-trash"></i></a></td>
										</tr>
										<?php } ?>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>			
			</div>
			<div class="span9">
				<?php $this->load->view('footer')?>
			</div>
		</div>
	</div>

</body>

</html>
