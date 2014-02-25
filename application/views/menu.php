<html>
	<head>  
	<script src = "<?php echo base_url('/assets/js/Ponto.js')?>" type="text/javascript"></script>
	
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
								<a id="especifico" href="http://localhost/sistema_de_ponto/index.php/relatorios/relatorioEspecifico">Relatório Específico</a>
								<a id="geral" href="http://localhost/sistema_de_ponto/index.php/relatorios/relatorioGeral">Relatório Geral</a>
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
				
		<div id="modalBatePonto" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-header">
    		
  		</div>
  		<div class="modal-body">
    		<ul class="nav nav-pills">
    			<div class="navbar-form pull-left">
  					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<div id="boxtext" class="boxtext">
  									<textarea  id='texto'  rows='7' cols='9950' placeholder='Justifique'></textarea>
  								</div>
  								<div class="botaoPonto">
  									<button class='btn' id='btBaterPonto' data-dismiss='modal' aria-hidden='true'>Abrir Ponto</button>
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
	
	
	<div id="modalFechaPonto" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-header">
    		
  		</div>
  		<div class="modal-body">
    		<ul class="nav nav-pills">
    			<div class="navbar-form pull-left">
  					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">
								<div id="boxtext" class="boxtext">
  									<textarea  id='texto'  rows='7' cols='9950' placeholder='Justifique'></textarea>
  								</div>
  								<div class="botaoPonto">
  									<button class='btn' id='btFecharPonto' data-dismiss='modal' aria-hidden='true'>Fechar Ponto</button>
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
	
	</body>
</html>