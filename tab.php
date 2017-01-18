
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
    
	foreach ($pageUser as $value) {
		var_dump( $value);
	}

   
	?>
</body>
</html>