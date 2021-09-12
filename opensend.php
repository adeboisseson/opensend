<?php
   session_start();   
   $stat = session_status();
   if($_SESSION['isloggedin'] != true){
    header('Location: login.php');
   }
?>

<?php

	// Connexion à la base de données

	include 'config.php';
	
	try

	{

		$bdd = new PDO('mysql:host=' . $ddbhost . ';dbname=' . $ddbname . ';charset=utf8', ''. $ddbuser . '', '' . $ddbpassword .   '');

	}

	catch(Exception $e)

	{

   	    die('Erreur : '.$e->getMessage());

	}



?>



<!DOCTYPE html>

<html lang=fr>

	<head>

		<title>

			OpenChat

		</title>

		<link type="text/css" rel="stylesheet" href="style.css">



	</head>

	<body>

		

		<div id=menudiv>

			<br>

			<ul id=Menu>
				<li class="menuli"><a href="opensend.php" class="menulink">Messages</a></li>

				<li class="menuli"><a href="profil.php" class="menulink">Profil</a></li>

				<li class="menuli"><a href="options.php" class="menulink">Options</a></li>

				
				<?php
			   		if($_SESSION['isadmin'] == 1) {
        				echo '<li class="menuli"><a href="admin.php" class="menulink">Administration</a></li>';
    				} 
				?>
				<li class="menuli"><a href="deconnection.php" class="menulink">Déconnexion</a></li><br>
				
			</ul>

		</div>
		<!--<div id=channelsdiv>

			<br>

			<ul id=channels>
				<li class="channelli"><a href="opensend.php" class="channellink">Messages</a></li>
				<button class="channelli">Hey</button>

				<li class="channelli"><a href="profil.php" class="channellink">Profil</a></li>

				<li class="channelli"><a href="options.php" class="channellink">Options</a></li>

				
			</ul>

		</div>-->

			<form id=messageform action="opensend_post.php" method="post">

		 		<input type="text" name="message" id="messageinput" autofocus="true">

		 		<input type="submit" name="submit" id="submit" hidden="true">

			</form>

    



			<div id="messages">

			    

                	<?php

                		// Récupération des 20 derniers messages

    					$reponse = $bdd->query('SELECT pseudo, message, id FROM post ORDER BY id DESC');

    

    					// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

    					while ($donnees = $reponse->fetch())

    					{

    				   		echo '<div class="messagediv" id="' . $donnees['id'] . '"><p class="message"><strong class="pseudo">' .   $donnees['pseudo'] . '</strong> : ' . $donnees['message'] . '</p></div><br><br>';

    					}

    

    					$reponse->closeCursor();

    

    				?>

    		</div>

	</body>

</html>