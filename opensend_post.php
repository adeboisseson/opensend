<?php

session_start();

// Connexion à la base de données

include 'config.php';

try

{

	$bdd = new PDO('mysql:host=' . $ddbhost . ';dbname=' . $ddbname . ';charset=utf8', ''. $ddbuser . '', '' . $ddbpassword .   '');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}





$search = array(':clin:', ':souriant:', ':larmesjoie:', ':lunettesoleil:');

$replace = array('&#128540;', '&#128512;', '&#128514', '&#128526');

$messagecorrect = str_replace($search, $replace, $_POST['message']);
$messagecorrect = spoiler($messagecorrect);
function spoiler($text){
 
    return preg_replace_callback('#\[spoil\](.+)\[/spoil\]#','add_spoil',$text);
 
 
}
 
function add_spoil($matches){
     
    return '<span title="cliquez pour afficher le contenu masqué" class="txt-spoil">SPOILER</span><span style="display:none;">'.$matches[1].'</span>';
 
}



// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO post (pseudo, message, senddate) VALUES(?, ?, ?)');

$req->execute(array($_SESSION['pseudo'], $messagecorrect, date('y-m-d h:i:s')));



// Redirection du visiteur vers la page du minichat

header('Location: opensend.php');

?>