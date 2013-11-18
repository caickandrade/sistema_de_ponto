<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BatePonto extends CI_Controller {

	public function index()
	{
		$this->load->model("login");
		$login = Login();
		$login.day = date("d/m/Y");
		$login.time = date("H:i");
		
	}
	
}
