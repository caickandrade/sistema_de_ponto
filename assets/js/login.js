$(document).ready(function)(){
	actions();
});

function actions()
{
	$('#entrar').click(function(){
		var log = {};
		
		//nao sei validar o login então estou tentando de acordo com o que vi aqui na infobits + algumas funções da internet, qualquer erro, favor me corrigir
		
		log.email = $("#email").val();
		log.password = $("#senha").val();
		
		var url = "/sistema_de_ponto/index.php/login";
		
		log = JSON.stringify(log);
		
		$.post(url, {"log":log}, function(retorno){
			alert(retorno.msg)
		}, "json");
		
	});
}





























