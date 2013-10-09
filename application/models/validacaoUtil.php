<?php

class ValidacaoUtil extends CI_Model 

{		

	function isBlank($campo)
	{
		$campoBlank = trim($campo);
		if(empty($campoBlank))
		{	
			return TRUE;
		}
		else
			return FALSE;	

	}
		
	function validaCamposUser($user)
	{
		if(($this->isBlank($user->nome)) || ($this->isBlank($user->email)) || ($this->isBlank($user->senha)) || ($this->isBlank($user->id_cargo)))
			return TRUE;
		else 
			return FALSE;	
	}
	
	function validaCamposAddress($address)
	{
		if(($this->isBlank($address->rua)) || ($this->isBlank($address->numero)) || ($this->isBlank($address->bairro)) || ($this->isBlank($address->cidade)))
		    return TRUE;
		else 
			return FALSE;
	}
	
}
