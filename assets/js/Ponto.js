$(document).ready(function()
{
	acao();	
});
function acao () 
{
	$('#baterPonto').click(function(){
		$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Bater Ponto</h3>");
		//$(".modal-body").html("<button class='btn' id='btBatePonto' data-dismiss='modal' aria-hidden='true'>Abrir Ponto</button>");
		$("#modalBatePonto").modal('show');
	});
	
	$('#fecharPonto').click(function(){
		$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Fechar Ponto</h3>");
		//$(".boxtext").html("<textarea  id='texto' rows='7' cols='9950' placeholder='Justifique'></textarea>");
		//$(".modal-body").html("<button class='btn' id='btFechaPonto' data-dismiss='modal' aria-hidden='true'>Fechar Ponto</button>");
		$("#modalFechaPonto").modal('show');
	});
	
	$("#btBatePonto").click(function(){
		
		var dados = {};
		dados.texto = $("#texto").val();
		
		var url = "/sistema_de_ponto/index.php/batePonto/salvaLogin";
		
		data =  JSON.stringify(dados);
		
		$.post(url, {"data":data}, function(retorno)
		{	
			console.log(retorno);
			if(retorno.msg == 'sucesso'){
				$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Sucesso</h3>");
				$(".mensagem").html("<p>Operação realizada com sucesso</p>");
				$("#modalMensagem").modal('show');
				//parent.location = "http://localhost/sistema_de_ponto/index.php/home";
			}
		}, "json");
		
	});
	
	
	$("#btFechaPonto").click(function(){
		var dado = {};
		dado.texto = $("#tex").val();
		console.log(dado.texto);
		var url = "/sistema_de_ponto/index.php/fechaPonto/salvaLogout";
		
		data =  JSON.stringify(dado);
		
		$.post(url, {"data":data}, function(retorno)
		{	
			console.log(retorno.msg);
			if(retorno.msg == 'sucesso'){
				$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Sucesso</h3>");
				$(".mensagem").html("<p>Operação realizada com sucesso</p>");
				$("#modalMensagem").modal('show');
				//parent.location = "http://localhost/sistema_de_ponto/index.php/home";
			}
			else{
				$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Falha</h3>");
				$(".mensagem").html("<p>"+retorno.msg+"</p>");
				$("#modalMensagem").modal('show');
			}
		}, "json");
		//parent.location = "http://localhost/sistema_de_ponto/index.php/fechaPonto";
	});
	
}