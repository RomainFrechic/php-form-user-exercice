<?php 
require_once('product.php');
require_once('cloth.php');

$tomate= new Product('1','tomate',2);
$courgette= new Product('2','courgette',3);
$habit= new Product('3','T-shit',15);

$table=[
    $tomate,
    $courgette,   
    $habit
];

return $table;

 ?>