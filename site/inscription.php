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
  $hostname = "localhost"; // nom du serveur ou se trouve votre base
  $username = "cabanie";
  $password = "root";
  $database = "saee23";

  $link = mysqli_connect($hostname, $username, $password, $database);

  $stmt = "SELECT * FROM `admin` WHERE `login` = 'root' AND `mdp` = 'passroot'";
  $result = mysqli_query($link,$stmt);
  if (mysqli_num_rows($result) == 0) {
    echo "Login incorrect";
  }
  else {
    $row = mysqli_fetch_object($result);
    $dbpasswd = $row->PassWord;
    if ($dbpasswd == $pw) {
      echo "Login et mot de passe OK";
    }
    else {
      echo "Mot de passe incorrect";
    }
  }
?>


</body>
</html>	
