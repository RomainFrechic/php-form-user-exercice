<?php 
require_once('vegetable.php');
require_once('cloth.php');
require_once('client.php');



$clientOne = new Client(1,Polo,3,'tomate',3,3);
print_r($clientOne);

$clientTwo = new Client(2,Sophie,5,'courgette',5,5);
print_r($clientTwo);





 ?>