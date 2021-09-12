<?php
    session_start();

    if($_SESSION['isadmin'] != 1) {
        header('Location: ../notadmin.html');
    }  

    include '../config.php';

?>
<!DOCTYPE html>

<?php

	// Connexion à la base de données

	try

	{

		$bdd = new PDO('mysql:host=' . $ddbhost . ';dbname=' . $ddbname . ';charset=utf8', ''. $ddbuser . '', '' . $ddbpassword .   '');

	}

	catch(Exception $e)

	{

   	    die('Erreur : '.$e->getMessage());

	}

?>

<html lang=fr>

	<head>

		<title>

			Utilisateurs - Liste

		</title>

		<link type="text/css" rel="stylesheet" href="../styleadmin.css">

		<style>

		    #tableusers {

	position: absolute;

	left: 300px;

}

#adduserform {

	position: absolute;

	left: 300px;

}

#deleteuserform {

	position: absolute;

	left: 300px;

}

		</style>

	</head>

	<body>

		

		<div id=menudiv>

			<br>

			<ul id=Menu>

				<li class="menuli"><a href="../admin.php" class="menulink">&#x2B05; Retour</a></li>

				<li class="menuli"><a href="liste.php" class="menulink">Liste</a></li>

				<li class="menuli"><a href="add.php" class="menulink">Ajouter</a></li>

				<li class="menuli"><a href="delete.php" class="menulink">Supprimer</a></li>

			</ul>

		</div>



		<div>

			<table border="1" cellpadding="2" cellspacing="0" id=tableusers >

				<tbody>



					<tr>

						<td>Nom</td>

						<td>Pseudo</td>

						<td>E-mail</td>

						<td>Mot de passe</td>

						<td>ID</td>

					</tr>

					<?php



                		// Récupération des 20 derniers messages



    					$reponse = $bdd->query('SELECT name, pseudo, email, pass,  id FROM membres ORDER BY id DESC');



    



    					// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)



    					while ($donnees = $reponse->fetch())



    					{



    				   		echo '<tr><td>' .   $donnees['name'] . '</td><td>' . $donnees['pseudo'] . '</td><td>' . $donnees['email'] .'</td><td>' . $donnees['pass'] . '</td><td>' . $donnees['id'] . '</tr><br><br>';



    					}



    					$reponse->closeCursor();



    



    				?>

				</tbody>

			</table>

		</div>

						

	</body>

</html>