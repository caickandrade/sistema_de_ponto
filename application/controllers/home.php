<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		
		if($this->session->userdata('logado')!=TRUE){
			echo "<script> parent.location = 'http://localhost/sistema_de_ponto/'; </script>";
		}
		else{
			$this->load->view("pagina-inicial");
			
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */