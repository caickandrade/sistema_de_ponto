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
		
		if($this->session->userdata('acesso')==4 || $this->session->userdata('acesso')==2){
			$this->load->view('busca');
		}
			
			
		//se a pessoa tiver acesso
		else if($this->session->userdata('logado')==TRUE){
			echo "<script> parent.location = 'http://localhost/sistema_de_ponto/index.php/home'; </script>";
		}
		
		//se a pessoa não possuir acesso
		else{
			echo "<script> parent.location = 'http://localhost/sistema_de_ponto/'; </script>";
		}
		
	}
	
	public function getUserAutoComplete(){
		
		$query = $_GET['query'];//PEGA STRING A SER PESQUISADA DA URL
		
		$this->load->model('user');//CARREGA MODEL USER
		
		$user = new User();//INSTANCIA NOVO USER
		
		$busca = $user->toAutoComplete($query);//RECEBE EM UM ARRAY A VARIAVEL BUSCA COM OS NOMES PESQUISADOS DE ACORDO COM A STRING DA URL
		
		echo json_encode($busca);//MANDA A VARIAVEL COMO JSON PARA SER REALIZADO O AUTOCOMPLETE
	}

		
		public function getUserTable()
		{
			$query = $_GET['consulta'];
			
			$this->load->model('user');//CARREGA MODEL USER
		
			$user = new User();//INSTANCIA NOVO USER
			
			$busca = $user->toTable($query);//RECEBE EM UM ARRAY A VARIAVEL BUSCA COM OS NOMES PESQUISADOS DE ACORDO COM A STRING DA URL
			
			$data['resultado'] = $busca;
			
			$this->load->view('busca', $data);
		}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */