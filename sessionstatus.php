

<?php
    session_start();

    if($_SESSION['isadmin'] == 1) {
        echo 'Vous êtes admin,' . $_SESSION['name'] .'  !';
    } 
    else {
        header('Location: login.php');

    } 

?>