$(document).ready(function() {	
		actions();
	});
	
	
function actions(){
	    $('#procurar').typeahead({	    
	             name: 'buscarUser',
	             remote: '/sistema_de_ponto/index.php/busca/getUserAutoComplete?query=%QUERY',
	             minLenght: 3,
	             limit: 6
        });
        
}