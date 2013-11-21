$(document).ready(function()
{
	actions();	
});
function actions () 
{
	$('#baterPonto').click(function(){
		$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Bater Ponto</h3>");
		$(".modal-footer").html("<button class='btn' id='btBaterPonto' data-dismiss='modal' aria-hidden='true'>Confirma</button>");
		$("#myModal").modal('show');
		  
	});
	
	$('#fecharPonto').click(function(){
		$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Fechar Ponto</h3>");
		$(".modal-footer").html("<button class='btn' id='btFecharPonto' data-dismiss='modal' aria-hidden='true'>Conf</button>");
		$("#myModal").modal('show');
		  
	});
	
	$("#btBaterPonto").click(function(){
		alert("bate");
		parent.location = "http://localhost/sistema_de_ponto/index.php/batePonto";
	});
	
	$("#btFecharPonto").click(function(){
		alert("fecha");
		parent.location = "http://localhost/sistema_de_ponto/index.php/fechaPonto";
	});
	
}