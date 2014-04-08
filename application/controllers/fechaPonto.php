<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FechaPonto extends CI_Controller {

	public function index()
	{
		//se a pessoa não tiver acesso
		if($this->session->userdata('logado')!=TRUE){
			echo "<script> parent.location = 'http://localhost/sistema_de_ponto/'; </script>";
		}
		
	}
	
	public function salvaLogout(){
		//se a pessoa não tiver acesso
		if($this->session->userdata('logado')!=TRUE){
			echo "<script> parent.location = 'http://localhost/sistema_de_ponto/'; </script>";
		}
		
		$dados = json_decode($this->input->post('data'));
		
		$this->load->model("logout");
		$this->load->model("login");
		
		$logout = new Logout();
		$login = new Login();
		
		date_default_timezone_set('America/Sao_Paulo');
		$dia = date("Y-m-d");
		$hora = date("H:i");
		$ident = $this->session->userdata('id_usuario');
		$descricao = $dados->texto;
		
		$login = $login->pesquisaId($ident,$dia);
		if($login->exists()){
			$logout->fecharPonto($login->id,$dia, $hora, $ident,$descricao);
		
			$login->mudaStatus($login->id);
		
			$response = array(
					"msg" => "sucesso"
			);
			//echo "<script> parent.location = 'http://localhost/sistema_de_ponto/index.php/home'; </script>";
		}
		
		else{
			$response = array(
					"msg" => "Erro! Nenhum se encontra aberto hoje"
			);
		}
				
		echo json_encode($response);
	}
	
}