<?php 
require('user.php');


$date= date('d/m/y',time());
$client1 = new Client('1','futer@hotmail.fr',$date);
//var_dump($client1);
$client2 = new Client('2','mindbrainintelligency@outlook.fr',$date);
//var_dump($client1);
$monTableau = [
$client1,
$client2 
];
return $monTableau;
 

?>
