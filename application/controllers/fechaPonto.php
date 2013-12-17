<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FechaPonto extends CI_Controller {

	public function index()
	{
		$this->load->model("logout");
		$this->load->model("login");
		
		$logout = new Logout();
		$login = new Login();
		
		date_default_timezone_set('America/Sao_Paulo');
		$dia = date("Y-m-d");
		$hora = date("H:i");
		$ident = $this->session->userdata('id_usuario');
		
		$login = $login->pesquisaId($ident);
		
		$logout->fecharPonto($login->id,$dia, $hora, $ident);
		
		$login->mudaStatus($login->id);
		
		echo "<script> parent.location = 'http://localhost/sistema_de_ponto/index.php/home'; </script>";
	}
	
}