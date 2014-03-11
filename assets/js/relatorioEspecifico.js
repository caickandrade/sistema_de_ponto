$(document).ready(function()
{
			
	acaoRelatorioEspecifico();
});
function acaoRelatorioEspecifico() 
{

	$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Relatório Específico por Colaborador</h3>");
	$("#relatorioEspecificoModal").modal('show');
	
	$('#geraRelatorioEspecifico').click(function(){
		
		var data = {};
		data.id = $("#id").val();
		data.inicio = $("#dInicio").val();
		data.termino = $("#dTermino").val();
		
		var data = JSON.stringify(data);
		
		var url = "http://localhost/sistema_de_ponto/index.php/relatorios/criaRelatorioEspecifico";
		
		$.post(url, {"data":data}, function(retorno)
		{	
			console.log(retorno);
		});
		
	});
}