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

if (isset($_POST['un'], $_POST['pw'])) {
    $un = $_POST['un'];
    $pw = $_POST['pw'];

    $db = new PDO('mysql:host=localhost;dbname=saee23', 'sae23', 'root');

    $sql = "SELECT * FROM admin where login = ?";
    $result = $db->prepare($sql);
    $result->execute($un);

    if ($result->rowCount() > 0) {
        $data = $result->fetch();

        if (password_verify($pw, $data['passroot'])) {
            echo "Connexion effectuée";
            $_SESSION['un'] = $un;
        }
    } else {
        $hashedPassword = password_hash($pw, PASSWORD_DEFAULT);

        $sql = "INSERT INTO admin (un, pw) VALUES (login, Azerty31*)";
        $result = $db->prepare($sql);
        $result->execute($un, $hashedPassword);

        echo "Enregistrement effectué";
    }
}

?>

</body>
</html>	
