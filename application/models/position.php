<?php

class Position extends DataMapper {
		
	var $table = "positions";
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
	function getPosition($id){
		$this->load->model("position");
		$posicao = new Position();
		
		$posicao = $posicao->where("id",$id)->get();
		
		return $posicao;
	}
	/*
	function excluiPosition($idPosition){
		$cargo = new Position();
		$cargo->where("id",$idPosition);
		
		$cargo->delete();
	}*/
	
}
