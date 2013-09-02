$(document).ready(function()
{
	$('#botao').click(function()
	{ 		
		var usuario={};
		var endereco={};
		
		usuario.nome=$("#nome").val();
		usuario.email=$("#email").val();
		usuario.funcao=$("#funcao").val();
		usuario.senha=$("#senha").val();
		usuario.tel1=$("#tel1").val();
		usuario.tel2=$("#tel2").val();
		
		endereco.rua=$("#rua").val();
		endereco.numero=$("#numero").val();
		endereco.bairro=$("#bairro").val();
		endereco.cidade=$("#cidade").val();
		endereco.estado=$("#estado").val();
		endereco.comp=$("#comp").val();
		endereco.cep=$("#cep").val();
		
		usuario = JSON.stringify(usuario);
		endereco = JSON.stringify(endereco);
		
		console.log(usuario);
		console.log(endereco);
		
		 $.post("/sistema_de_ponto/index.php/login", {"user": usuario, "address": endereco}, function()
		 {
 			//	retorno = $.parseJSON(retorno);
 				//console.log(parseInt(retorno.Msg) + 1);
 				//console.log(retorno);
 				
		 });
		 
 		
	});
	
	$('#del').click(function()
	{
		var iddelete = $("#iddel").val();
		
		var iddel = {};
		
		iddel.id = iddelete;
		
		iddel = JSON.stringify(iddel);
		console.log(iddel);
		
		$.post("/sistema_de_ponto/index.php/login/delete", {"id": iddel}, function(retorno)
		{
			console.log(retorno);
		})
	})
	
	
});


