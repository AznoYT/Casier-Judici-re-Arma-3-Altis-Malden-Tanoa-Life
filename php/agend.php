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
		<header class="titre">
			<h1>Kavalife RP Casier Judiciaire</h1>
		</header>
		<?php include('nav-bar.php');?>
		<section>
			<table cellpadding="0" cellspacing="0" border="0" class="tabtest">
				<thead>
					<tr class="entete">
						<th>Nom</th>
						<th>Grade</th>
						<th>Autoriser à gerer les gendarmes</th>
						<th>Autoriser à retirer des infractions</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$reponse = $bdd->query('SELECT * FROM user');
					while ($donnees = $reponse->fetch())
					{
					?>
						<tr class="ligne_centre">
							<th><?php echo $donnees["utilisateur"] ?></th>
							<th><?php echo $donnees["grade"] ?></th>
							<th><?php
							if ($donnees['addp']== 1){
								echo "Oui";
							}else {
								echo "Non";
							}
							?></th>
							<th><?php 
							if ($donnees['removei']== 1){
								echo "Oui";
							}else {
								echo "Non";
							}
							?></th>
						</tr>
                 <?php
					}
					$reponse->closeCursor();
				?>
				</tbody>
			</table>
		</section>
		<footer>
			<h4>Auteur: Azno - Mai 2017</h4>
		</footer>
	</body>
</html>
<!-- END -->