<?php 

class User extends DataMapper {

	var $table = "users";
	//var $has_one = array("address");

	function __construct($id = NULL)
    {
        parent::__construct($id);
    }
	
}

/* End of file user.php */
/* Location: ./application/models/user.php */