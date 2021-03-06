<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relatorios extends CI_Controller {
	
	public function index()
	{
		//se a pessoa não tiver acesso
		if($this->session->userdata('logado')!=TRUE){
			echo "<script> parent.location = 'http://localhost/sistema_de_ponto/'; </script>";
		}
		
	}
	
	public function relatorioGeral(){
		//se a pessoa tiver acesso
		if($this->session->userdata('acesso')==2 || $this->session->userdata('acesso')==4 ){
			$this->load->view("relatorioGeral");
			
		}
		else if($this->session->userdata('logado')==TRUE){
			echo "<script> parent.location = 'http://localhost/sistema_de_ponto/index.php/home'; </script>";
		}
		//se a pessoa não tiver acesso
		else{
			echo "<script> parent.location = 'http://localhost/sistema_de_ponto/'; </script>";
		}
		
	}
	
	public function relatorioEspecifico(){
		//se a pessoa tiver acesso
		if($this->session->userdata('acesso')==2 || $this->session->userdata('acesso')==4 ){
			$this->load->view("relatorioEspecifico");
			
		}
		else if($this->session->userdata('logado')==TRUE){
			echo "<script> parent.location = 'http://localhost/sistema_de_ponto/index.php/home'; </script>";
		}
		//se a pessoa não tiver acesso
		else{
			echo "<script> parent.location = 'http://localhost/sistema_de_ponto/'; </script>";
		}
		
	}
	
	public function relatorioDia(){
		//se a pessoa tiver acesso
		if($this->session->userdata('acesso')==2 || $this->session->userdata('acesso')==4 ){
			$this->load->view("relatorioDia");
			
		}
		else if($this->session->userdata('logado')==TRUE){
			echo "<script> parent.location = 'http://localhost/sistema_de_ponto/index.php/home'; </script>";
		}
		//se a pessoa não tiver acesso
		else{
			echo "<script> parent.location = 'http://localhost/sistema_de_ponto/'; </script>";
		}
		
	}
	
	public function buscaEntradaData($inicio,$termino){
		$this->load->model("login");		
		$login = new Login();
		
		$valor = $login->pesquisaData($inicio, $termino);
		
		return $valor;
	}
	
	public function buscaSaidaId($logins,&$contador){
		$this->load->model("logout");
		$logout = new Logout();
		
		$logouts = array();
		foreach ($logins as $pt)
			{
				
				$contador = $contador + 1;
				$logout = $logout->pesquisaLogout($pt->id);	
				array_push($logouts, $logout);
			}
		return $logouts;
	}
	
	public function buscaUserLogin($logins){
		$this->load->model("user");
		$usuario = new User();
		
		$usuarios = array();
		foreach ($logins as $pt)
			{
				$usuario = $this->buscaUserId($pt->users_id);	
				array_push($usuarios, $usuario);
			}
			return $usuarios;
	}
	
	public function buscaUserId($identificador){
		$this->load->model("user");
		$usuario = new User();
		
		$usuario = $usuario->pesquisaId($identificador);
		
		return $usuario;
	}
	
	
	public function criaRelatorioGeral(){
		
		$data = json_decode($this->input->post('data'));
		
		$contador = 0;
		$logins = $this->buscaEntradaData($data->inicio, $data->termino);
		$logouts = $this->buscaSaidaId($logins,$contador);
		$usuarios = $this->buscaUserLogin($logins);
		
		$dados = array();
		$contData = 0;
		$dados[$contData][0] = $logins[0]->day;
		
		$preenche=2;
		$somaIntervalos = 0;
		
		for($i=0;$i<$contador;$i++){
			
			if(strtotime($dados[$contData][0])!=strtotime($logins[$i]->day)){
				$dados[$contData][1] = $conversor;
				$contData=$contData+1;
				$preenche=2;
				$dados[$contData][0] = $logins[$i]->day;
				//$dados[$contData][1] = 'as';
				
				$somaIntervalos = 0;
			}
			//echo "///";
			$item = new stdClass;
				
			$item->id = $usuarios[$i]->id;
			$item->name = $usuarios[$i]->name;
			$item->entrada = $logins[$i]->startTime;
			$item->saida = $logouts[$i]->endTime;
			$intervalo = (strtotime($item->saida)-strtotime($item->entrada));
			$somaIntervalos = $somaIntervalos + $intervalo;
			$conversor = date("H:i",$somaIntervalos);
			//echo $item->entrada;
			//echo $conversor;
			//echo "///";
			$item->diferenca = date("H:i",$intervalo);
			//echo $item->diferenca;
			
			$dados[$contData][$preenche] = $item;
			
			$preenche++;
		}
		$dados[$contData][1] = $conversor;
		echo json_encode($dados);
	}
	
	
	public function buscaEntradaEspecifica($id,$inicio,$termino){
		$this->load->model("login");		
		$login = new Login();
		
		$valor = $login->pesquisaDataEspecifica($id,$inicio, $termino);
		
		return $valor;
	}
	
	
	public function criaRelatorioEspecifico(){
		
		$data = json_decode($this->input->post('data'));
		
		$this->load->model("user");
		$usuario = new User();
		
		$usuario = $usuario->pesquisaId($data->id);
		$contador = 0;
		$logins = $this->buscaEntradaEspecifica($data->id,$data->inicio, $data->termino);
		$logouts = $this->buscaSaidaId($logins,$contador);
		
		$dados = array();
		$dado[0] = $usuario;
		
		for($i=0;$i<$contador;$i++){
			
			$item = new stdClass;
			
			$item->entrada = $logins[$i]->startTime;
			$item->saida = $logouts[$i]->endTime;
			$intervalo = (strtotime($item->saida)-strtotime($item->entrada));
			$item->diferenca = date("H:i",$intervalo);
			
			$dados[$i+1] = $item;
			
		}
		echo json_encode($dados);
	}
	
	public function criaRelatorioDia(){
		
		$data = json_decode($this->input->post('data'));
		
		$contador = 0;
		$logins = $this->buscaEntradaData($data->dia, $data->dia);
		$logouts = $this->buscaSaidaId($logins,$contador);
		$usuarios = $this->buscaUserLogin($logins);
		
		$dados = array();
		
		$dados[0] = $data->dia;
		$achou = 0;
		for($j=0;$j<$contador;$j++){
			$intervalo[$j]=0;
		}
		
		$c;
		for($i=0;$i<$contador;$i++){
				$achou = 0;
			
			if($i>=1){
				for($c=$i;$c>0;$c--){
					if($usuarios[$i]->id == $usuarios[$c-1]->id){
						$achou = 1;
					}
				}
			}
			$item = new stdClass;
			
			$intervalo[$i] = (strtotime($logouts[$i]->endTime)-strtotime($logins[$i]->startTime));
			$item->diferenca = date("H:i",$intervalo[$i]);
			$vet[$i]=$usuarios[$i]->id;
			if($achou==0){
				$item->nome = $usuarios[$i]->name;
				$item->diferenca = date("H:i",$intervalo[$i]);
				
				$dados[$i+1] = $item;
			}
			else{
				$intervalo[$i] = $intervalo[$i] + $intervalo[$i-1];
				$item->diferenca = date("H:i",$intervalo[$i]);
				$item->nome = $usuarios[$i]->name;
				$dados[$i] = $item;
			}
			
			
			
		}
		echo json_encode($dados);
	}
	
}