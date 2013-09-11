<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view("cadastro");
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */