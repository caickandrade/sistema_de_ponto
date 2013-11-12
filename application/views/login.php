<?php  $this->load->view('header')
?>	
<html>

  <head>
    <meta charset="utf-8">
    <title>Sistema de Ponto</title>
	<script src = "<?php echo base_url('/assets/js/login.js')?>" type="text/javascript"></script>
  </head>

  <body>
	<div class="imagem" id="imglog">
			<img src="<?php echo base_url('/assets/img/teste.jpg')?>" alt="not found" class="img-rounded">
    <div id='formlog'>
		<div class="form-signin">
        	<h2 class="form-signin-heading">Sistema de Ponto</h2>
        	<input type="text" name='email' id='email' class="input-block-level" placeholder="Email">
        	<input type="password" name='senha' id='senha' class="input-block-level" placeholder="Senha">
        	<button id="entrar" name="entrar" class="btn btn-large btn btn-success" type="submit">Entrar</button>
      	</div>


    </div>
	

	</div>
	<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    		<h3 id="myModalLabel">Aviso</h3>
  		</div>
  		<div class="modal-body">
    		<p>Um aviso</p>
    		<?php $status = "<script>document.getElement ;</script>";if($status=="valor") {  echo "uma";}else {  echo $status;}?>
  		</div>
  		<div class="modal-footer">
    		<button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
  		</div>
	</div>
  </body>
</html>