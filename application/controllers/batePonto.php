<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BatePonto extends CI_Controller {

	public function index()
	{
		$this->load->model("login");
		$login = new Login();
		$dia = date("Y-m-d");
		$hora = date("H:i");
		$ident = $this->session->userdata('id_usuario');
		$login->salvaPonto($dia, $hora, $ident);
		
	}
	
}
