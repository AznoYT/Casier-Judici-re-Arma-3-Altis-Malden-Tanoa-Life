<!DOCTYPE html>
<html>
	<?php include('./bdd_access.php'); ?>
	<head>
		<meta charset="UTF-8">
		<title>Kavalife RP - Validation</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>
	<body class="body">
		<header>
		<header class="titre">
			<a title="Page d'Accueil">
				<h1>Kavalife RP Casier Judiciaire</h1>
			</a>
		</header>
		</header>
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