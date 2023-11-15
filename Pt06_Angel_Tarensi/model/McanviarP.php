<?php
//Angel Tarensi
require_once 'controlador/CcanviarP.php';
require_once 'MrecuperacioP.php';

//funció per comprovar que la contrasenya no sigui la mateixa que la anterior
function comprovarPassBD($pass, $id){
    $conn = connexio();

    $sql = $conn->prepare("SELECT * FROM usuaris WHERE id = ?");
    $sql->execute(array(
        $id,
    ));
    $resultat = $sql->fetch();
    $oldPass = $resultat['password'];
    if(password_verify($pass, $oldPass)){
        return false;
    }else{
        return true;
    }
}

//funció per canviar la contrasenya
function canviarPassword($pass, $id, $token){
    $conn = connexio();
    $sql = $conn->prepare("SELECT token FROM usuaris WHERE id = ?");
    $sql->execute(array(
        $id,
    ));
    $resultat = $sql->fetch();
    if($resultat['token'] != $token){
        ?> <script>alert("El token no coincideix")</script><?php
        header('Location: login.view.php');
    }else
    $sql = $conn->prepare("UPDATE usuaris SET password = ? WHERE id = ?");
    $sql->execute(array(
        $pass,
        $id,
    ));
    
    ?> <script>alert("S'ha modificat la contrasenya")</script><?php
    header('Location: login.view.php');
}

?>