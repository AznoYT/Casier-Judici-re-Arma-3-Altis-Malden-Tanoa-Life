<?php
include('bdd_access.php');
$grade = $_POST['grade'];
					
$stmt = $bdd->prepare('INSERT INTO gradegend(grade) VALUES(?)');
$stmt-> execute(array($_POST['grade']));
header('location: parametre.php');
?>