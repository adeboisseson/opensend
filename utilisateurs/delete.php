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

			Utilisateurs - Supprimer

		</title>

		<link type="text/css" rel="stylesheet" href="../styleadmin.css">


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

		<div id="deleteuserform">

			<form action="deletepost.php" method="post">

				<input type="text" checked="true" name="id" placeholder="ID">

				<input type="submit" name="submit" value="Supprimer">

				<!-- empecher envoi de lettres -->

			</form>

		</div>

						

	</body>

</html>