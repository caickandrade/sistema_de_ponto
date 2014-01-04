<?php

class Logout extends DataMapper {
	
	var $table = "logouts";
	
	function __construct($id = NULL)
	{
		parent::__construct($id);	
	}
	
	function fecharPonto ($idLogin,$dia, $hora,$ident){
		$this->load->model("logout");
		$ponto = new Logout();
		$ponto->logins_id = $idLogin;
		$ponto->day = $dia;
		$ponto->endTime = $hora;
		$ponto->users_id = $ident;
		$ponto->save();
	}
	
	function pesquisaLogout($identificador){
		$this->load->model("logout");
		$ponto = new Logout();
		
		$ponto->where("logins_id",$identificador);
		$ponto->get();
		
		//echo $ponto->endTime;
		
		return $ponto;
		
	}
	
}
