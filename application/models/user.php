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
		$getPostion = new Position();
		
		$newUser->name = $user->nome;
		$newUser->addresses_id = $idEnd;
		$newUser->cpf = $user->cpf;
		$newUser->phone1 = $user->tel1;
		$newUser->phone2 = $user->tel2;
		$newUser->email = $user->email;
		$newUser->password = $user->senha;
		$newUser->birthday = $user->datanasc;
		//VOCÊS PRECISAM PASSAR O ID DO CARGO. QUANDO VOCÊS COLOCAM NA INTERFACE O NOME DO CARGO, OU
		//ATÉ MESMO UM ID QUE NÃO EXISTE NA TABLE POSITIONS, VOCÊS DESTROEM COM O RELACIONAMENTO ENTRE AS 
		//TABELAS E ELAS FICAM TRISTES E SOLITÁRIAS. BEM MAGOADAS, ELAS NÃO GRAVAM O USUÁRIO.
		//CRIEI UM LOAD POSITIONS EM USER, OLHEM LÁ.
		$getPostion->where("codigo",$user->id_cargo)->get();
		$newUser->id_position = $getPostion->id;
		
		$newUser->save(); 
				
	}
	//VALIDAR USUÁRIO PERTENCE AO OBJETO USUÁRIO. 
	function validaCamposUser($user)
	{
		//carregando model
		$this->load->model("ValidacaoUtil");
		//instanciando um objeto do model de validação
		$validar = new ValidacaoUtil();		
		if(($validar->isBlank($user->nome)) || ($validar->isBlank($user->email)) || ($validar->isBlank($user->senha)) || ($validar->isBlank($user->id_cargo)) || ($validar->isBlank($user->nome)))
			return FALSE;		 
		else 
			return TRUE;	
	}
	
	public function getUser($name){
			
		$user = new User();
	
		$user->like("name",$name."%")->get();
		
		return $user;
		
	}
	
	public function toAutoComplete($query)
	{
		
		$fullUser = $this->getUser($query);
			
		$all = array("");
 		
		foreach ($fullUser as $field) 
		{
			array_push($all, $field->name);
		}
		
		return $all;
		
	}
	
	
		
}

/* End of file user.php */
/* Location: ./application/models/user.php */