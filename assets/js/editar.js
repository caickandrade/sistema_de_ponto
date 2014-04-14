$(document).ready(function(){
	acaoEditar();
});

function acaoEditar(){
	var url = "/sistema_de_ponto/index.php/editarExcluir/editar";
	
	var dados = {};
		
		//nao sei validar o login então estou tentando de acordo com o que vi aqui na infobits + algumas funções da internet, qualquer erro, favor me corrigir
		
		
		dados = JSON.stringify(dados);
	
		$.post(url, {"dados":dados}, function(retorno)
		{
			
			console.log(retorno);
			
			}
		}, "json");
}
