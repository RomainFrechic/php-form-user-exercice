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
		$this->getCart($product);
		$this->setBillAmount($product);
	}

	public function getBillAmount(){
		return $this->billAmount;
	}

	public function setBillAmount($product){
		$total= $product->getPrice();
		$this->billAmount = $this->billAmount + $total;
	}
	
	
	public function getCart($product){
		$this->cart[]=$product;
	}
	
}



?>