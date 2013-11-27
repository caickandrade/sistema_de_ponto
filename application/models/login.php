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
		//$ponto = $this->db->query("SELECT id FROM logins WHERE users_id = ?", $usuario);
		return $ponto;
	}
	
}
