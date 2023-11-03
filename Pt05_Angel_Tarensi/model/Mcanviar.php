<?php
require_once "controlador/CcanviarP.php";
require_once "NrecuperacioP.php";

function comprovarPassBD($pass){
    $conn = connexio();
    $sql = $conn->prepare("SELECT password FROM usuaris WHERE id = ?");
    $sql->execute(array(
        $_SESSION['id'],
    ));
    $resultat = $sql->fetch();
    if(password_verify($pass, $resultat['password'])){
        return true;
    }else{
        return false;
    }

}

function canviarPassword($pass){
    $conn = connexio();
    $sql = $conn->prepare("UPDATE usuaris SET password = ? WHERE id = ?");
    $sql->execute(array(
        $pass,
        $_SESSION['id'],
    ));
    eliminarToken($_SESSION['id']);
}

?>