<?php 
require_once(__DIR__.'/models/vegetable.php');
require_once(__DIR__.'/models/cloth.php');
require_once(__DIR__.'/models/client.php');



$clientOne = new Client(1,Polo,3,'','','');


$clientTwo = new Client(2,Sophie,5,'','','');


$tableClient=[
$clientOne,
$clientTwo
];

return $tableClient;


?>