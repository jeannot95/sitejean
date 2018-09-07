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
		<meta charset="UTF-8">
	</head>
	<body>
	<br>
		<header>
			<div class="conteneur">			
				<div class="hgauche">
					<a href="index.php">
						<h1 class="pad">AUDOIN JEAN</h1>
					</a>
					<h2 class="pad">Développeur PHP Orienté Objet-Symfony3</h2>
				</div>
				<div class="hdroite">
					<a href="" class="pad"> Télécharcher mon CV</a>
					<a href="" class="pad">Partager</a>				
				</div>
				<div class="clear"></div>
				<nav>
					<ul>
						<li><a href="index.php" <?php if ($currentUrl == '/sitejean/index.php') echo 'class="active"' ?> >Accueil</a></li>
						<li><a href="moncv.php" <?php if ($currentUrl == '/sitejean/moncv.php') echo 'class="active"' ?> >Mon CV</a></li>
						<li><a href="projets.php" <?php if ($currentUrl == '/sitejean/projets.php') echo 'class="active"' ?> >Mes Projets</a></li>
						<li><a href="contact.php" <?php if ($currentUrl == '/sitejean/contact.php') echo 'class="active"' ?> >Contact</a></li>
					</ul>
				</nav>
				<div class="clear"></div>
				<br>
			</div>	
		</header>