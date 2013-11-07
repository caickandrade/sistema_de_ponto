$(document).ready(function(){
	actions();	
	loads();
});

//TODOS OS LOADS DA PÁGINA DEVEM SER IMPLEMENTADOS AQUI.
function loads(){
	loadPositions();
	getAddress();
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

	$('.searchButton').click(function(){
		searchUser();		
	});

	/*$("#phone").mask("(99)9999-9999");
	$("#phone2").mask("(99)9999-9999");
	$("#CPF").mask("999.999.999-99");
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
		usuario.cpf = parseInt($("#CPF").val());

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
		//$("#dialog").dialog();
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

function searchUser(){	
	var data = {};
	
	data.filtro = $('.filtro option:selected').val();
	data.field = $('.text-search').val();	
	if(data.field == "" || data.field == null || data.field == undefined){
		alert("Preencha o campo de busca");
	}
	else{
		var url = "/sistema_de_ponto/index.php/cadastro/getUser";
		data = JSON.stringify(data);
		$.post(url,{'data':data},function(retorno){
			var retornoSearch =jQuery.parseJSON(retorno);
			
			var retornoData =jQuery.parseJSON(retornoSearch.data); 
			
			$('#Name').val(retornoData.name);
			$('#cpf').val(retornoData.cpf);
			$('#email').val(retornoData.email);
			
			console.log(retornoData.name);
		});
	}	
}

function getAddress(){	
	$('.cep').blur(function(event){
		var url = "/sistema_de_ponto/index.php/cadastro/getAddressByCep";
		var data = $(this).val();
		data = JSON.stringify(data);
		$.ajax({
		  url: url,
		  type: "POST",
		  async: false,
		  dataType : 'json',
		  data: { 'data':data }
		}).done(function(data) {
			console.log(data);
			rua = data.rua;
			bairro = data.bairro;
			cidade = data.cidade;
			estado = data.estado;
		});		
		event.preventDefault();
		
		$('#rua').val(rua);
		$("#bairro").val(bairro);
		$('#cidade').val(cidade);
		$('#estado').val(estado);		
	});		
}

