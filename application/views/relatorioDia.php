<?php $this->load->view('header')

?>

	<head>
		<title>Relatório Geral</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">-->
		<script src = "<?php echo base_url('/assets/js/relatorioDia.js')?>" ></script>
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
					<?php $this->load->view('footer')?>
				</div>
			</div>
		</div>
		

		<!-- modal de relatorio -->
		<div id="relatorioDiaModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">

			</div>
			<div class="modal-body">
				<ul class="nav nav-pills">
					<div class="navbar-form pull-left">
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span12">
									<div class="relatorioForm" id="relatorioForm">

										<label for="Dia">Data a pesquisar</label>
										<input id="Dia" type="date" />

									</div>
									<button class='btn' id='geraRelatorioDia' data-dismiss='modal' aria-hidden='true'>
										Gerar Relatório
									</button>
								</div>
							</div>

						</div>

					</div>
				</ul>
			</div>
			<div class="modal-footer">
				<button class='btn' id='btSair' data-dismiss='modal' aria-hidden='true'>
					Sair
				</button>
			</div>
		</div>

	</body>