$(document).ready(function(){
	actions();	
});

function actions()
{
	$('#btModal').click(function(){
		window.location.reload();
	});
	$('#entrar').click(function(){
		var login = {};
		
		//nao sei validar o login então estou tentando de acordo com o que vi aqui na infobits + algumas funções da internet, qualquer erro, favor me corrigir
		
		login.email = $("#email").val();
		login.password = $("#senha").val();
		
		var url = "/sistema_de_ponto/index.php/logincontrol/verificarLogin";
		
		login = JSON.stringify(login);
	
		$.post(url, {"login":login}, function(retorno)
		{	
			console.log(retorno);
			if(retorno.msg=="Logando"){

				parent.location = "http://localhost/sistema_de_ponto/index.php/home";
			}
			else{
				
				$(".modal-body").html("<p>"+retorno.msg+"<p>");
				//console.log(retorno.msg);
				$("#myModal").modal('show');
				//window.location.reload();
			}
		}, "json");
		
	});
	
	
}
