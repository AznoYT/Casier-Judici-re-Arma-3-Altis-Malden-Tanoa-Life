<!DOCTYPE html>
<?php
	include 'bdd_access.php';
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Kavalife RP Casier Judiciaire</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/style2.css" />
		<link rel="icon" type="image/png" href="./pic/favicon.png" />
		<link async href="http://fonts.googleapis.com/css?family=Antic" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
	</head>
	<body class="overflowx">
		<section>
			<?php
				if($_GET['delete'] == 1)
				{
				$id = $_GET['id'];
				?>
				<form action='action.php' method="GET">
					<h2>Etes-vous sur de vouloir supprimer cette ligne ?</h2>
					<?php echo "<input type=\"hidden\" name=\"id\" value=\"$id\"/>"?>
					<button type="submit" value="2" name="delete">Oui</button>
					<button onclick="location.href='consult.php';">Non</button>
				</form>
				<?php
				}

				if($_GET['delete'] == 2)
				{
					$stmt = $bdd->prepare('DELETE FROM casier WHERE id="'.$_GET['id'].'"');
					$stmt->execute();
					header('location: consult.php');
				}

				if($_GET['delete'] == 3)
				{
				$id = $_GET['id'];
				?>
				<form action='action.php' method="GET">
					<h2>Etes-vous sur de vouloir supprimer cette ligne ?</h2>
					<?php echo "<input type=\"hidden\" name=\"id\" value=\"$id\"/>"?>
					<button type="submit" value="4" name="delete">Oui</button>
					<button onclick="location.href='parametre.php';">Non</button>
				</form>
				<?php
				}

				if($_GET['delete'] == 4)
				{
					$stmt = $bdd->prepare('DELETE FROM gradegend WHERE grade="'.$_GET['id'].'"');
					$stmt->execute();
					header('location: parametre.php');
				}
				
				if($_GET['research'] == 1)
				{
					$_SESSION['nomr'] = $_GET['search'];
					$_SESSION['prenomr'] = $_GET['searchp'];
					$_SESSION['result'] = 'ok';
					header('location: ../index.php');
				}

				if($_GET['modif'] == 1)
				{
					$user = $_SESSION['user'];
					$amdp = $_GET['amdp'];
					$mdp1 = $_GET['mpd1'];
					$mdp2 = $_GET['mpd2'];
					$reponse = $bdd->query('SELECT * FROM user WHERE utilisateur="'.$user.'"');
					while ($donnees = $reponse->fetch())
					{
						if ($amdp == $donnees['mdp']) {
							if ($mdp1 == $mdp2){
								$mdp = $_GET['mdp1'];
								$stmt = $bdd->prepare('UPDATE user SET mdp = "'.$mdp.'" WHERE utilisateur="'.$user.'"');
								$stmt->execute();
							}
						}
					}
					header('location: parametre.php');
				}
			?>
		</section>
		<footer>
			<h4>Auteur: Azno - Juillet 2018</h4>
		</footer>
	</body>
</html>