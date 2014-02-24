$(document).ready(function()
{
	actions();	
});
function actions () 
{
	$('#baterPonto').click(function(){
		$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Bater Ponto</h3>");
		$(".botaoPonto").html("<button class='btn' id='btBaterPonto' data-dismiss='modal' aria-hidden='true'>Abrir Ponto</button>");
		$("#pontoModal").modal('show');
		  
	});
	
	$('#fecharPonto').click(function(){
		$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Fechar Ponto</h3>");
		$(".botaoPonto").html("<button class='btn' id='btFecharPonto' data-dismiss='modal' aria-hidden='true'>Fechar Ponto</button>");
		$("#pontoModal").modal('show');
		  
	});
	
	
	$("#btBaterPonto").live('click',function(){
		alert("bateu o ponto");
		//parent.location = "http://localhost/sistema_de_ponto/index.php/batePonto";
	});
	
	$("#btFecharPonto").click(function(){
		parent.location = "http://localhost/sistema_de_ponto/index.php/fechaPonto";
	});
	
}