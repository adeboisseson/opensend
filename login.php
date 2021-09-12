<?php
   session_start();   
   $stat = session_status();
   if($stat == 1){
    header('Location: opensend.php');
   }
?>
<!DOCTYPE html>
<html lang=fr>
    <head>
        <title>
            Connexion
        </title>
        <link type="text/css" rel="stylesheet" href="stylelogin.css">
        <style type="text/css">
            body {
                background-image: url(https://duckduckgo.com/assets/spread/background.svg) ;
                background-repeat: no-repeat;
                background-size: 100% auto;
                background-color: #230545;
            }
            
        </style>
    </head>
    <body>
        <div class=logmenu>

            <br>

            <ul id=Menu>
                <li class="menuli"><a href="login.html" class="menulink">Connexion</a></li>
                <li class="menuli"><a href="inscription.html" class="menulink">Inscription</a></li><br>
            </ul>

        </div>
        <form id=loginform action="login-verification.php" method="POST">
            <h1 id="seconnecter">OpenChat</h1>
            <input type="email" name="email" id="emailinput" class="inputs" placeholder="E-mail"><br><br>
            <input type="password" name="password" id="passwordinput" class="inputs" placeholder="Mot de passe"><br><br>
            <input type="submit" name="submit" id="submit" value="Se connecter">
        </form>
            
    </body>
</html>