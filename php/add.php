<!DOCTYPE html>
<html>
	<?php
		include('bdd_access.php'); $a = NULL;
		$user = $_SESSION['user'];
	?>
	<head>
		<meta charset="UTF-8">
		<title>Kavalife RP Casier Judiciaire</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="icon" type="image/png" href="../pic/favicon.png" />
		<link async href="http://fonts.googleapis.com/css?family=Antic" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
	</head>
	<body class="overflowx">
		<?php include('header.php');?>
		<?php include('nav-bar.php');?>
		<section>
			<form method="POST" action="dbadd.php">
			<fieldset>
			<legend>Information de la personne:</legend>
				<input type="text" name="prenom" placeholder="Prénom" class="addform" required /></br></br>
				<input type="text" name="nom" placeholder="Nom" class="addform" required /></br></br>
				<label class="label">Date et Heure de l'Arestation (IRL):</label></br>
				<input type="datetime-local" name="date" class="addform" max="2999-12-31" required /></br></br>
				<label class="label">Délits:</label></br>
				<textarea name="delits" rows="10" cols="30" class="addform" placeholder="Merci de préciser le plus possible" required></textarea></br>
				<label class="label">Rechercher sur Interpol:</label></br>
				<select name="interpol" class="addform" required>
					<option value="oui">Oui</option>
					<option value="non">Non</option>
				</select></br></br>
				<input type="text" name="amende" placeholder="Montant de l'Amende" class="addform" required /></br></br>
				<input class="submit" type="submit" value="Ajouter"/>
			</fieldset>
			</form>
		</section>
		<footer>
			<h4>Auteur: Azno - Mai 2017</h4>
		</footer>
	</body>
</html>