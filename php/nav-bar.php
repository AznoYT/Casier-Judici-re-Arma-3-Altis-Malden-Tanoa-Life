 <div class="navbar">
  <a href="../client.php">Accueil</a>
  <a href="deconnexion.php" style="float:right;">Déconnexion</a>
  <div class="dropdown">
    <button class="dropbtn">Casiers Judicière
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="add.php">Ajouter</a>
      <a href="consult.php">Consulter</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Gestion des Effectifs
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
	<?php
	$user = $_SESSION['user'];
	$nav = $bdd->query('SELECT * FROM user WHERE utilisateur="'.$user.'"');
		while($usr = $nav->fetch()) 
		{
			if($usr["addp"] == 1) 
			{
			?>
				<a href="addm.php">Ajouter des Gendarmes</a>
				<a href="agend.php">Consulter la liste des Gendarmes</a>
			<?php
			}else{
			?>
				<a href="agend.php">Consulter la liste des Gendarmes</a>
			<?php
			}
		}
	?>
    </div>
	<?php
	$nav = $bdd->query('SELECT * FROM user WHERE utilisateur="'.$user.'"');
	while($usr = $nav->fetch()) 
		{
			if($usr["addp"] == 1) 
			{
			?>
				<a href="parametre.php">Paramettre</a>
			<?php
			}
		}
	?>
  </div>
</div> 