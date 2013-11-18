<?php $this->load->view('header')
?>
<body>

	<?php if($this->session->userdata('acesso')==4){
	?>
	<p>
		Pagina Inicial
	</p>
	<?php } ?>

	<?php $this->load->view('footer')
	?>

	<div class="cotainer">
		<?php $this->load->view('menu')?>
		
		<!-- Button to trigger modal -->
		<a href="#myModal" role="button" class="btn" data-toggle="modal">Executar modal de demo</a>
		<!-- Modal -->
		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
	</div>
</body>

</html>