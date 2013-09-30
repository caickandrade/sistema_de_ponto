$(document).ready(function(){
	actions();
	
});

function actions(){
	$('.estado').click(function(){
		console.log('vish');
		var estado = $.trim($(this).text());
		$('#estado').val(estado);
	});
	$("#phone").mask("(99)9999-9999");
	$("#phone2").mask("(99)9999-9999");
	$("#cep").mask("99.999-999");
	

	
	$('#confirme').click(function(){
		console.log('outroVishh');
		alert ("eita");
		var usuario = {};
		var endereco = {};

		usuario.nome = $("#Name").val();
		usuario.email = $("#email").val();
		usuario.senha = $("#senha").val();
		usuario.tel1 = $("#phone").val();
		usuario.tel2 = $("#phone2").val();
		usuario.datanasc = $("#nascimento").val();
		usuario.id_cargo = $("#funcao").val();

		endereco.estado = $("#estado").val();
		endereco.cep = $("#cep").val();
		endereco.bairro = $("#bairro").val();
		endereco.cidade = $("#cidade").val();
		endereco.rua = $("#rua").val();
		endereco.numero = $("#numero").val();
		endereco.complemento = $("#complemento").val();

		alert("eita");
		var url = "http://localhost/sistema_de_ponto/index.php/cadastro/save";
		alert("eita");
		var user =  JSON.stringify(usuario);
		alert("eita2");
		var address =  JSON.stringify(endereco);



		alert(user);
		alert(address);

		$.post(url, {'user':user,'address':address},function(retorno){
									/*retorno = $.parseJSON(retorno);*/
								
								});
	});
	
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
				number: true
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
	});
}


