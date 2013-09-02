<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view("home");
	}
	
	public function save()
	{
		
		$algo = json_decode($this->input->post("data"));
		$response = array
		(
			"Msg"=>$algo->nome 
		);
		
		
		echo json_encode($response);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */