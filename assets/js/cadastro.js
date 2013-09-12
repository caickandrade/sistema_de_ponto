$(document).ready(function(){
	actions();
	
});

function actions(){
	$('.estado').click(function(){
		console.log('vish');
		var estado = $.trim($(this).text());
		$('#estado').val(estado);
	});
}
$(".isBlanck").blur(function(){
	if($(this).val()==""){
		//Perera: Tava errado. Utilize Jquery.
	}
});
