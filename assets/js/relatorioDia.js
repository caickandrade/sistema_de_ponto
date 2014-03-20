$(document).ready(function()
{
			
	acaoRelatorioDia();
});
function acaoRelatorioDia() 
{

	$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Relatório Específico por Dia</h3>");
	$("#relatorioDiaModal").modal('show');
	
	$('#geraRelatorioDia').click(function(){
		
		var data = {};
		data.dia = $("#Dia").val();
		
		var data = JSON.stringify(data);
		
		var url = "http://localhost/sistema_de_ponto/index.php/relatorios/criaRelatorioDia";
		
		$.post(url, {"data":data}, function(retorno)
		{	
			console.log(retorno);
		});
		
	});
}