<?php $this->load->view('header') ?>	
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