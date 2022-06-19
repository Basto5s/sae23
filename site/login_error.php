<?php
	// Démarrage de la session
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">	
<head>
	<title>erreur de log</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" >
	<meta charset="utf-8">
</head>
<header>
    <h1>Formulaire d'inscription</h1>
	<nav>
    <ul>
		   <li><a href="index.html">Accueil</a></li>
		   <li><a href="inscription.html">inscription</a></li>
		   <li><a href="Salle_E207.html">Salle E207</a></li>
		   <li><a href="Salle_E208.html">Salle E208</a></li>
		   <li><a href="tableau.php">test tableau</a></li>  
		   <li><a href="mentions_legales.html">Mentions légales</a></li>
	</nav>
	</ul>
</header>	

	<body>
		<!-- Affichage entete -->
		<?php 
			$_SESSION = array(); // Réinitialisation du tableau de session
			session_destroy();   // Destruction de la session
			unset($_SESSION);    // Destruction du tableau de session
			
		?>
		<section>
			<p>
				<br />
				<em><strong>Administration de la base : Acc&egrave;s limit&eacute; aux personnes autoris&eacute;es</strong></em>
				<br />
			</p>
			<br />
			<p class="erreur">Mot de passe non saisi ou erron&eacute; !!!</p>
			<br />
			<hr />
		</section>
		<footer>
			<p><a href="index.html">Retour à l'acceuil</a></p>
		</footer>
	</body>
</html>
