<?php $this->load->view('header')?>

	<head>
		<title>Relatório Geral</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src = "<?php echo base_url('/assets/js/relatorioGeral.js')?>" ></script>
		
				
		
	</head>
	
	<div class="container">
		<?php $this->load->view('menu')?>
	</div>
	
	<body> 
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					
				</div>
			</div>
		</div>
		
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

										<label for="dInicio">Data de Início</label>
										<input id="dInicio" type="date" />
										<label for="dTermino">Data de Término</label>
										<input id="dTermino" type="date" />

									</div>
									<button class='btn' id='geraRelatorioGeral' data-dismiss='modal' aria-hidden='true'>
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
