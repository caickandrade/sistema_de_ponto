<?php

class Activity extends DataMapper {
	
	var $table = "activities";
	
	function __construct($id = NULL)
    {
        parent::__construct($id);
    }
	
}

/* End of file activity.php */
/* Location: ./application/models/activity.php */