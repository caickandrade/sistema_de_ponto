<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function index()
	{
			//se a pessoa tiver acesso
	//	if($this->session->userdata('acesso')==2){
			$this->load->view("cadastro");
		//}
		
		
		//se a pessoa não possuir acesso
	//	else{
	//		echo "<script> parent.location = 'http://localhost/sistema_de_ponto/'; </script>";
		//}
	}
	
	public function loadPositions(){
		$this->load->model("position");
		$position = new Position();	
		$array = array('codigo >' =>1,'codigo <'=>8);
		$position->where($array);	
		echo json_encode($position->get()->all_to_json());
	}

	public function save()
	{

		//CARREGANDO MODEL		
		$this->load->model("user");
		$this->load->model("address");
		//RECEBENDO USUÁRIO E ENDEREÇO DA INTERFACE
		//FUNÇÃO JSON DECODE PEGA UMA STRING JSON E TRANSFORMA EM UM OBJETO
		$data = json_decode($this->input->post("data"));
				

		$newAddress = new Address();
		//INSTANCIANDO NOVO USUÁRIO
		$newUser = new User();
		//VERIFICANADO SE E-MAIL JÁ FOI CADASTRADO	
		//VALIDANDO USUÁRIO E ENDEREÇO		
		$retornoValidacaoUser = $newUser->validaCamposUser($data->user);
		$retornoValidacaoAddress = $newAddress->validaCamposAddress($data->address);
		
		if($retornoValidacaoUser == FALSE || $retornoValidacaoAddress == FALSE){
			$response = array(
				"data"=> "",
				"msg" => "Campos obrigatórios não preenchidos!"
			);
			echo json_encode($response);
		}
		else{
			$retornoEmail = $newUser->emailExiste($data->user->email);
			if($retornoEmail == TRUE){
				$response = array(
					"data"=> "",
					"msg" => "E-mail já existe"
				);
				echo json_encode($response);
			}
			else{
				//SALVANDO ENDEREÇO
				$idEnd = $newAddress->salvarAddress($data->address);
				//SALVANDO USER
				$newUser->salvarUser($data->user, $idEnd);
					$response = array(
					"data"=> "",
					"msg" => "Salvo com sucesso!"
				);
				echo json_encode($response);					
			}			
		}
	
	}
	
	public function getUser(){
		$this->load->model('user');
		$user = new User();		
		$data = json_decode($this->input->post("data"));
		
		if($data->filtro == '1')
			$user->like("name","%".$data->field."%")->get();
		$response = array(
			"data"=> $user->to_json(),
			"msg" => "Salvo com sucesso!"
		);
		echo json_encode($response);
	}
	
	public function getAddressByCep(){		
		$data = json_decode($this->input->post('data'),TRUE);
		$pontos = array(",", ".","-");
		$cep = str_replace($pontos, "", $data);
		$reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);
		 
		$dados['sucesso'] = (string) $reg->resultado;
		$dados['rua']     = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
		$dados['bairro']  = (string) $reg->bairro;
		$dados['cidade']  = (string) $reg->cidade;
		$dados['estado']  = (string) $reg->uf;
		 
		echo json_encode($dados);	 
	}
	
}
/* End of file welcome.php */
/* Location: ./application/controllers/cadastro.php */
