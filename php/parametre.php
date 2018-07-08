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
		<?php include('header.php');?>
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
		<form method="GET" action="action.php">
			<fieldset>
			<legend>Modifier le mot de passe Admin:</legend>
				<input type="text" name="amdp" placeholder="Ancien mot de passe" class="addform" required /></br></br>
				<input type="text" name="mdp1" placeholder="Mot de passe" class="addform" required /></br></br>
				<input type="text" name="mdp2" placeholder="Confirmation du Mot de passe" class="addform" required /></br></br>
				<button class="submit" type="submit" name="modif" value="1">Modifier</button>
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