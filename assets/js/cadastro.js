$(document).ready(function(){
	actions();	
	loads();
});

//TODOS OS LOADS DA PÁGINA DEVEM SER IMPLEMENTADOS AQUI.
function loads(){
	loadPositions();
}

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

function actions(){
	$('.estado').click(function(){		
		var estado = $.trim($(this).text());
		$('#estado').val(estado);
	});

	/*$("#phone").mask("(99)9999-9999");
	$("#phone2").mask("(99)9999-9999");
	$("#cep").mask("99.999-999");
	$("#nascimento").mask("99/99/9999");*/	


	
	$('#confirme').click(function(){				
		var usuario = {};
		var endereco = {};
		usuario.nome = $("#Name").val();
		usuario.email = $("#email").val();
		usuario.senha = $("#senha").val();
		usuario.tel1 = $("#phone").val();
		usuario.tel2 = $("#phone2").val();
		usuario.datanasc = $("#nascimento").val();
		usuario.id_cargo = parseInt($('#funcao option:selected').attr('id'));

		endereco.estado = $("#estado").val();
		endereco.cep = $("#cep").val();
		endereco.bairro = $("#bairro").val();
		endereco.cidade = $("#cidade").val();
		endereco.rua = $("#rua").val();
		endereco.numero = $("#numero").val();
		endereco.complemento = $("#complemento").val();

		
		var url = "/sistema_de_ponto/index.php/cadastro/save";
		
		user =  JSON.stringify(usuario);		
		address =  JSON.stringify(endereco);
		//CRIANDO OBJETO DATA COM O USUÁRIO E ENDEREÇO
		var data = {};
		data.user = usuario;
		data.address = endereco;
		data = JSON.stringify(data);
		
		//ENVIANDO OBJETO DATA
		//obs.: ESTAVA FALTANDO A VARIÁVEL "RETORNO" em FUNCTION do $.POST
		$.post(url, {"data":data},function(retorno){
			alert(retorno.msg + " UTILIZEM O DIALOG DO JQUERY UI PARA DAR O RETORNO DA MENSAGEM BUNITIM! E LIMPEM TODOS OS CAMPOS PARA CADASTRAR UMA NOVA PESSOA :D");
			
			if(retorno.msg == "Salvo com sucesso!"){
				window.location.reload();
			}
			},"json");
		});
	/*
	$("#formu").validate({

		rules: {
			Name: {
				required: true,
				minlength: 5
			},
			senha: {
				required: true,
				minlength: 5
			},
			email: {
				required: true
			},
			cep: {
				number: false
			},
			funcao: {
				required: true
			}
		},
		
		messages: {
			Name: {
				required: "Este campo é obrigatório",
				minlength: "Você deve digitar no mínimo {0} caracteres"
			},
			senha: {
				required: "Este campo é obrigatório",
				minlength: "Você deve digitar no mínimo {0} caracteres"
			},
			email: {
				required: "Este campo é obrigatório"
			},
			funcao: {
				required: "Este campo é obrigatório"
			}
			
		}
	});*/
}


