<html lang="fr">	
<head>
	<title>E207</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" >
	<meta charset="utf-8">
</head>
<header>
    <h1>Formulaire d'inscription</h1>
	<nav>
    <ul>
		   <li><a href="index.html">Accueil</a></li>
		   <li><a href="inscription.html">inscription</a></li>
		   <li><a href="login.php">login</a></li>
		   <li><a href="#">administration de la base</a></li>
		   <li><a href="Salle_E208.html">Salle E208</a></li>
		   <li><a href="tableau.php">test tableau</a></li>  
		   <li><a href="mentions_legales.html">Mentions légales</a></li>
	</nav>
	</ul>
</header>	
<hr />

<!-- Body of page -->
<body>
	
<html>
<head>
  <title>Authentification Base de Données</title>
</head>
<body>

<?php
	session_start();
	$_SESSION["pw"]=$_REQUEST["pw"];  // Récupération du mot de passe
	$motdep=$_SESSION["pw"];
	$_SESSION["auth"]=FALSE;

	// Script de vérification du mot de passe d'administration, en utilisant la table Connexion

	if(empty($motdep))
		header("Location:login_error.php");
	else
     {
		/* Accès à la base */
		include ("mysql.php");

		$requete = "SELECT `mdp` FROM `admin`";
		$resultat = mysqli_query($id_bd, $requete)
			or die("Execution de la requete impossible : $requete");

		$ligne = mysqli_fetch_row($resultat);
		if ($motdep==$ligne[0])
		 {
			$_SESSION["auth"]=TRUE;		
            mysqli_close($id_bd);
			echo "<script type='text/javascript'>document.location.replace('Salle_E207.html');</script>";
		 }
		else
		 {
			$_SESSION = array(); // Réinitialisation du tableau de session
            session_destroy();   // Destruction de la session
            unset($_SESSION);    // Destruction du tableau de session
            mysqli_close($id_bd);
            echo "<script type='text/javascript'>document.location.replace('login_error.php');</script>";
		 }
     } 
 ?>

</body>
</html>	
