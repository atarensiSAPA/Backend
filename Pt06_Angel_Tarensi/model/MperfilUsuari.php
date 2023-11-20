<?php
require_once 'model/connexio.php';
require_once 'controlador/controladorAdmin.php';

function getUsername(){
    $conn = connexio();

    $email = $_SESSION['email'];
    $sql = $conn->prepare("SELECT username FROM usuaris WHERE email = ?");
    $sql->execute(array(
        $email,
    ));
    $resultat = $sql->fetch();
    $username = $resultat['username'];
    if($username == ""){
        echo $email;
    }else{
        echo $username;
    }
}

?>