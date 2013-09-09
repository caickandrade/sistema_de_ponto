<?php

class Position extends DataMapper {
		
	var $table = "positions";
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}
