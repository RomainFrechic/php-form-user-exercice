<?php 

class Cloth extends Product{

	    private $brand;

	    public function __construct($brand){
	    	  $this->brand=$brand;
	    }

	    public function getBrand(){
	    	return $this->brand;
	    }

	    public function try($brand){
	    	if($brand<5){
	    		return true;
	    	}else{
	    		return false;
	    	}

	    }
}


 ?>