<?php
   session_start(); 
   $_SESSION["nom"]=$_POST["nom"];  // Récupération du nom
   $_SESSION["prenom"]=$_POST["prenom"];  // Récupération du prenom
?>

<!DOCTYPE html>
 <html lang="fr">
  <head>
   <meta charset="UTF-8" />
   <title>Bonjour <?php echo $_SESSION["nom"]; ?></title>
   <link rel="stylesheet" type="text/css" href="./styles/exo4.css" />
  </head>
  <body>
   <section>
    <?php
     if(empty($_SESSION["prenom"]) or empty($_SESSION["nom"]))
      { ?> <p class="erreur">Identification impossible !!! <br />Vous n'avez pas de prenom ou de mon ! (session vide !)</p> <?php  }
     else
      { ?> <div><h1><br />&nbsp;&nbsp;Bienvenue : <?php echo $_SESSION["prenom"]; ?>&nbsp;&nbsp;<?php echo $_SESSION["nom"]; ?><br /><br /></h1></div>
          <hr />
          <p>
           Votre identifiant unique de session est :   <?php  echo session_id(); ?> <br />
          </p>
      <?php }
    ?>
   </section>
   <nav>
    <ul>
     <li><a href="index.php">Changer d'identification</a></li>
     <li><a href="quitter.php">Quitter la session</a></li>
    </ul>
   </nav>
  </body>
</html>
