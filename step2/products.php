<?php 
require_once('product.php');
// require_once('cloth.php');

$tomate= new Vegetable('1','tomate',2 ,'Francis','SARL' );
$courgette= new Vegetable('2','courgette',3,'Francis','SARL');
$habit= new Cloth('3','T-shit',15,'Burton');
$pantalon= new Cloth('4','Pantalon',85,'Burton');
$chaussure= new Cloth('5','Chaussure',185,'Burton');

$table=[
    $tomate,
    $courgette,   
    $habit,
    $pantalon,
    $chaussure
];

return $table;

 ?>