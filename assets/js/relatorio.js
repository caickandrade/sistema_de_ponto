$(document).ready(function()
{
	actions();	
});
function actions () 
{
	
	$('#geral').click(function(){
		$(".modal-header").html("<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Relatório Geral</h3>");
		$("#relatorioModal").modal('show');
	});
	
	$('#geraRelatorio').click(function(){
		var data = {};
		data.inicio = $("#dataInicio").val();
		data.termino = $("#dataTermino").val();
		
		
		
		//alert(data.inicio);
		//alert(data.termino);
	});
}