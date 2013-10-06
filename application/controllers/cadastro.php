<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function index()
	{
		$this->load->view("cadastro");
	}
	

	public function save()

	{

		$address = json_decode($this->input->post("address"));
		$user = json_decode($this->input->post("user"));
		//$data = json_decode($this->input->post('dados'));
		
		$newAddress = new Address();
		$newUser = new User();
		
		/*
		$newAddress->street = $data->rua;
		$newAddress->number = $data->numero;
		$newAddress->state = $data->estado;
		$newAddress->city = $data->cidade;
		$newAddress->neighborhood = $data->bairro;
		$newAddress->complement = $data->complemento;
		$newAddress->zip_code = $data->cep;
		$newAddress->save();
		
		$newUser->name = $data->nome;
		$newUser->password = $data->senha;
		$newUser->email = $data->email;
		$newUser->phone1 = $data->tel1;
		$newUser->phone2 = $data->tel2;
		$newUser->birthday = $data->datanasc;
		$newUser->addresses_id = $newAddress->id;
		$newUser->id_function = $data->id_cargo;
		$newUser->save();
		 */
		//$this->load->model('ValidacaoUtil');
		$this->load->model('ValidacaoUtil');
		
		$retornoValidacaoUser = $this->ValidacaoUtil->validaCamposUser($user);
		
		if(($retornoValidacaoUser == TRUE))
		{
			$response = array ("ERRO"=>"Campos obrigatorios usuario nao preenchidos");
			
			echo json_encode($response);
		}
		else 
		{
				$retornoValidacaoAddress = $this->ValidacaoUtil->validaCamposAddress($address);
				
				if(($retornoValidacaoAddress == TRUE))
				{
					$response = array ("ERRO"=>"Campos obrigatorios endereco nao preenchidos");
					echo json_encode($response);
				}	
	
				else 
				{
					$retornoEmail = $newUser->emailExiste($user->email);
					
					if($retornoEmail == TRUE)
					{
						$response = array("ERRO"=>"Email existente");
						
						echo json_encode($response);
					}
					else
					{
						$idEnd = $newAddress->salvarAddress($address);
						$newUser->salvarUser($user, $idEnd);	
					}
				}
		}	
	}
	
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */