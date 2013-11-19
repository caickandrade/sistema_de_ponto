<?php $this->load->view('header')
?>
<head>
	
	<title>Busca</title>
	<script src = "<?php echo base_url('/assets/js/typeahead.min.js')?>"> </script>
	<script src = "<?php echo base_url('/assets/js/busca.js')?>" ></script>
	


</head>cd

	<div class="search">
		Buscar
		<input type="text" class="text-search span5"  id="buscar" />	
		<input type="image" src="<?php echo base_url('/assets/img/search.png')?>" alt="Submit" class="searchButton" id="pesquisar">															
	</div>
		<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Título do modal</h3>
		</div>
		<div class="modal-body">
		<p>E aqui o conteúdo...</p>
	  	</div>
	  	<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
			<button class="btn btn-primary">Salvar</button>
	  	</div>
	</div>
	
<body>

	
</body>

</html>