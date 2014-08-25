$(document).ready(function(){
	acaoEditar();
	loadPositions();
});

function loadPositions(){
	var url = "/sistema_de_ponto/index.php/cadastro/loadPositions";
	$.post(url,function(retorno){
		var retorno = $.parseJSON(retorno);		
		$.each(retorno,function(i,item){
			var data = $.parseJSON(item);
			var html = "<option id="+data.id+">"+data.description+"</option>";
			$('#funcao').append(html);		
		});
	},"json"); 
}

function acaoEditar(){
	$("#editar").click(function(){
		
		var usuario = {};
		var endereco = {};
		usuario.id = $("#ident").val();
		usuario.nome = $("#Name").val();
		usuario.email = $("#email").val();
		usuario.senha = $("#senha").val();
		usuario.tel1 = $("#phone").val();
		usuario.tel2 = $("#phone2").val();
		usuario.datanasc = $("#nascimento").val();
		usuario.id_cargo = parseInt($('#funcao option:selected').attr('id'));
		usuario.cpf = parseInt($("#CPF").val());
		usuario.endereco = $("#idEnd").val();

		alert(usuario.cpf);
		alert(usuario.nome);
		alert(usuario.id_cargo);

		endereco.id = $("#idEnd").val();
		endereco.estado = $("#estado").val();
		endereco.cep = $("#cep").val();
		endereco.bairro = $("#bairro").val();
		endereco.cidade = $("#cidade").val();
		endereco.rua = $("#rua").val();
		endereco.numero = $("#numero").val();
		endereco.complemento = $("#complemento").val();

		
		alert(endereco.rua);
		alert(endereco.bairro);
		
		var url = "/sistema_de_ponto/index.php/editarExcluir/salvarEdicao";
		
		user =  JSON.stringify(usuario);		
		address =  JSON.stringify(endereco);
		//CRIANDO OBJETO DATA COM O USUÁRIO E ENDEREÇO
		var data = {};
		data.user = usuario;
		data.address = endereco;
		data = JSON.stringify(data);
		
		//ENVIANDO OBJETO DATA
		//obs.: ESTAVA FALTANDO A VARIÁVEL "RETORNO" em FUNCTION do $.POST
		/*$.post(url, {"data":data},function(retorno){
			alert(retorno.msg);
			$(".modal-body").html("<p>"+retorno.msg+"<p>");
				//console.log(retorno.msg);
			$("#myModal").modal('show');
			if(retorno.msg == "Editado com sucesso!"){
				//window.location.reload();
				recarregar = true;
			}
			},"json");
			*/
			
		$.post(url, {"data":data}, function(retorno){	
				console.log(retorno);
				if(retorno.msg == 'sucesso'){
					alert("editado com sucesso");
				}
		}, "json");
		
	});
}
