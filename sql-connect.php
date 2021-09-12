<?php

include 'config.php';

try

{

    // On se connecte à MySQL

    $bdd = new PDO('mysql:host=' . $ddbhost . ';dbname=' . $ddbname . ';charset=utf8', ''. $ddbuser . '', '' . $ddbpassword .   '');

}

catch(Exception $e)

{

    // En cas d'erreur, on affiche un message et on arrête tout

        die('Erreur : '.$e->getMessage());

}



// Si tout va bien, on peut continuer



// On récupère tout le contenu de la table jeux_video

$reponse = $bdd->query('SELECT * FROM membres');



// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch())

{

?>

    <p>

    <strong>User</strong> : <?php echo $donnees['pseudo']; ?><br />

    Son mot de pase est :  <?php echo $donnees['pass']; ?><br />

    Son id est  <?php echo $donnees['id']; ?>


<?php

}



$reponse->closeCursor(); // Termine le traitement de la requête



?>

