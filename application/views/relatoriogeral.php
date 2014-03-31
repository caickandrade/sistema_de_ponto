<?php $this->load->view('header')

?>

	<head>
		<title>Relatório Geral</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
		<script src = "<?php echo base_url('/assets/js/relatorioGeral.js')?>" ></script>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
$(function () {
        $('#container').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Historic World Population by Region'
            },
            subtitle: {
                text: 'Source: Wikipedia.org'
            },
            xAxis: {
                categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population (millions)',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' millions'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Year 1800',
                data: [107, 31, 635, 203, 2]
            }, {
                name: 'Year 1900',
                data: [133, 156, 947, 408, 6]
            }, {
                name: 'Year 2008',
                data: [973, 914, 054, 732, 34]
            }]
        });
    });
    

		</script>
		
		
	</head>
	
	<div class="container">
		<?php $this->load->view('menu')?>
	</div>
	
	<body> 
		<script src="../../js/highcharts.js"></script>
		<script src="../../js/modules/exporting.js"></script>

		<div class="container">
			<div class="row-fluid">
				<div class="span12">
										
					
					
					
					
					
					
					<!--
					<div id="cadastro">
					
										
							<label class="control-label">Gráfico do Relatório Geral</label>
							
							<div class="progress progress-success">
  								<div class="bar" style="width: 70%"></div>
							</div>
							<div id="al">
								<span class="label label-success"><div id="reducao">..........</div></span><label id="comentario">Horas trabalhadas </label>
							</div>
					</div>	
					-->
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