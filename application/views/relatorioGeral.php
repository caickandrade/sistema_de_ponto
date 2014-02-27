<?php $this->load->view('header')

?>

	<head>
		<title>Relatório Geral</title>
		<script src = "<?php echo base_url('/assets/js/relatorioGeral.js')?>" type="text/javascript"></script>
	</head>
	
	<div class="container">
		<?php $this->load->view('menu') ?>
	</div>
	
	<body>
		
		<!-- modal de relatorio -->
		<div id="relatorioGeralModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">

			</div>
			<div class="modal-body">
				<ul class="nav nav-pills">
					<div class="navbar-form pull-left">
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span12">
									<div class="relatorioForm" id="relatorioForm">
										<label for="dataInicio">Data de Início</label>
										<input id="dataInicio" type="date" />
										<label for="dataTermino">Data de Término</label>
										<input id="dataTermino" type="date" />
									</div>
									<button class='btn' id='geraRelatorio' data-dismiss='modal' aria-hidden='true'>
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