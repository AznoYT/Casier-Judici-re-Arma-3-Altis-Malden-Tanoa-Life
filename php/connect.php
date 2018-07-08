<!DOCTYPE html>
<html>
	<?php include('./bdd_access.php'); ?>
	<head>
		<meta charset="UTF-8">
		<title>Kavalife RP - Validation</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>
	<body class="body">
		<?php include('header.php');?>
		<section>
			<?php
				$login = $bdd->query('SELECT * FROM user');
				$username = $_POST['utilisateur'];
				$lpws = $_POST['mdp'];
					
				while($usr = $login->fetch()) 
				{
					if($username == $usr["utilisateur"]) 
					{
						if($lpws == $usr["mdp"]) 
						{
							$_SESSION['user'] = $_POST['utilisateur'];
							$_SESSION['grade'] = $usr['grade'];
							$_SESSION['ajout'] = $usr['addp'];
							$_SESSION['remove'] = $usr['removei'];
							header('location: ../client.php');
						}else{
							echo('> Mot de passe incorect.');
						}
					}
					else{
						echo("> Nom d'utilisateur non reconnue.");
					}
				}
				$bdd = NULL;
			?>
		</section>
		<footer>
			<h4>Auteur: Azno - Mai 2017</h4>
		</footer>
	</body>
</html>