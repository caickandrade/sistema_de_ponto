<head>
	<?php $this->load->view('header') ?>
	<script src = "<?php echo base_url('/assets/js/pagInicial.js')?>" type="text/javascript"></script>
</head>	
<body>

	<?php if($this->session->userdata('acesso')==4){ ?>
			<p>Pagina Inicial</p>
	<?php } ?>

<?php $this->load->view('footer') ?>	

	<div class="cotainer">
		<?php $this->load->view('menu') ?>	
	</div>
	
	<!-- Modal -->
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