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
	
	function emailEditadoExiste($email,$id)
	{
			$validate = new User();
			
			$validate->where('email', $email);
			$validate->where('id !=',$id);
			$validate->get();
			
			if($validate->exists())
				return TRUE;	
			else 
				return FALSE;
			
	}
	
	function desativarUser($usuario){
		if($usuario->where('id',$usuario->id)->update('ativo',0)){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	
	function editarUser($user)
	{
		
		$posicao = new Position();
		echo "cargo ->".$user->id_cargo;
		$posicao->where('id',$user->id_cargo)->get();
		echo "cargo 2->".$posicao->codigo;
		
		$newUser = array( 
		'name' => $user->nome,
		'addresses_id' => $user->endereco,
		'cpf' => $user->cpf,
		'id_position'=>$posicao->codigo,
		'phone1' => $user->tel1,
		'phone2' => $user->tel2,
		'email' => $user->email,
		'password' => $user->senha,
		'birthday' => $user->datanasc
		);
		
		$usuario = new User();
		$usuario->where('id',$user->id)->update($newUser); 
				
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
			
		$user = new User();//INSTANCIA NOVO USUARIO
	
		$user->like("name",$name."%")->get();//PEGA OS USUARIOS QUE TEM PARTE DO NOME OU NOME INTEIRO NO BD
		
		return $user;
		
	}
	
	public function toAutoComplete($query)
	{
		
		$fullUsers = $this->getUser($query);//ENVIA A QUERY CONTENDO O NOME DA BUSCA E RECEBE O RETORNO DA FUNCAO COM OS USUARIOS
			
		$result = array(); //INICIALIZA NOVO ARRAY
 		
		foreach ($fullUsers as $user) //FAZ UM LOOP SEPARANDO APENAS OS NOMES E JOGANDO CADA NOME EM UM ARRAY
		{
			array_push($result, $user->name);
		}
		
		return $result;//RETORNA ARRAY COM OS NOMES
		
	}
	
	public function toTable($query)
	{
		
		$fullUsers= $this->getUser($query);
		
		$result = array();
		
			foreach ($fullUsers as $user)
			{
				$item = new stdClass;
				
				$item->id = $user->id;
				$item->name = $user->name;
				$item->email = $user->email;
				$item->position = $user->id_position;
				
				array_push($result, $item);
			}
			
		return $result;
			
		}
		
		function pesquisaId($identificador){
		$this->load->model("user");
		$us = new User();
		
		$us->where("id",$identificador);
		$us->get();
		
		return $us;
		
	}
		
	}
	

/* End of file user.php */
/* Location: ./application/models/user.php */