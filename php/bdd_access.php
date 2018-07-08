<?php
	// bdd_access.php
	// Fichier de connexion à la base de données
	$host = '127.0.0.1';
	$db_name = 'rp';
	$encoding = 'utf8';
	$username = 'root';
	$password = '';
	
	session_start(); // Actionnement des variables $_SESSION[];
	try { $bdd = new PDO("mysql:host=$host;dbname=$db_name;charset=$encoding", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)); }
	catch(Exception $e) { die('ERROR: '.$e->getMessage()); }
	// END
?>