<head>
	<?php $this->load->view('header')
	?>
	<script src = "<?php echo base_url('/assets/js/pagInicial.js')?>" type="text/javascript"></script>

</head>
<body>

	<?php if($this->session->userdata('acesso')==4){
	?>
	<p>
		Pagina Inicial
	</p>
	<?php } ?>

	<?php $this->load->view('footer')
	?>

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

				<!-- Button to trigger modal -->
				<!--<a href="#myModal" role="button" class="btn" data-toggle="modal">Executar modal de demo</a>
				<!-- Modal -->
				<!--<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				×
				</button>
				<h3 id="myModalLabel">Aviso</h3>
				</div>
				<div class="modal-body">
				<p>
				Um aviso
				</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">
				Fechar
				</button>
				</div>
				</div>
				</div>-->

			</div>
		</div>
</body>

</html>