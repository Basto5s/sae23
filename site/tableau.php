<!DOCTYPE html>
<html lang="fr">	
  <head>
	  <title>tableau</title>
	  <link rel="stylesheet" type="text/css" href="style.css" media="screen" >
	  <meta charset="utf-8">
  </head>
    <body>
    <header>
      <div><h1><br />Paramétre de la requête<br /><br /></h1></div>
    
    <nav>
    <ul>
		   <li><a href="index.html">Accueil</a></li>
		   <li><a href="inscription.html">inscription</a></li>
		   <li><a href="Salle_E207.html">Salle E207</a></li>
		   <li><a href="Salle_E208.html">Salle E208</a></li>
		   <li><a href="#">test tableau</a></li>  
		   <li><a href="mentions_legales.html">Mentions légales</a></li>
	</nav>
	</ul>

     <hr />
   </header>
   <section>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
	<table>
<tr>
    <th>Nom</th>
    <th>valeur</th>
  </tr>
  <tr>
    <td><?php foreach ($_POST['tab_inf'] as $cle => $valeur) echo "<tr><td>$cle</td>  <td>$valeur</td></tr>" ?></td>;
     			

	</tr>
 

	</table>
   </section>
  </body>
 </html>
