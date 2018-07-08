<!DOCTYPE html>
<html>
	<?php
		include('../php/bdd_access.php');
	?>
	<head>
		<meta charset="UTF-8">
		<title>Kavalife RP Casier Judiciaire</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/style2.css" />
		<link rel="icon" type="image/png" href="../pic/favicon.png" />
	</head>
	<body class="overflowx">
		<?php include('header.php');?>
		<?php include('nav-bar.php');?>
		<section>
			<table cellpadding="0" cellspacing="0" border="0" class="tabtest">
				<thead>
					<tr class="entete">
						<th>Prénom</th>
						<th>Nom</th>
						<th>Date/Heure</th>
						<th>Délits</th>
						<th>Interpol</th>
						<th>Amende</th>
						<th>Ajouter Par</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$reponse = $bdd->query('SELECT * FROM casier');
					while ($donnees = $reponse->fetch())
					{
					?>
						<tr class="ligne_centre">
							<th><?=$donnees[1]?></th>
							<th><?=$donnees[2]?></th>
							<th><?=$donnees[3]?></th>
							<th><?=$donnees[4]?></th>
							<th><?=$donnees[5]?></th>
							<th><?=$donnees[6]?></th>
							<th><?=$donnees[7]?></th>
							<?php
							if ($_SESSION['remove'] == 1) {?>
							<th><form method="GET" action="action.php">
                            <?php
								$id = $donnees['id'];
								echo "<input type=\"hidden\" name=\"id\" value=\"$id\"/>"
								?>
								<button type="submit" name="delete" value="1">Supprimer</button>
								</form></th>
							<?php
							}
							?>
						</tr>
					<?php
					}
					$reponse->closeCursor(); // Termine le traitement de la requête
				?>
				</tbody>
			</table>
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