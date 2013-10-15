<?php

class LoginControl extends CI_Controller {
	
	public function index()
	{
		$this->load->view("login");
	}
	
	public function verificarLogin()
	{
		//carregando model	
		$this->load->model("loginmodel");
		
		//recebendo dados do email e senha para serem conferidos
		$login = json_decode($this->input->post('login'));
		
		//criando instância do model loginmodel para verificar dados
		$verifyLogin = new LoginModel();
		
		//chamando a função do model de verificação
		$retornoVerifyLogin = $verifyLogin->doLogin($login->email, $login->password);
		
		//se o retorno da função for 0 é porque deu tudo certo
		if($retornoVerifyLogin == 0)
		    $this->load->view("sucesso");
		else {
			
			//se o retorno da função for 1 é porque o usuário ou a senha estão incorretos
			if($retornoVerifyLogin == 1)
			{
			    $response = array(
					"msg" => "usuario e senha incorretos"
				);
				echo json_encode($response);
			}
			else 
			{
				//se o retorno da função for 2 é porque o email não existe no banco de dados
				if($retornoVerifyLogin == 2)
				{
					$response = array(
						"msg" => "email não existe"
					);
					echo json_encode($response);
				}	
				
			}
		
		}
		
	}
	
}
