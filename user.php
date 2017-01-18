<?php 

require('client.php');
class User{

	
	private $id;
	private $email;
	private $date;

	public function __construct($id,$email,$date){
		$this->id($id);
		$this->email($email);
		$this->date($date);
	}

	public function getID(){
		return $this->id;
	}

	


	public function getEmail(){
		return $this->email;
	}
	

	

	public function getDate(){
		return $this->date;
	}
	
	

}  





?>