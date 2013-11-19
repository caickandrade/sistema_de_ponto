<html>
	<head>  
	<script src = "<?php echo base_url('/assets/js/Ponto.js')?>" type="text/javascript"></script>
  	</head>
	<div class="container">
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
								<a href="#">Consulta</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-ok"></i>Ponto<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a id="baterponto">Bater Ponto</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-list-alt"></i>Relatórios<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Horas Semanais</a>
							</li>
						</ul>
					</li>
				</ul>
				
				<ul class="nav pull-right">
                      <li><a href="http://localhost/sistema_de_ponto/">Sair</a></li>
                      
                </ul>
				
			</div>
		</div>
	</div>

<!--<div class="accordion" id="leftMenu">
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="http://localhost/sistema_de_ponto/index.php/home"> <i class="icon-home"></i> Home </a>
			</div>
		</div>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseTwo"> <i class="icon-user"></i> Usuário </a>
			</div>
			<div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
					<ul>
						<li><a href="http://localhost/sistema_de_ponto/index.php/cadastro">Cadastrar</a></li>
						<li><a href="#">Consultar</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseThree"> <i class="icon-ok"></i> Ponto </a>
			</div>
			<div id="collapseThree" class="accordion-body collapse">
				<div class="accordion-inner">
					<ul>
						<li><a href="#">Bater ponto</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFour"> <i class="icon-list-alt"></i> Relatórios </a>
			</div>
			<div id="collapseFour" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
					<ul>
						<li><a href="#">Relatórios de horas</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>-->
	<body>
				
		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    		<h3 id="myModalLabel">Aviso</h3>
  		</div>
  		<div class="modal-body">
    		
  		</div>
  		<div class="modal-footer">
    		<button class="btn" id="btModal" data-dismiss="modal" aria-hidden="true">Fechar</button>
  		</div>
	</div>		

	</body>
</html>