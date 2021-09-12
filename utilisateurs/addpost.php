<?php 
include '../config.php';

$name = $_POST['name'];

$pseudo = $_POST['pseudo'];

$pass = $_POST['password'];

$email = $_POST['email'];

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

$req = $bdd->prepare('INSERT INTO membres(name, pseudo, pass, email) VALUES(:name, :pseudo, :pass, :email)');

$req->execute(array(
    'name' => $name,

    'pseudo' => $pseudo,

    'pass' => $pass,

    'email' => $email));

	header('Location: add.php');



?>