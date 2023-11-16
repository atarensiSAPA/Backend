<?php
require_once 'model/connexio.php';

function getUsername(){
    $conn = connexio();

    $email = $_SESSION['email'];
    $sql = $conn->prepare("SELECT username FROM usuaris WHERE email = ?");
    $sql->execute(array(
        $email,
    ));
    $resultat = $sql->fetch();
    $username = $resultat['username'];
    echo $username;
    echo $email;
    if($username == ""){
        return $email;
    }else{
        return $username;
    }
}

?>