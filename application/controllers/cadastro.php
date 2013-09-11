<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function index()
	{
		$this->load->view("cadastro");
	}
	

	public function save()

	{
		$address = (Object) array();
		$user = (Object) array();
		
		$address->rua = "Santa Rita de Cassia";
		$address->numero = 827;
		$address->bairro = "Sao Jose";
		$address->cidade = "Montes Claros";
		$address->estado = "Minas Gerais";
		$address->complemento = " ";
		$address->cep = "39400344";
		
		$user->nome = "Caick Andrade";
		$user->tel1 = "3891280415";
		$user->tel2 = "3891280416";
		$user->email = "caila@ig.com.br";
		$user->senha = "teste123";
		$user->datanasc = "1994-9-1";
		
		//echo var_dump($address);
		//echo var_dump($user);
		
		
//////////////////////////////////////////////////////////////////////////////////////////////////////
		
		// $address = json_decode($this->input->$post("address"));
		// $user = json_decode($this->input->$post("user"));
		
////////////////////////////////////////////////////////////////////////////////////////////////////// 		
		
		
		$newAddress = new Address();
		$newUser = new User();
		$retornoEmail = $newUser->emailExiste($user->email);
		
		if($retornoEmail == TRUE)
		{
			$response = array
			(
				"Msg"=>"Email existente" 
			);
			
			echo json_encode($response);
		}
		else
		{
			$idEnd = $newAddress->salvarAddress($address);
			$newUser->salvarUser($user, $idEnd);	
		}
				
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */