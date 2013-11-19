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
	
</body>
	
</html>