<?php 

require_once(__DIR__.'/../models/user.php');
$customers =require_once(__DIR__.'/../testOrder.php');
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
				<select name="select0">
					<?php foreach ($customers as $client): ?>
						<option value="<?php echo $client->getID();?>">
							<?php echo $client->getName(); ?>	
						</option>
					<?php endforeach ?>
				</select>
			</div>

			<div>
				<select name="select1">
					<?php foreach ($produits as $produit): ?>
						<option value="<?php echo $produit->getID();?>">
							<?php echo $produit->getName() . '<div> </div>'. 
							$produit->getPrice() . '€';
							 ?>
						</option>
					<?php endforeach ?>
				</select>
			</div>

			<div>
				<select name="select2">
					<?php foreach ($produits as $produit): ?>
						<option value="<?php echo $produit->getID();?>">
							<?php echo $produit->getName() . '<div> </div>'. 
							$produit->getPrice() . '€';
							 ?>
						</option>
					<?php endforeach ?>
				</select>
			</div>

			<div>
				<select name="select3">
					<?php foreach ($produits as $produit): ?>
						<option value="<?php echo $produit->getID();?>">
							<?php echo $produit->getName() .'<div> </div>'. 
							$produit->getPrice() . '€';
							?>
						</option>
					<?php endforeach ?>
				</select>
			</div>

			<button>Envoyer</button>


		</form>
	</div>
	
	<?php 
	$idClient = $_POST['select0'];
	foreach ($customers as $client) { 
		if ($client->getID() == $idClient) {
			$currentClient = $client;
		}
	}

	foreach ($produits as $produit) {
		if ($produit->getID() == $_POST['select1']){
			$currentClient->buy($produit);
		}
	}

	foreach ($produits as $produit) {
		if ($produit->getID() == $_POST['select2']){
			$currentClient->buy($produit);
		}
	}

	foreach ($produits as $produit) {
		if ($produit->getID() == $_POST['select3']){
			$currentClient->buy($produit);
		}
	}
	
	print_r($currentClient->getCart());
	echo 'TOTAL :' . $currentClient->getBillAmount() . '€'; 



	?>

</body>
</html>

