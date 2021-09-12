<?php
    session_start();

    if($_SESSION['isadmin'] != 1) {
        header('Location: ../notadmin.html');
    }  

?>
<!DOCTYPE html>
<html lang=fr>
	<head>
		<title>
			Utilisateurs - Ajouter
		</title>
		<link type="text/css" rel="stylesheet" href="../style.css">
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
		<div id="adduserform">
			<form action="addpost.php" method="post">
				<input type="text" name="name" placeholder="Nom">
				<input type="text" name="pseudo" placeholder="Pseudo">
				<input type="email" name="email" placeholder="E-mail">
				<input type="password" name="password" placeholder="Mot de passe">
				<input type="submit" name="submit" value="Ajouter">
			</form>
		</div>
						
	</body>
</html>