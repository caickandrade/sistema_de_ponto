<html>
	<<<<<<< HEAD

	=======
	<head>
		<script src = "<?php echo base_url('/assets/js/Ponto.js')?>" type="text/javascript"></script>
	</head>
	<div class="container">
		>>>>>>> f116330bc2557259dc44f5a27babc57e3f06e3c9
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
					<li>
						<a href="http://localhost/sistema_de_ponto/">Sair</a>
					</li>

				</ul>

			</div>
		</div>

		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					×
				</button>
				<h3 id="myModalLabel">Aviso</h3>
			</div>
			<div class="modal-body">

			</div>
			<div class="modal-footer">
				<button class="btn" id="btModal" data-dismiss="modal" aria-hidden="true">
					Fechar
				</button>
			</div>
		</div>

		</body>
</html>