<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BatePonto extends CI_Controller {

	public function index()
	{
		
		
		//echo "<script> parent.location = 'http://localhost/sistema_de_ponto/index.php/home'; </script>";
		
	}
	
	public function salvaLogin(){
		
		$dados = json_decode($this->input->post('data'));
		
		$this->load->model("login");
		$login = new Login();
		date_default_timezone_set('America/Sao_Paulo');
		$dia = date("Y-m-d");
		$hora = date("H:i");
		$descricao = $dados->texto;
		$ident = $this->session->userdata('id_usuario');
		$login->salvaPonto($dia, $hora, $ident,$descricao);
		
		$response = array(
					"msg" => "sucesso"
		);
				
		echo json_encode($response);
	}
	
}
