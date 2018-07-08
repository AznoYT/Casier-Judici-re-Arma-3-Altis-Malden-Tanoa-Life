<!DOCTYPE html>
<html>
	<?php include('./bdd_access.php'); ?>
	<head>
		<meta charset="UTF-8">
		<title>Kavalife RP Casier Judiciaire</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>
	<body>
		<header>
			<h1>Kavalife RP Casier Judiciaire</h1>
		</header>
		<section>
			<?php
				$_SESSION['user'] = NULL;
				header('location: ../index.php');
			?>
		</section>
		<footer>
			<h4></h4>
		</footer>
	</body>
</html>