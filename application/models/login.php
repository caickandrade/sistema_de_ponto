<?php

class Login extends DataMapper {
	
	var $table = "logins";
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	function salvaPonto ($dia, $hora,$ident,$descricao){
		$this->load->model("login");
		$ponto = new Login();
		$ponto->day = $dia;
		$ponto->startTime = $hora;
		$ponto->users_id = $ident;
		$ponto->description = $descricao;
		$ponto->save();
	}
	
	function pesquisaId($usuario,$dia){
		$this->load->model("login");
		$ponto = new Login();
		$ponto->where("users_id", $usuario);
		$ponto->where("status",0);
		$ponto->where("day",$dia);
		$ponto->get();
		return $ponto;
	}
	
	function mudaStatus($idLogin){
		$this->load->model("login");
		$ponto = new Login();
		$ponto->where("id",$idLogin)->get();
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
				
				array_push($resultado, $ponto);
			}
		return $resultado;
	}
	
	function pesquisaDataEspecifica($id, $inicial, $final){
		$this->load->model("login");
		$pontos = new Login();
		
		$pontos->where("status",1);
		$pontos->where('day >=', $inicial);
		$pontos->where('day <=', $final);
		$pontos->where('users_id', $id);
		$pontos->get();
		
		$resultado = array();
		foreach ($pontos as $ponto)
			{
				
				array_push($resultado, $ponto);
			}
		return $resultado;
	}
	
}
