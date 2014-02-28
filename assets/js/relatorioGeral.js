$(document).ready(function()
{
	$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Relatório Geral</h3>");
	$("#relatorioGeralModal").modal('show');
	acaoRelatorioGeral();
});
function acaoRelatorioGeral () 
{
	
	$('#geraRelatorio').click(function(){
		var data = {};
		data.inicio = $("#dataInicio").val();
		data.termino = $("#dataTermino").val();
		
		var data = JSON.stringify(data);
		
		var url = "http://localhost/sistema_de_ponto/index.php/relatorios/criaRelatorioGeral";
		
		$.post(url, {"data":data}, function(retorno)
		{	
			console.log(retorno);
		});
		
	});
}