<head>
	<?php $this->load->view('header')
	?>
	<script src = "<?php echo base_url('/assets/js/pagInicial.js')?>" type="text/javascript"></script>

</head>
<body>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
				<div class="imagem">
					<img src="<?php echo base_url('/assets/img/teste.jpg')?>" alt="not found" class="img-rounded">
				</div>
			</div>
			<div class="span9">
				<?php $this->load->view('menu')?>
			</div>
			
		</div>
	</div>
	<div class="container-fluid rodape">
            <div class="row-fluid">
                <div class="span2 footer">
                    
                </div>
                <div class="span9 footer">
                	<?php $this->load->view('footer')?>   
                </div>
            </div>
    </div>

</body>

</html>