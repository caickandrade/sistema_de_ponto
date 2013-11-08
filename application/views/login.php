<?php  $this->load->view('header')
?>	
<html>

  <head>
    <meta charset="utf-8">
    <title>Sistema de Ponto</title>

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
  </body>
</html>