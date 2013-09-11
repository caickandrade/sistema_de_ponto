<?php

class Logout extends DataMapper {
	
	var $table = "logouts";
	
	function __construct($id = NULL)
	{
		parent::__construct($id);	
	}
	
}
