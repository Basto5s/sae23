<!DOCTYPE html>
<html lang="fr">	
  <head>
	<title>Formulaire</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" >
	
	<meta charset="utf-8">
  </head>
<header>
	<br />
	<hr />
    <h1 class="titre">Mettre en place une solution informatique pour l'entreprise</h1>
	<hr />
	
	<!-- Site Menu -->
	<section>
		<ul class="menu">
			<li>
				<a  href="index.html">Accueil</a>
			</li>
			<li>
				<a href="login.html">Administration</a>
			</li>
			<li>
				<a href="Salle_E207.html">Salle E207</a>
			</li>
			<li>
				<a href="Salle_E208.html">Salle E208</a>
			</li>
			<li>
				<a class="active" href="#">Tableau de relevé</a>
			</li>   
		</ul>
	</section>
</header>

<body>
	<section>
		<h1>Relevé des valeurs dans les Batiments</h1>
		

    <th>Nom</th>
    <th>valeur</th>
  </tr>
  <tr>
    <td><?php foreach ($_POST['tab_inf'] as $cle => $valeur) echo "<tr><td>$cle</td>  <td>$valeur</td></tr>" ?></td>;
     			

	</tr>
	
	<table>
	<tr><td>Nom </td><td>Valeur</td></tr>
	<?php
		foreach ($_POST as $cle => $valeur)
			echo "<tr><td> $cle </td> <td> $valeur </td> </tr> ";
	?>
	</tables
	








	<!-- Footers -->
	<aside class="last">
		<hr />
		<p>Validation de la page HTML5 - CSS3</p>

		<a> 
			<img src="./html_logo.png" alt="HTML5 Valide !" />
		</a>
		<a>
			<img src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valide !" />
		</a>
	</aside>
    
	<hr />
	
	<footer>
			<ul class="end">
				<li><a href="https://www.iut-blagnac.fr/fr/" target="_blank">IUT de Blagnac</a></li>
				<li>Département Réseaux et Télécommunications</li>
				<li>BUT1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			</ul>  
	</footer>
	
	<hr />
	<br />
	
</body>
</html>
