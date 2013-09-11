<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function index()
	{
		$this->load->view("cadastro");
	}
	

	function valida(){
		$data = json_decode($this->input->post('dados'));
		
		if(empty($data->nome)){
			$data->mensagem = "nome requerido";
		}
		elseif (empty($data->email)) {
			$data->mensagem = "email requerido";
		}
		elseif (empty($data->senha)) {
			$data->mensagem = "senha requerida";
		}
		elseif (empty($data->aniversario)) {
			$data->mensagem = "aniversario requerido";
		}
		elseif (empty($data->cargo)) {
			$data->mensagem = "cargo requerido";
		}
		else {
			$data->mensagem = "cadastro bem sucedido";
		}
		$resposta = array ('dados'=>$data);
		echo json_encode($resposta);
	}
	
	 function save()
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
		
		echo var_dump($address);
		echo var_dump($user);
		
		
//////////////////////////////////////////////////////////////////////////////////////////////////////
		
		// $address = json_decode($this->input->$post("address"));
		// $user = json_decode($this->input->$post("user"));
		
////////////////////////////////////////////////////////////////////////////////////////////////////// 		
		
		
		$newAddress = new Address();
		$newUser = new User();
		$retornoEmail = $newUser->emailExiste($user->email);
		
<<<<<<< HEAD
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
			$newUser->salvarUser($user, $address);	
		}
				
=======

>>>>>>> 5f45269b12710d1ed8e737e658f0f2f375ae4965
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */