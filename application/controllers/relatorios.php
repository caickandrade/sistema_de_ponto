<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relatorios extends CI_Controller {
	
	public function index()
	{
		
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
	
	public function relatorioGeral(){
		
		$data = json_decode($this->input->post('data'));
		
		$contador = 0;
		$logins = $this->buscaEntradaData($data->inicio, $data->termino);
		$logouts = $this->buscaSaidaId($logins,$contador);
		$usuarios = $this->buscaUserLogin($logins);
		
		echo $usuarios[5]->name;
		$relatorio = array();
		for($i=0;$i<$contador;$i++){
			
			$item = new stdClass;
				
			$item->id = $usuarios[$i]->id;
			$item->name = $usuarios[$i]->name;
			$item->entrada = $logins[$i]->startTime;
			$item->saida = $logouts[$i]->endTime;
			//$item->diferenca = $logouts[$i]->endTime - $logins[$i]->startTime; achar uma forma de calcular a diferença entre as horas
			$item->diferenca = date("H:i"); 
			//echo $item->diferenca;
			
			array_push($relatorio,$item);
		}
		
		
		
	}
	
}