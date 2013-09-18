$(document).ready(function(){
	actions();
	
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
			phone: {
				number: true
			},
			phone2: {
				number: true
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
			phone: {
				number: "Este campo aceita somente números"
			},
			phone2: {
				number: "Este campo aceita somente números"
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


