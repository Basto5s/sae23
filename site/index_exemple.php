<!DOCTYPE html>
 <html lang="fr">
  <head>
   <meta charset="UTF-8" />
   <title>Essai-PHP</title>
   <link rel="stylesheet" type="text/css" href="./styles/exo1.css" />
  </head>
  <body>
   <header>
     <div><h1><br />1er Exercice<br /><br /></h1></div>
     <hr />
   </header>
   <section>
    <p>
     <!-- Insertion du script PHP -->
     <?php
      echo "Vous utilisez le navigateur Internet :
      <strong>".$_SERVER['HTTP_USER_AGENT']."</strong><br />";
      echo "Votre adresse IP est : <strong>".$_SERVER['REMOTE_ADDR']."</strong>, le port client utilisé est : <strong>".$_SERVER['REMOTE_PORT']."</strong><br />";
      echo "Alors que l'adresse IP du serveur Web est : <strong>".$_SERVER['SERVER_ADDR'].";
      </strong> sur la machine : <strong>".$_SERVER['SERVER_NAME']."</strong><br />";
      echo "La version du serveur Web est : <strong>".$_SERVER['SERVER_SOFTWARE']."</strong> </br>";
      echo "nouvelles informations recueillies: </br>";
      echo "le chemin de la racine du serveur web est : <strong>" .$_SERVER['DOCUMENT_ROOT']."</strong></br>";
      echo "le chemin web est :<strong> " .dirname($_SERVER['PHP_SELF']). "</strong> </br>";
      echo "le chemin actuel est : <strong>" .$_SERVER['SCRIPT_FILENAME']. "</strong></br>";
	?>
	</p>
   </section>
  </body>
 </html>
