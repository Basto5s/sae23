<!DOCTYPE html>
<html lang="fr">	
<head>
	<title>Formulaire</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" >
	<meta charset="utf-8">
</head>
<header>
    <h1>Formulaire d'inscription</h1>
	<nav>
    <ul>
		   <li><a href="#">Accueil</a></li>
		   <li><a href="inscription.html">inscription</a></li>
		   <li><a href="Salle_E207.html">Salle E207</a></li>
		   <li><a href="Salle_E208.html">Salle E208</a></li>
		   <li><a href="tableau.php">test tableau</a></li>   
		   <li><a href="mentions_legales.html">Mentions légales</a></li>
	</nav>
	</ul>
</header>	

<body>

  <h2> ceci est le début du site php de la SAE23 </h2>

Bonjour, <?php echo htmlspecialchars($_POST['nom']); ?>

Tu as <?php echo(int)$_POST['age']; ?> ans.

</html>


</body>
