<?php 
require_once(__DIR__.'/models/vegetable.php');
require_once(__DIR__.'/models/cloth.php');
require_once(__DIR__.'/models/client.php');



$clientOne = new Client(1,Polo,3,'tomate',3,3);
//print_r($clientOne);

$clientTwo = new Client(2,Sophie,5,'courgette',5,5);
//print_r($clientTwo);

$table2=[
$clientOne,
$clientTwo
];

return $table2;


?>