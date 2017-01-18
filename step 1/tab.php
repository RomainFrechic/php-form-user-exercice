
<?php 

$pageUser=require('index.php');

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
	<div class="ui segment" >
		<table class="ui celled striped table" >
			<thead>
				<tr>
					<th>ID</th>
					<th>Email</th>
					<th>Date</th>
				</tr>
				</thead>
			<tbody> 
			
	<?php 

	foreach ($pageUser as $key => $pageUser):

		?>
		
				<tr>
					<td> <?php  echo $pageUser->getID(); ?></td>
					<td> <?php  echo $pageUser->getEmail(); ?></td>
					<td> <?php  echo $pageUser->getDate(); ?></td>
				</tr>

			
		<?php endforeach ?>
		</tbody>
		</table>
		</div>
	</body>
	</html>

