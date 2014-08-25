<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EditarExcluir extends CI_Controller {
		
	public function index()
	{
		//$this->load->view('sucesso');
	}
	
	public function excluir($id){
		$usuario = new User();
		$usuario = $usuario->pesquisaId($id);
		if($usuario->desativarUser($usuario)){
			echo "<script> parent.location = 'http://localhost/sistema_de_ponto/index.php/home'; </script>";
		}
		else{
			echo "<script> parent.location = 'http://localhost/sistema_de_ponto/index.php/consulta'; </script>";
		}
	}
	
	public function editar($id){
			
		$this->load->model("user");
		$this->load->model("position");
		$this->load->model("address");
		
		$usuario = new User();
		$endereco = new Address();
		$cargo = new Position();
		
		$usuario = $usuario->pesquisaId($id);
		$endereco = $endereco->getAddress($usuario->addresses_id);
		$cargo = $cargo->getPosition($usuario->id_position);
		
		$dados['usuario'] = $usuario;
		$dados['endereco'] = $endereco;
		$dados['cargo'] = $cargo;
		
		$this->load->view('editar',$dados);
	}
	
	public function salvarEdicao(){
			
		//CARREGANDO MODEL		
		$this->load->model("user");
		$this->load->model("address");
		
		$cargo = new Position();
		
		//FUNÇÃO JSON DECODE PEGA UMA STRING JSON E TRANSFORMA EM UM OBJETO
		$data = json_decode($this->input->post("data"));
		
		$newAddress = new Address();
		$newUser = new User();
		//VERIFICANADO SE E-MAIL JÁ FOI CADASTRADO	
		//VALIDANDO USUÁRIO E ENDEREÇO		
		echo "valida usuario";
		$retornoValidacaoUser = $newUser->validaCamposUser($data->user);
		echo "valida endereco";
		$retornoValidacaoAddress = $newAddress->validaCamposAddress($data->address);
		echo "validou";
		if($retornoValidacaoUser == FALSE || $retornoValidacaoAddress == FALSE){
				echo "mimimi";
			$response = array(
				"data"=> "",
				"msg" => "Campos obrigatórios não preenchidos!"
			);
			echo json_encode($response);
		}
		else{
			echo "uhuuuu";
			$retornoEmail = $newUser->emailEditadoExiste($data->user->email,$data->user->id);
			if($retornoEmail == TRUE){
				$response = array(
					"data"=> "",
					"msg" => "E-mail já existe"
				);
				echo json_encode($response);
			}
			else{
				echo "editar";
				//Editando ENDEREÇO
				//$idEnd = $newAddress->editarAddress($data->address);
				//editando USER
				$newUser->editarUser($data->user);
				$newAddress->editarAddress($data->address);
					$response = array(
					"data"=> "",
					"msg" => "Editado com sucesso!"
				);
				echo json_encode($response);					
			}			
		}
	}
}