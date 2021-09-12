<?php
   session_start();   
   $stat = session_status();
?>
<!DOCTYPE html>
<html>
<head>
	<title>OpenSend</title>
	<link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">
		#divimg {
			background-color: #230545;
			background-image: url(hiker.svg);
			background-repeat: no-repeat;
			background-size: 110%;
			width: 100%;
			position: absolute;
			top: 25%; left: 0;
			height: 75%;
			z-index: 10;
			
		}
		#divtop {
			width: 100%;
			position: absolute;
			top: 0; left: 0;
			height: 25%;
			background-color: #afd2ec;
		}
		#divtext {
			 z-index: 100;
			 color: #230545;
			 position: relative;
			 text-align: center;
			 margin: 0 auto;
			 padding: 5px;


		}
		#notadminnav{
			list-style-type: none;
			display: inline;
			position: absolute;
			z-index: 100;
			padding: 0;
		 	width: 90%;
		 	margin: 0 auto;
		 	text-align: center;
		 	background-color: red;
		}
		.menuli {
			margin-right: 10px;
			margin-left: 10px;
			list-style-type: none;
			color: #829297;
			font-family: Futura, Tahoma, sans-serif;
			padding: 5px;
			border-radius: 7px 7px;
			background-color: #2f3136;
			line-height: 1.5;
			left: 0px;
			-webkit-transition: color 0.5s;
		    transition: color 0.5s;
		}
		.menulink {
		  outline: none;
		  text-decoration: none;
		  display: inline;
		  line-height: 1.5;
		  color: #8e9297;
		  width: 100%;
		  margin-right: 0.625%;
		}
		a {
			color: #230545;
		}
		body {
			background-color: #230545;
		}
	</style>
</head>
<body>
	<div id="divtext"><h1>Commencez à découvrir le monde sous un autre horizon.<br>Découvrez le chat libre, OpenSend<br></h1><h2>
		<?php
		    if($stat != 1){
    			echo "<a href=\"login.php\">Se connecter</a>  |  <a href=\"inscription.html\">S'inscrire</a>";
   			}else {
   				echo "<a href=\"opensend.php\">Mon espace</a>  |  <a href=\"deconexion.php\">Se déconnecter</a>";
   			}

		?>
		</h2></div>

	<div id="divimg"> </div>
	<div id="divtop"> </div>
</body>
</html>