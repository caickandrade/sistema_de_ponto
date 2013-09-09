<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function index()
	{
		$this->load->view("cadastro");
	}
	
	public function valida(){
		$data = json_decode($this->input->post('dados'));
		
		$resposta = array ('dados'=>$data);
		echo json_encode($resposta);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */