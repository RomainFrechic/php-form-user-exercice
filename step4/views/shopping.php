<?php 

require_once(__DIR__.'/../models/user.php');
$produits = require_once(__DIR__.'/../data/products.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
	<title>Formulaire Utilisateur</title>
</head>
<body>
	
	<div>
		<form method="POST">
		<div>
			<select name="select1">
		<?php foreach ($produits as $produit): ?>
			<option value="<?php echo $produit->getID(); ?>"><?php echo $produit->getName(); ?></option>
		<?php endforeach ?>
		</select>
		</div>

		<div>
		<select name="select2">
		<?php foreach ($produits as $produit): ?>
			<option value="<?php echo $produit->getID(); ?>"><?php echo $produit->getName(); ?></option>
		<?php endforeach ?>
		</select>
		</div>

		<div>
		<select name="select3">
		<?php foreach ($produits as $produit): ?>
			<option value="<?php echo $produit->getID(); ?>"><?php echo $produit->getName(); ?></option>
		<?php endforeach ?>
		</select>
		</div>

           <button>Envoyer</button>


		</form>
	</div>
	<h3><?php echo $_POST['select1']; ?></h3>
	<h3><?php echo $_POST['select2']; ?></h3>
	<h3><?php echo $_POST['select3']; ?></h3>
	</body>
	</html>

