<?php 

$user=require_once('products.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
	<title>Step 2</title>
</head>
<body>
	<div class="ui segment" >
		<table class="ui celled striped table" >
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Price</th>
					<th>Brand</th>
					<th>Producteur</th>
					<th>Recolte</th>
				</tr>	
			</thead>
			<tbody>
				<?php 
				foreach ($user as $key => $user):
					?>
				<tr>
					<td><?php echo $user->getID(); ?></td>
					<td><?php echo $user->getName(); ?></td>
					<td><?php echo $user->getPrice(); ?></td>

					<?php if(is_a($user,'Vegetable')): ?>
					<td><?php echo $user->getProductorName(); ?></td>
					<td><?php echo $user->getharvestedAt(); ?></td>
				<?php else: ?>
					<td><?php echo  $user->getBrand(); ?></td>
                 <?php endif ?>
				</tr>
                 
			<?php endforeach ?>
		</tbody>
	</table>
</div>

</body>
</html>
