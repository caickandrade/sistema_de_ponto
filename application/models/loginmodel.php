<?php

class LoginModel extends DataMapper {
	
	var $table = "logins";
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	function doLogin($email, $password)
	{
		//instancia novo usuario
		$verify = new User();
		
		//pega o usuario do bd que tem o email passado como parametro
		$verify->where('email', $email)->get();
		
		//verifica se existe
		if($verify->exists())
		{
			$senha = $verify->password;
			
			//se existir, variavel senha recebe o password do usuario e confere se é igual ao passado cmo parametro 
			if($password == $senha){
				//retorna zero se forem iguais
				return 0;
			}
			else
				//retorna um se forem diferentes
				return 1;
			
		}
		else
			//retorna 2 se o email não existir
			return 2;
		
	}
	
	function retornaDados($email){
		$retorna = new User();
		$retorna->where('email',$email)->get();
		return $retorna;
	}
	
}