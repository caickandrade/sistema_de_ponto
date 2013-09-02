<?php

class Address extends DataMapper {
	
	var $table = "addresses";
	//var $has_one = array("user");
	
	function __construct($id = NULL)
    {
        parent::__construct($id);
    }
	
}

/* End of file adress.php */
/* Location: ./application/models/adress.php */
