<?php 

$email = $_POST['email'];

$pass = $_POST['password'];

$passhash;

$passdb;

include 'config.php';

try

{

    $bdd = new PDO('mysql:host=' . $ddbhost . ';dbname=' . $ddbname . ';charset=utf8', ''. $ddbuser . '', '' . $ddbpassword .   '');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}

//  Récupération de l'utilisateur et de son pass hashé

$req = $bdd->prepare('SELECT id, pass, email, name, isadmin FROM membres WHERE email = :email');

$req->execute(array(

    'email' => $email));

$resultat = $req->fetch();



if($resultat['pass'] != $pass)

{

    echo 'Mauvais mot de passe !';
    echo $resultat['pass'];
    echo $resultat['email'];

    //header('Location: login.html');

}

else

{

    if ($resultat['pass'] == $pass && $pass != '' && $email != '') {

        session_start();

        $_SESSION['id'] = $resultat['id'];

        $_SESSION['pseudo'] = $pseudo;

        $_SESSION['email'] = $resultat['email'];

        $_SESSION['name'] = $resultat['name'];

        $_SESSION['isadmin'] = $resultat['isadmin'];

        $_SESSION['isloggedin'] = true;


        //echo 'Vous êtes connecté !';

        header('Location: opensend.php');

    }

    else {

        echo 'Mauvais identifiant ou mot de passe !';

        //header('Location: login.html');

    }

}





?>