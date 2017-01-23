<?php 
require_once('product.php');

class Vegetable extends Product{
	
	private $productorName;
	private $harvestedAt;
	

	public function __construct($id,$name,$price,$productorName,$harvestedAt){
		parent::__construct($id,$name,$price);
		$this->productorName=$productorName;
		$this->harvestedAt=$harvestedAt;
		
	}


	public function getProductorName(){
		return $this->productorName;
	}

	public function getharvestedAt(){
		return $this->harvestedAt;
	}

	public function isFresh($name){
		if($name<24){
			return true;
		}else{
			return false;
		}

	}
}



?>