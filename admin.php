<?php
    session_start();

    if($_SESSION['isadmin'] != 1) {
        header('Location: notadmin.html');
    } 

?>
<!DOCTYPE html>
<html lang=fr>
	<head>
		<title>
			Admin
		</title>
		<link type="text/css" rel="stylesheet" href="style.css">
	</head>
	<body>
		
		<div id=menudiv>
			<br>
			<ul id=Menu>
				<li class="menuli"><a href="opensend.php" class="menulink">&#x2B05; Retour</a></li>
				<li class="menuli"><a href="messages.php" class="menulink">Messages</a></li>
				<li class="menuli"><a href="utilisateurs.php" class="menulink">Utilisateurs</a></li><br>
			</ul>
		</div>
						
	</body>
</html>