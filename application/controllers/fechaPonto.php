<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FechaPonto extends CI_Controller {

	public function index()
	{
		$this->load->model("logout");
		$login = new Logout();
		$dia = date("Y-m-d");
		$hora = date("H:i");
		$ident = $this->session->userdata('id_usuario');
		$login->fecharPonto($dia, $hora, $ident);
		
	}
	
}