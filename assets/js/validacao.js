$(document).ready(function(){
	X();
});


function X(){
	$("#botaoSalvar").click(function(){
		var obj = {};
		obj.nome = $("#nome").val();
		obj.senha = $("#senha").val();
		obj.email = $("#email").val();
		obj.rua = $("#rua").val();
		obj.numero = $("#numero").val();
		var url = "http://localhost/sistema_de_ponto/index.php/cadastro/valida";
		var dados =  JSON.stringify(obj);
		$.post(url, {'dados':dados},function(retorno){
									/*retorno = $.parseJSON(retorno);*/
									
								});
	});
	
	$("#botaoDeletar").click(function(){
		var obj = {};
		obj.identificador = $("#ident").val();
		var url = "http://localhost/sistema_de_ponto/index.php/teste/delete";
		var dados =  JSON.stringify(obj);
		$.post(url, {'dados':dados},function(retorno){
									/*retorno = $.parseJSON(retorno);*/
									
								});
	});
	
}
