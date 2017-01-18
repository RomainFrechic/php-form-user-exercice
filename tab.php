
<?php 

$pageUser=require('index.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire Utilisateur</title>
</head>
<body>
	
	<?php 
    
	foreach ($pageUser as $key => $value) {
		print_r($key);
		print_r($value);
		return;
	}
	

	
   
	?>
</body>
</html>