<?php 

include '../config.php';

$id = $_POST['id'];

try

{

    $bdd = new PDO('mysql:host=' . $ddbhost . ';dbname=' . $ddbname . ';charset=utf8', ''. $ddbuser . '', '' . $ddbpassword .   '');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}
$req = $bdd->prepare('DELETE FROM `post` WHERE `id` = :id');

$req->execute(array(

    'id' => $id,));
    echo 'Supprimé avec succès ! <br>';
    echo '<a href="delete.html">Suivant</a>';
    header('Location: delete.php');



?>