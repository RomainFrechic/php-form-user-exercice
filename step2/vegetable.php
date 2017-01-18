<?php 


class Vegetable extends Product{
	
	private $productorName;
	private $harvestedAt;
	

	public function __construct($productorName,$harvestedAt){
		$this->productorNa=$productorName;
		$this->harvestedA=$harvestedAt;
		
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