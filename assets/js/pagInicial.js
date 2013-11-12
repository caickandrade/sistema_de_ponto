$(document).ready(function(){
	actions();	
});

function actions(){
	$("#menuCadastro").click(function(){
		$(".modal-body").html("");
		$("#myModal").modal('show');
	});
}
