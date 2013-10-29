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
				$novosdados = array(
                   'id_usuario'  => $verify->id,
                   'nome_usuario'     => $verify->name,
                   'acesso' => $verify->id_position,
                   'logado' => TRUE
               );

				$this->session->set_userdata($novosdados);
				echo var_dump($this->session->userdata("nome_usuario"))  ;
			}
			else
				//retorna um se forem diferentes
				return 1;
			
		}
		else
			//retorna 2 se o email não existir
			return 2;
		
	}
}