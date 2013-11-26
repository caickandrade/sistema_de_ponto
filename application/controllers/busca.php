<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Busca extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('busca');
	}
	
	public function getUserAutoComplete(){
		
		$query = $_GET['query'];//PEGA STRING A SER PESQUISADA DA URL
		
		$this->load->model('user');//CARREGA MODEL USER
		
		$user = new User();//INSTANCIA NOVO USER
		
		$busca = $user->toAutoComplete($query);//RECEBE EM UM ARRAY A VARIAVEL BUSCA COM OS NOMES PESQUISADOS DE ACORDO COM A STRING DA URL
		
		echo json_encode($busca);//MANDA A VARIAVEL COMO JSON PARA SER REALIZADO O AUTOCOMPLETE
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */