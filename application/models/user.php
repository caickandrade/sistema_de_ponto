<?php 

class User extends DataMapper {

	var $table = "users";
	//var $has_one = array("address");

	function __construct($id = NULL)
    {
        parent::__construct($id);
    }
	
	function emailExiste($email)
	{
			$validate = new User();
			
			$validate->where('email', $email)->get();
			
			if($validate->exists())
				return TRUE;	
			else 
				return FALSE;
			
	}
	
	function salvarUser($user, $idEnd)
	{
		$newUser = new User();
		
		$newUser->name = $user->nome;
		$newUser->addresses_id = $idEnd;
		$newUser->phone1 = $user->tel1;
		$newUser->phone2 = $user->tel2;
		$newUser->email = $user->email;
		$newUser->password = $user->senha;
		$newUser->birthday = $user->datanasc;
		$newUser->id_position = "1";
		
		$newUser->save(); 
				
	}
	
	function validaCampos($user)
	{

	}
	
}

/* End of file user.php */
/* Location: ./application/models/user.php */