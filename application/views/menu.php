<html>
	<head>  
	<script src = "<?php echo base_url('/assets/js/Ponto.js')?>" type="text/javascript"></script>
	<script src = "<?php echo base_url('/assets/js/relatorio.js')?>" type="text/javascript"></script>
  	</head>
		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand" href="http://www.infobitsunimontes.com.br/">Infobits</a>
				<ul class="nav">
					<li class="active">
						<a href="http://localhost/sistema_de_ponto/index.php/home"><i class="icon-home"></i>Início</a>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user"></i>Usuário<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								 <a href="http://localhost/sistema_de_ponto/index.php/cadastro">Cadastro</a>
							</li>
							<li>
								<a href="http://localhost/sistema_de_ponto/index.php/busca">Consulta</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-ok"></i>Ponto<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>

								<a id="baterPonto" href="#">Bater Ponto</a>
							</li>
							<li>
								<a id="fecharPonto" href="#">Finalizar Ponto</a>

							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-list-alt"></i>Relatórios<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a id="especifico" href="#">Relatório Específico</a>
								<a id="geral" href="#">Relatório Geral</a>
								<!--<a href="#">Horas Semanais</a>-->
							</li>
						</ul>
					</li>
				</ul>
				
				<ul class="nav pull-right">
                      <li><a href="http://localhost/sistema_de_ponto/">Sair</a></li>
                      
                </ul>
				
			</div>
		</div>


	<body>
				
		<div id="pontoModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-header">
    		
  		</div>
  		<div class="modal-body">
    		<ul class="nav nav-pills">
    			<div class="navbar-form pull-left">
  					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<div id="boxtext">
  									<textarea rows="7" cols="9950" placeholder="Justifique"></textarea>
  								</div>
  								<div class="botaoPonto">
  									
  								</div>
  							</div>
  		</div> 
  						
  					</div>
  					
</div>
			</ul>	
  		</div>
  		<div class="modal-footer">
    		<button class='btn' id='btSair' data-dismiss='modal' aria-hidden='true'>Sair</button>
  		</div>
	</div>	
	
	<!-- modal de relatorio -->
	<div id="relatorioModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-header">
  		
  		</div>
  		<div class="modal-body">
    		<ul class="nav nav-pills">
    			<div class="navbar-form pull-left">
  					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<div class="relatorioForm" id="relatorioForm">
									<label for="dataInicio">Data de Início</label><input id="dataInicio" type="date" />
									<label for="dataTermino">Data de Término</label><input id="dataTermino" type="date" />
								</div>
								<p></p>
								<button class='btn' id='geraRelatorio' data-dismiss='modal' aria-hidden='true'href="http://localhost/sistema_de_ponto/index.php/cadastro">Gerar Relatório</button>
  							</div>
  						</div> 
  						
  					</div>
  					
				</div>
			</ul>	
  		</div>
  		<div class="modal-footer">
    		<button class='btn' id='btSair' data-dismiss='modal' aria-hidden='true'>Sair</button>
  		</div>
	</div>
		

	</body>
</html>