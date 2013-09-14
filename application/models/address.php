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
	
}

/* End of file adress.php */
/* Location: ./application/models/adress.php */
