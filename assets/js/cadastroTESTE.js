$(document).ready(function()
{
	$('#confirme').click(function()
	{
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
		
		usuario = JSON.stringify(usuario);
		endereco = JSON.stringify(endereco);
		
		alert(usuario);
		alert(endereco);
		
		$.post("/sistema_de_ponto/index.php/cadastro/save", {"user": usuario, "address": endereco}, function()
		 {
 			//	retorno = $.parseJSON(retorno);
 				//console.log(parseInt(retorno.Msg) + 1);
 				//console.log(retorno);
 				
		 });
		
	});
});
