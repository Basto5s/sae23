<?php
  // Démarrage de la session
  session_start();
?>

<!DOCTYPE html>
 <html lang="fr">
  <head>
   <meta charset="UTF-8" />
   <title>Login</title>
   <link rel="stylesheet" type="text/css" href="./styles/exo4.css" />
  </head>
  <body>
   <header>
    <img src="./images/login.png" alt="login" class="gauche" />
    <div><br /><h1>&nbsp;&nbsp;Login</h1><br /></div>
    <hr />
   </header>
   <section>
     <br />
     <form action="bienvenue.php" method="post" enctype="multipart/form-data">
      <fieldset>
       <legend>Identifiez-vous...</legend>
       <label for="nom">Nom : </label>
         <input type="text" name="nom" id="nom" value="<?php if (isset($_SESSION["nom"])) echo $_SESSION["nom"];?>"/> 
       <br />
       <br />
       <label for="prenom">Prénom : </label>
         <input type="text" name="prenom" id="prenom" value="<?php if (isset($_SESSION["prenom"])) echo $_SESSION["prenom"];?>"/> 
       <br />
      </fieldset>
      <p>
       <input type="submit" value="login" />
      </p>
     </form>
   </section>
  </body>
</html>
