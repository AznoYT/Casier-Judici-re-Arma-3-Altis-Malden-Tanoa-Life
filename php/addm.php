<?php
include('./bdd_access.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Kavalife RP Casier Judiciaire</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="icon" type="image/png" href="../pic/favicon.png" />
		<link async href="http://fonts.googleapis.com/css?family=Antic" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
	</head>
	<body class="overflowx">
		<header class="titre">
			<a title="Page d'Accueil">
				<h1>Kavalife RP Casier Judiciaire</h1>
			</a>
		</header>
		<?php include('nav-bar.php');?>
		<section>
			<aside class="right">
				<form method="POST" action="vaddm.php">
				<fieldset>
				<legend>Information de connexion:</legend>
					<input class="addform" name="utilisateur" placeholder="Nom d'Utilisateur" required/></br></br>
					<input class="addform" name="nomrp" placeholder="Nom RP" required/></br></br>
					<input class="addform" name="prenomrp" placeholder="Prénom RP" required/></br></br>
					<input class="addform" type="password" name="mdp" placeholder="Mot de Passe"required/></br></br>
					<select class="addform" name="grade">
					<?php
						$reponse = $bdd->query('SELECT * FROM gradegend');
						while ($donnees = $reponse->fetch())
						{
						?>
							<option value="<?php echo $donnees['grade']; ?>"> <?php echo $donnees['grade']; ?></option>
						<?php
						}
						?>
				</select></br>
				<input type="checkbox" name="add" id="add" value="1" checked /><label for="add" >Autoriser à ajouter des gendarmes</label></br></br>
				<input type="checkbox" name="remove" id="add2" value="1" checked /><label for="add2" >Autoriser à supprimer des infractions</label></br></br>
				<input class="submit" type="submit" value="Inscrire"/>
				</fieldset>
				</form>
			</aside>
		</section>
		<footer>
			<h4>Auteur: Azno - Mai 2017</h4>
		</footer>
	</body>
</html>
<!-- END -->