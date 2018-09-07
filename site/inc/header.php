<?php 
	$currentUrl = $_SERVER['REQUEST_URI'];
	 // var_dump($currentUrl);
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Audoin Jean Web Developpeur</title>
		<link rel ="stylesheet" href="site/css/style.css">
		<link rel ="stylesheet" href="site/css/menu.css">
		<link rel ="stylesheet" href="site/css/slider.css">
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<header>
			<div class="conteneur">			
				<div class="hgauche">
					<a href="index.php">
						<h1 class="pad">AUDOIN JEAN</h1>
					</a>
					<h2 class="pad">Développeur PHP Orienté Objet-Symfony3</h2>
				</div>
				<div class="hdroite">
					<div><a href="" class="pad"> Télécharcher mon CV</a></div>	
				</div>
				<div class="clear"></div>
				<div class="nav">
				<nav>
					<ul>
						<li><a href="index.php" <?php if ($currentUrl == '/index.php') echo 'class="active"' ?> >Accueil</a></li>
						<li><a href="moncv.php" <?php if ($currentUrl == '/moncv.php') echo 'class="active"' ?> >Mon CV</a></li>
						<li><a href="projets.php" <?php if ($currentUrl == '/projets.php') echo 'class="active"' ?> >Mes Projets</a></li>
						<li><a href="contact.php" <?php if ($currentUrl == '/contact.php') echo 'class="active"' ?> >Contact</a></li>
					</ul>
				</nav>
				</div>
				<div class="clear"></div>
				<br>
			</div>	
		</header>