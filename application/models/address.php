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
	
	/*
	function excluiAddress($id){
		$endereco = new Address();
		$endereco->where("id",$id)->get();
		$endereco->delete();
	}*/
	
	function editarAddress($address)
	{
		
		$endereco = array(
		'street' => $address->rua,
		'number' => $address->numero,
		'neighborhood' => $address->bairro,
		'city' => $address->cidade,
		'state' => $address->estado,
		'complement' => $address->complemento,
		'zip_code' => $address->cep
		);
		$newAddress = new Address();
		$newAddress->where("id",$address->id)->update($endereco);
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
	
	function getAddress($id){
		$this->load->model("address");
		$end = new Address();
		
		$end = $end->where("id",$id)->get();
		
		return $end;
	}
	
}

/* End of file adress.php */
/* Location: ./application/models/adress.php */
