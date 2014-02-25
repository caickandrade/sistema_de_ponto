$(document).ready(function()
{
	actions();	
});
function actions () 
{
	$('#baterPonto').click(function(){
		$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Bater Ponto</h3>");
		$("#modalBatePonto").modal('show');
	});
	
	$('#fecharPonto').click(function(){
		$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Fechar Ponto</h3>");
		//$(".boxtext").html("<textarea  id='texto' rows='7' cols='9950' placeholder='Justifique'></textarea>");
		//$(".botaoPonto").html("<button class='btn' id='btFecharPonto' data-dismiss='modal' aria-hidden='true'>Fechar Ponto</button>");
		$("#modalFechaPonto").modal('show');
	});
	
	$("#btBaterPonto").click(function(){
		//alert("bateu o ponto");
		//parent.location = "http://localhost/sistema_de_ponto/index.php/batePonto";
		var dados = {};
		dados.texto = $("#texto").val();
		
		var url = "/sistema_de_ponto/index.php/batePonto/salvaLogin";
		
		data =  JSON.stringify(dados);
		
		$.post(url, {"data":data}, function(retorno)
		{	
			console.log(retorno);
			if(retorno.msg == 'sucesso'){
				$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Sucesso</h3>");
				$(".boxtext").html("<p>Operação realizada com sucesso</p>");
				$("#pontoModal").modal('show');
				//parent.location = "http://localhost/sistema_de_ponto/index.php/home";
			}
			else{
				$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Sucesso</h3>");
				$(".boxtext").html("<p>"+retorno.msg+"<p>");
				$("#pontoModal").modal('show');
			}
		}, "json");
		
	});
	
	
	$("#btFecharPonto").click(function(){
		parent.location = "http://localhost/sistema_de_ponto/index.php/fechaPonto";
	});
	
}