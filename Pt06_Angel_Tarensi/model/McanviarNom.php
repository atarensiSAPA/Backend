<?php
require_once 'model/connexio.php';
require_once 'controlador/controladorAdmin.php';

function McomprovarNom($nom){
    $conn = connexio();
    $sql = $conn->prepare("SELECT username FROM usuaris WHERE username = ?");
    $sql->execute(array(
        $nom,
    ));
    $resultat = $sql->fetch();
    if(empty($resultat['username'])){
        return true;
    }else{
        ?> <script>alert('El nom d\'usuari ja existeix');</script> <?php
    }
}

function McomprovarNomAntic($nom){
    $conn = connexio();
    $email = $_SESSION['email'];
    $sql = $conn->prepare("SELECT username FROM usuaris WHERE email = ?");
    $sql->execute(array(
        $email,
    ));
    $resultat = $sql->fetch();
    if($resultat['username'] == $nom){
        ?> <script>alert('El nom d\'usuari és el mateix que l\'antic');</script> <?php
    }else{
        return true;
    }
}

function MupdateNom($nom, $pass){
    $conn = connexio();
    $email = $_SESSION['email'];
    $sql = $conn->prepare("SELECT * FROM usuaris WHERE email = ?");
    $sql->execute(array(
        $email,
    ));
    $resultat = $sql->fetch();
    if(password_verify($pass, $resultat['password'])){
        $sql = $conn->prepare("UPDATE usuaris SET username = ? WHERE email = ?");
        $sql->execute(array(
            $nom,
            $email,
        ));
        ?> <script>alert('S\'ha canviat el nom d\'usuari');</script> <?php
        return true;
    }else{
        echo "La contrasenya no coincideix";
        return false;
    }
}

?>