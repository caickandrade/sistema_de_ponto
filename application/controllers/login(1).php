<?php

class Login extends CI_Controller {
	
	function index()
	{
				
		$address = json_decode($this->input->post("address"));
		$user = json_decode($this->input->post("user"));
		
		$newuser = new User();
		$newaddress = new Address();
		
		//ENDEREÇO USUÁRIO		
		
		$newaddress->street = $address->rua;
		$newaddress->number = $address->numero;
		$newaddress->neighborhood = $address->bairro;
		$newaddress->city = $address->cidade;
		$newaddress->state = $address->estado;
		$newaddress->complement = $address->comp;
		$newaddress->zip_code = $address->cep;
		
		$newaddress->save();
		
		
		//ATRIBUTOS USUÁRIO
		
		$newuser->name = $user->nome;	
		$newuser->addresses_id = $newaddress->id;
		$newuser->function = $user->funcao;
		$newuser->phone1 = $user->tel1;
		$newuser->phone2 = $user->tel2;
		$newuser->email = $user->email;
		$newuser->password = $user->senha;
		
		$newuser->save();
		 
	}
		
	function delete()
	{
		 $del = json_decode($this->input->post("id"));
		 
		 // $response = array
		// (
			// "Msg"=>$del->id 
		// );
// 		
		// echo json_encode($response);
		
		$d = new User();
		$d->where('id',$del->id)->get();
		
		
		$e = new Address();
		$e->where('id', $d->addresses_id)->get();
		
		$d->delete();
		$e->delete();
		

		
		
		// $a = $d->address_id;
// 		
		// $ad = new Address();
		// $ad->where('id', $a)->get();
// 		
		// $d->delete_all();
		// $ad->delete_all();
	}
}

/* End of file user.php */
/* Location: ./application/controllers/login.php */
