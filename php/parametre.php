<!DOCTYPE html>
<html>
	<?php
		include('bdd_access.php');
		$user = $_SESSION['user'];
	?>
	<head>
		<meta charset="UTF-8">
		<title>Kavalife RP Casier Judiciaire</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/style2.css" />
		<link rel="icon" type="image/png" href="../pic/favicon.png" />
		<link async href="http://fonts.googleapis.com/css?family=Antic" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
	</head>
	<body class="overflowx">
		<header class="titre">
			<h1>Kavalife RP Casier Judiciaire</h1>
		</header>
		<?php include('nav-bar.php');?>
		<section class="row">
		<div class="para">
		<fieldset>
		<legend>Ajouter des Grades:</legend>
			<form method="POST" action="addgrade.php">
				<input type="text" name="grade" placeholder="Grade" class="addform" required /></br></br>
				<input class="submit" type="submit" value="Ajouter"/>
			</form></br></br>
			<table cellpadding="0" cellspacing="0" border="0" class="tabtest">
				<thead>
					<tr class="entete">
						<th>Grade</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$reponse = $bdd->query('SELECT * FROM gradegend');
					while ($donnees = $reponse->fetch())
					{
					?>
						<tr class="ligne_centre">
							<th><?=$donnees[0]?></th>
							<th><form method="GET" action="action.php">
                            <?php
                            $id = $donnees[0];
                            echo "<input type=\"hidden\" name=\"id\" value=\"$id\"/>"
                            ?>
                            <button type="submit" name="delete" value="3">Supprimer</button>
                            </form></th>
						</tr>
					<?php
					}
					$reponse->closeCursor(); // Termine le traitement de la requête
				?>
				</tbody>
			</table>
		</fieldset>
		</div>
		<div class="para">
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
		</div>
		</section>
		<script>
			var owner = '<?php echo($_SESSION['user']) ?>';
		</script>
		<footer>
			<h4>Auteur: Azno - Mai 2017</h4>
		</footer>
	</body>
</html>
<!-- END -->