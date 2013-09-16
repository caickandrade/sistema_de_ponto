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
	$(".isBlanck").validate({
		rules: {
			Name: {
				required: true,
				minlength: 5
			},
			Senha: {
				required: true,
				minlength: 5
			},
			Email: {
				required: true
			}
		},
		
		messages: {
			Name: {
				required: "Este campo é obrigatório",
				minlength: "Você deve digitar no mínimo {0} caracteres"
			},
			Senha: {
				required: "Este campo é obrigatório",
				minlength: "Você deve digitar no mínimo {0} caracteres"
			},
			Email: {
				required: "Este campo é obrigatório"
			}
		}
	});
}


