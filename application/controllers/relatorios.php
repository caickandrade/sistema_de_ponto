<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relatorios extends CI_Controller {
	public function index()
	{
		
	}
	
	public function relatorioGeral(){
		$this->load->model("user");
		$this->load->model("login");
		$this->load->model("logout");
		
		$data = json_decode($this->input->post('data'));
		
		$usuario = new User();
		$login = new Login();
		$logout = new Logout();
		
		$logins = $login->pesquisaData($data->inicio, $data->termino);
		
		$relatorio = array();
		echo $logins;
	}
	
}