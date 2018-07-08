<?php
include('./php/bdd_access.php');
$user = $_SESSION['user'];
if ($_SESSION['user'] == NULL) {
    header('location: index.html');
} else {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Kavalife RP Casier Judiciaire</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css" />
		<link rel="icon" type="image/png" href="./pic/favicon.png" />
	</head>
	<body class="overflowx">
		<header class="titre">
			<h1>Kavalife RP Casier Judiciaire</h1>
		</header>
		<section style="text-decoration:none">
			<input type="button" class="submit" onclick="location.href='php/add.php'" value="Ajouter des Personnes"/>
			<input type="button" class="submit" onclick="location.href='php/consult.php'" value="Consulter les Personnes"/>
			<?php
				$login = $bdd->query('SELECT * FROM user WHERE utilisateur="'.$user.'"');
				while($usr = $login->fetch()) 
				{
					if($usr["addp"] == 1) 
					{
					?>
						<input type="button" class="submit" onclick="location.href='php/addm.php'" value="Ajouter des membres dans la gendarmerie"/>
					<?php
					}	
				}
				$bdd = NULL;
			?>
			<input type="button" class="submit" onclick="location.href='php/agend.php'" value="Afficher les Gendarmes"/>
			<input type="button" class="submit" onclick="location.href='php/deconnexion.php'" value="Deconnexion"/>
		</section>
		<footer>
			<h4>Auteur: Azno - Mai 2017</h4>
		</footer>
	</body>
</html>
<?php
}
?>
