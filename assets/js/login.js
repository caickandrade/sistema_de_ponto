$(document).ready(function(){
	actions();	
});

function actions()
{
	$('#entrar').click(function(){
		var login = {};
		
		//nao sei validar o login então estou tentando de acordo com o que vi aqui na infobits + algumas funções da internet, qualquer erro, favor me corrigir
		
		login.email = $("#email").val();
		login.password = $("#senha").val();
		
		var url = "/sistema_de_ponto/index.php/logincontrol/verificarLogin";
		
		login = JSON.stringify(login);
	
		$.post(url, {"login":login}, function(retorno){
			
			if(retorno.msg=="Logando"){
				//parent.location = "index.php/home";
			}
			else{
				alert(retorno.msg)
				window.location.reload();
			}
		}, "json");
		
		
		
	});
}
