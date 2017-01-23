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
   		$this->product = [
           ["product"=>new product("radis",5), "quantite"=>2],
   		];	
	}


	public function getBuy(){
		$total=0;
		foreach ($this->$user as $value) {
		$total += $value['name']->getPrice()*$value['id'];
		}
		//return $total;
var_dump($total);
	}

	public function getBillAmount(){
		return $this->billAmount;
	}
	
	public function getCart($product){
   		 $this->cart[]=$product;
	}
 
}

 

 ?>