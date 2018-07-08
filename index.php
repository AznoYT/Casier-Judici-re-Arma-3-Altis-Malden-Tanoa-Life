<?php
include('php/bdd_access.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Kavalife RP Casier Judiciaire</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css" />
		<link rel="icon" type="image/png" href="./pic/favicon.png" />
		<link async href="http://fonts.googleapis.com/css?family=Antic" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
	</head>
	<body class="overflowx">
		<header class="titre">
			<a title="Page d'Accueil">
				<h1>Kavalife RP Casier Judiciaire</h1>
			</a>
		</header>
		<section>
			<aside class="para">
				<form method="POST" action="php/connect.php">
				    <input class="utilisateur" name="utilisateur" placeholder="Nom d'Utilisateur" /></br></br>
				    <input class="utilisateur" type="password" name="mdp" placeholder="Mot de Passe"/></br></br>
				    <input class="submit" type="submit" value="se connecter"/>
				</form>
			</aside>
            <div class="para">
                <form method="GET" action="php/action.php">
                    <input type="text" name="search" class="addform" palceholder="Entrer votre Nom"/>
                    <button type="submit" name="research" value="1">Rechercher</button>
                </form>
                <?php
                    if(isset($_SESSION['result'])){ ?>
                        <table cellpadding="0" cellspacing="0" border="0" class="tabtest">
				        <thead>
					        <tr class="entete">
						        <th>Date/Heure</th>
						        <th>Délits</th>
						        <th>Interpol</th>
						        <th>Amende</th>
						        <th>Ajouter Par</th>
					        </tr>
				        </thead>
				        <tbody>
				        <?php
					        $reponse = $bdd->query('SELECT * FROM casier WHERE nom="'.$_SESSION['nomr'].'"');
					        while ($donnees = $reponse->fetch())
					        {
					        ?>
						        <tr class="ligne_centre">
							        <th><?=$donnees["date"]?></th>
							        <th><?=$donnees["delits"]?></th>
							        <th><?=$donnees["interpol"]?></th>
							        <th><?=$donnees["amende"]?></th>
							        <th><?=$donnees["ajouter"]?></th>
						        </tr>
					        <?php
					        }
					        $reponse->closeCursor(); // Termine le traitement de la requête
                            unset ($_SESSION['nomr']);
				        ?>
				        </tbody>
			        </table>
                    <?php
                }
                unset($_SESSION["result"]);
                ?>
            </div>
		</section>
		<footer>
			<h4>Auteur: Azno - Juillet 2018</h4>
		</footer>
	</body>
</html>