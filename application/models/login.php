<?php

class Login extends DataMapper {
	
	var $table = "logins";
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	function salvaPonto ($dia, $hora,$ident){
		$this->load->model("login");
		$ponto = new Login();
		$ponto->day = $dia;
		$ponto->startTime = $hora;
		$ponto->users_id = $ident;
		$ponto->save();
	}
	
	function pesquisaId($usuario){
		$this->load->model("login");
		$ponto = new Login();
		$ponto->where("users_id", $usuario);
		$ponto->where("status",0);
		$ponto->get();
		return $ponto;
	}
	
	function mudaStatus($idLogin){
		$this->load->model("login");
		$ponto = new Login();
		$ponto->where("id",$idLogin)->get();
		//$ponto->status = '1';
		$ponto->update('status',1);
	}
	
	function pesquisaData($inicial, $final){
		$this->load->model("login");
		$pontos = new Login();
		
		$pontos->where("status",1);
		$pontos->where('day >=', $inicial);
		$pontos->where('day <=', $final);
		$pontos->get();
		
		$resultado = array();
		foreach ($pontos as $ponto)
			{
				/*$item = new stdClass;
				$item->id = $ponto->id;
				$item->name = $ponto->day;
				$item->email = $ponto->startTime;
				$item->position = $ponto->users_id;*/
				
				array_push($resultado, $ponto);
			}
		return $resultado;
	}
	
}
