<?php 
require('user.php');


$date= date('d/m/y',time());
$client1 = new Client('id','@',$date);
//var_dump($client1);
$client2 = new Client('id','@',$date);
//var_dump($client1);
return [
$client1,
$client2 
];

 

?>
