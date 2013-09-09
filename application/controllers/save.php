<<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Save extends CI_Controller {
    
	function index()
	{
		$address = json_decode($this->input->$post("address"));
		$user = json_decode($this->input->$post("user"));
		$function = json_decode($this->input->$post("function"));
		
		$newaddress = new Address();
		$newuser = new User();
		//a acrescentar no model //$newfunction = new Function();
		
	}
	
}
