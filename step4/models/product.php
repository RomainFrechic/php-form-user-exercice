<?php 
require_once('vegetable.php');
require_once('cloth.php');
require_once('client.php');

class Product{
	private $id;
	private $name;
	private $price;

	public function __construct($id,$name,$price){
		$this->id=$id;
		$this->name=$name;
		$this->price=$price;
	}

	public function getID(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function getPrice(){
		return $this->price;
	}
}



 ?>