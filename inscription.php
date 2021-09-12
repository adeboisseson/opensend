<?php 



$pseudo = $_POST['pseudo'];

$pass = $_POST['password'];

$pass2 = $_POST['password2'];

$email = $_POST['email'];

$name = $_POST['name'];

try

{

    $bdd = new PDO('mysql:host=' . $ddbhost . ';dbname=' . $ddbname . ';charset=utf8', ''. $ddbuser . '', '' . $ddbpassword .   '');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}

// Vérification de la validité des informations







// Insertion
if($pass == $pass2 && $name != '' && $pseudo != '' && $email != '') {

    $req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');

    $req->execute(array(

        'pseudo' => $pseudo,

        'pass' => $pass,

        'email' => $email));

    	session_start();

        $_SESSION['id'] = $id;

        $_SESSION['pseudo'] = $pseudo;

        $_SESSION['email'] = $email;

        $_SESSION['name'] = $name;

        $_SESSION['isadmin'] = 0;

        $_SESSION['isloggedin'] = true;


        //echo 'Vous êtes connecté !';

        header('Location: profil.php');


} else {
    header('Location: inscription.html');
}
?>