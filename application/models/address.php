<?php

class Address extends DataMapper {
	
	var $table = "addresses";
	//var $has_one = array("user");
	
	function __construct($id = NULL)
    {    	
        parent::__construct($id);		
    }
	
	function salvarAddress($address)
	{
		$newAddress = new Address();
			
		$newAddress->street = $address->rua;
		$newAddress->number = $address->numero;
		$newAddress->neighborhood = $address->bairro;
		$newAddress->city = $address->cidade;
		$newAddress->state = $address->estado;
		$newAddress->complement = $address->complemento;
		$newAddress->zip_code = $address->cep;
		
		$newAddress->save();
		
		return $newAddress->id;
	}
	//validar enderçeo é um método do objeto endereço
	function validaCamposAddress($address)
	{
		//carregando model		
    	$this->load->model("validacaoUtil");
		//instanciando um objeto de validação
		$validar = new ValidacaoUtil();	
		if(($validar->isBlank($address->rua)) || ($validar->isBlank($address->numero)) || ($validar->isBlank($address->bairro)) || ($validar->isBlank($address->cidade)))
			return FALSE;// MAIS COERENTE RETORNAR FALSE QUANDO A VALIDAÇÃO DER ERRADO			    
		else 
			return TRUE;
	}	
	
}

/* End of file adress.php */
/* Location: ./application/models/adress.php */
