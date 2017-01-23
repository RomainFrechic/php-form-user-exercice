<?php 
require_once(__DIR__.'/../models/vegetable.php');
require_once(__DIR__.'/../models/cloth.php');


$tomate= new Vegetable('1','tomate',2 ,'Francis','SARL' );
$courgette= new Vegetable('2','courgette',3,'Francis','SARL');
$pomme= new Vegetable('3','Pomme',1,'Francis','SARL');

$habit= new Cloth('4','T-shit',15,'Burton');
$pantalon= new Cloth('5','Pantalon',85,'Burton');
$chaussure= new Cloth('6','Chaussure',185,'Burton');

$table=[
$tomate,
$courgette,
$pomme,   
$habit,
$pantalon,
$chaussure
];

return $table;

?>