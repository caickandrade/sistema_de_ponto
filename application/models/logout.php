<?php

class Logout extends DataMapper {
	
	var $table = "logouts";
	
	function __construct($id = NULL)
	{
		parent::__construct($id);	
	}
	
	function fecharPonto ($dia, $hora,$ident){
		$this->load->model("logout");
		$ponto = new Logout();
		$ponto->day = $dia;
		$ponto->startTime = $hora;
		$ponto->users_id = $ident;
		$ponto->save();
	}
	
}
