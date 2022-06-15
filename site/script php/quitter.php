<?php session_start(); ?>

<!DOCTYPE html>
 <html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Au revoir <?php echo $_SESSION["nom"]; ?></title>
    <link rel="stylesheet" type="text/css" href="./styles/exo4.css" />
  </head>
  <body>
   <section>
    <?php
      if(empty($_SESSION["prenom"]) or empty($_SESSION["nom"]))
        { ?> <p class="erreur">Identification impossible !!! <br />Vous n'avez pas de prenom ou de nom <br/>
              Votre session est détruite
             </p>
             <?php
               $_SESSION = array(); // Réinitialisation du tableau de session
               session_destroy();   // Destruction de la session
               unset($_SESSION);    // Destruction du tableau de session
             ?>
         <?php  }
      else 
        { ?><div><h1><br />&nbsp;&nbsp;Au revoir : <?php echo $_SESSION["prenom"]; ?>&nbsp;&nbsp;<?php echo $_SESSION["nom"]; ?><br /><br /></h1></div> 
             <hr />
             <p>
              *************** DESTRUCTION DE VOTRE SESSION ******************<br />
              Les informations vous concernant sont détruites sur le serveur <br />
              ***************************************************************
             </p>
             <?php
               $_SESSION = array(); // Réinitialisation du tableau de session
               session_destroy();   // Destruction de la session
               unset($_SESSION);    // Destruction du tableau de session
             ?>
             <p>
               Exemple : <br />
               Si on tente de relire l'identifiant :  <?php echo session_id(); ?> &nbsp;&nbsp;
               et votre nom  : <?php if (isset($_SESSION['nom'])) echo $_SESSION['nom']; ?><br />
               Il n'y a plus rien !
             </p>
      <?php }
    ?>
   </section>
   <nav>
    <ul>
     <li><a href="index.php">Reprendre une identification</a></li>
    </ul>
   </nav>
  </body>
</html>

