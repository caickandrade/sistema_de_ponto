<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function index()
	{
		$this->load->view("cadastro");
	}
	
	public function valida(){
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
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */