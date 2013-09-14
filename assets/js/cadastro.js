$(document).ready(function(){
	X();
	
});


function X(){
	$("#salvar").click(function(){
		
		var obj = {};
		obj.nome = $("#nome").val();
		obj.senha = $("#senha").val();
		obj.telefone1 = $("#telefone1").val();
		obj.telefone2 = $("#telefone2").val();
		obj.email = $("#email").val();
		obj.aniversario = $("#aniversario").val();
		obj.rua = $("#rua").val();
		obj.numero = $("#numero").val();
		obj.bairro = $("#bairro").val();
		obj.estado = $("#estado").val();
		obj.cidade = $("#cidade").val();
		obj.complemento = $("#complemento").val();
		obj.cep = $("#cep").val();
		obj.cargo = $("#cargo").val();
		
		
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

$(".isBlanck").OnBlur(function()){
	if($(this).val()==""){
		
			document.getElementById($(this)).style.backgroundColor="red";
		
	}
}
