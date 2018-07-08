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
		<header class="titre">
			<a title="Page d'Accueil">
				<h1>Kavalife RP Casier Judiciaire</h1>
			</a>
		</header>
		<section>
			<?php
				$username = $_POST['utilisateur'];
				$pws = $_POST['mdp'];
				$grade = $_POST['grade'];
				
				if(!isset($_POST['add'])){
					$add = 0;
				}else{
					$add = $_POST['add'];
				}

				if(!isset($_POST['remove'])){
					$remove = 0;
				}else{
					$remove = $_POST['remove'];
				}
						
				$stmt = $bdd->prepare('INSERT INTO user(utilisateur, nomrp, prenomrp, mdp, grade, addp, removei) VALUES(?, ?, ?, ?, ?, ?, ?)');
				$stmt-> execute(array($_POST['utilisateur'], $_POST['nomrp'], $_POST['prenomrp'], $_POST['mdp'], $_POST['grade'], $add, $remove));
				header('location: ../agend.php');
				$bdd = NULL;
			?>
		</section>
		<footer>
			<h4>Auteur: Azno - Mai 2017</h4>
		</footer>
	</body>
</html>
<!-- END -->