$(document).ready(function() {
		activia();
	});
	
	
function activia(){
	
	    $('#buscar').typeahead({
	             name: 'buscarUser',
	             remote: '/sistema_de_ponto/index.php/busca/getUser?query=%QUERY',
	             minLenght: 3,
	             limit: 6
        });
        
}