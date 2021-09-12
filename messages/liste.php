<?php
    session_start();

    if($_SESSION['isadmin'] != 1) {
        header('Location: ../notadmin.html');
    } 
    
    include '../config.php';

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

<!DOCTYPE html>
<html lang=fr>
	<head>
		<title>
			Messages - Liste
		</title>
		<link type="text/css" rel="stylesheet" href="../style.css">
	</head>
	<body>
		
		<div id=menudiv>
			<br>
			<ul id=Menu>
				<li class="menuli"><a href="../admin.php" class="menulink">&#x2B05; Retour</a></li>
				<li class="menuli"><a href="liste.php" class="menulink">Liste</a></li>
				<li class="menuli"><a href="delete.php" class="menulink">Supprimer</a></li>
			</ul>
		</div>
		<div>
			<table border="1" cellpadding="2" cellspacing="0" id=tablemessages>
				<tbody>
					<tr>
						<td>Pseudo</td>
						<td>Message</td>
						<td>Chanel</td>
						<td>Date</td>
						<td>ID</td>
					</tr>
					<?php

    					$reponse = $bdd->query('SELECT pseudo, message,chanel, senddate, id FROM `post` ORDER BY id DESC');

    					while ($donnees = $reponse->fetch())
    					{
    				   		echo '<tr><td>' .   $donnees['pseudo'] . '</td><td>' . $donnees['message'] . '</td><td>' . $donnees['chanel'] .'</td><td>' . $donnees['senddate'] . '</td><td>' . $donnees['id'] . '</tr><br><br>';

    					}

    					$reponse->closeCursor();

    				?>
				</tbody>
			</table>
		</div>						
	</body>
</html>