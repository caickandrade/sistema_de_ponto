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
		
		echo var_dump($address);
		echo var_dump($user);
		
		
//////////////////////////////////////////////////////////////////////////////////////////////////////
		
		// $address = json_decode($this->input->$post("address"));
		// $user = json_decode($this->input->$post("user"));
		
////////////////////////////////////////////////////////////////////////////////////////////////////// 		
		
		$newaddress = new Address();
		$newuser = new User();
		$newposition = new Position();
		
		$newaddress->street = $address->rua;
		$newaddress->number = $address->numero;
		$newaddress->neighborhood = $address->bairro;
		$newaddress->city = $address->cidade;
		$newaddress->state = $address->estado;
		$newaddress->complement = $address->complemento;
		$newaddress->zip_code = $address->cep;
		
		$newaddress->save();
		
		$newuser->name = $user->nome;
		$newuser->addresses_id = $newaddress->id;
		$newuser->phone1 = $user->tel1;
		$newuser->phone2 = $user->tel2;
		$newuser->email = $user->email;
		$newuser->password = $user->senha;
		$newuser->birthday = $user->datanasc;
		$newuser->id_position = "1";
		
		$newuser->save(); 
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */