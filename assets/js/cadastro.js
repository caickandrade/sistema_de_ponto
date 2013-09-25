$(document).ready(function(){
	actions();

	$("#phone").mask("(99)9999-9999");
	$("#phone2").mask("(99)9999-9999");
	

});

function actions(){
	$('.estado').click(function(){
		console.log('vish');
		var estado = $.trim($(this).text());
		$('#estado').val(estado);
	});
	
	/*$(".isBlanck").blur(function(){
	alert("outroVishh");
		if($(this).val()==""){
			
			//Perera: Tava errado. Utilize Jquery.
			
		}
	});*/
	$('#confirme').click(function(){
		console.log('outroVishh');
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
		
		var url = "http://localhost/sistema_de_ponto/index.php/cadastro/save";
		var user =  JSON.stringify(usuario);
		var address =  JSON.stringify(endereco);

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

			// phone: {
				// number: true
			// },
			// phone2: {
				// number: true
			// },

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
			cep: {
				number: "Este campo aceita somente números"
			},
			funcao: {
				required: "Este campo é obrigatório"
			}
		}
	});
}


