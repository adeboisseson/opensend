<?php
   session_start();   
   $stat = session_status();
   if($_SESSION['isloggedin'] != true){
    header('Location: login.html');
   }
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Options - OpenSend</title>
	<link type="text/css" rel="stylesheet" href="style.css">

</head>
<body>
	<h1 class="titles">Options</h1>			

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
				<li class="menuli"><a href="deconnection.php" class="menulink">Déconnexion</a></li>

			</ul>

		</div>
</body>
</html>