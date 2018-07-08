<!DOCTYPE html>
<html>
	<?php include('./bdd_access.php'); 
		$user = $_SESSION['user'];
	?>
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
				$username = $_POST['prenom'];
				$name = $_POST['nom'];
				$date = $_POST['date'];
				$delits = $_POST['delits'];
				$interpol = $_POST['interpol'];
				$amende = $_POST['amende'];
					
				if (isset($username, $name, $date, $delits, $interpol, $amende)){			
						// Insertion des informations dans la base de données
						$stmt = $bdd->prepare('INSERT INTO casier(prenom, nom, date, delits, interpol, amende, ajouter) VALUES(?, ?, ?, ?, ?, ?, ?)');
						$stmt-> execute(array($_POST['prenom'], $_POST['nom'], $_POST['date'], $_POST['delits'], $_POST['interpol'], $_POST['amende'], $_SESSION['user']));
						$stmt = $bdd->query('SELECT id FROM casier');
						header('location: ../client.php');
						$bdd = NULL;
				}
				else{
					echo("> Une Erreur c'est Produite lors de la rentrer des informations");
					$bdd = NULL;
				}
				
				$bdd = NULL;
			?>
		</section>
		<footer>
			<h4>Auteur: Azno - Mai 2017</h4>
		</footer>
	</body>
</html>
<!-- END -->