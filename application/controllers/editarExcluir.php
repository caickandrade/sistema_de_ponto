<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EditarExcluir extends CI_Controller {
		
	public function index()
	{
		//$this->load->view('sucesso');
	}
	
	public function excluir($id){
		$this->load->model("users");
		$this->load->model("positions");
		$this->load->model("addresses");
		
		$usuario = new User();
		$endereco = new Address();
		$cargo = new Position();
	}
	
	public function editar($id){
		$this->load->model("users");
		$this->load->model("positions");
		$this->load->model("addresses");
		
		$usuario = new User();
		$endereco = new Address();
		$cargo = new Position();
	}
}