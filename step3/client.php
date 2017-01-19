<?php 
require_once('product.php');
class Client extends Product{
	private $buy;
	private $billAmount;
	private $cart = [];

	public function __construct($id,$name,$price,$buy,$cart,$billAmount){
		parent::__construct($id,$name,$price);
   		$this->buy=$buy;
   		$this->cart=$cart;
   		$this->billAmount=$billAmount;		
	}


	public function getBuy(){
		return $this->buy;
	}

	public function getBillAmount(){
		return $this->billAmount;
	}
	
	public function getCart($product){
   		 $this->cart[]=$product;
	}
 
}


$val = new Client(3,5,5,'lalla','hipipihey','john');
print_r($val);



 ?>