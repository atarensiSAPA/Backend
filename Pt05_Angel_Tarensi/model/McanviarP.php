<?php
require_once 'controlador/CcanviarP.php';
require_once 'MrecuperacioP.php';

function comprovarPassBD($pass){
    $conn = connexio();
    if(isset($_GET['id'])){$id = htmlspecialchars($_GET['id']);}
    $sql = $conn->prepare("SELECT * FROM usuaris WHERE id = ?");
    $sql->execute(array(
        $id,
    ));
    $resultat = $sql->fetch();
    $oldPass = $resultat['password'];
    if(password_verify($pass, $oldPass)){
        return true;
    }else{
        return false;
    }
}

function canviarPassword($pass){
    $conn = connexio();
    $id = htmlspecialchars($_GET['id']);
    $sql = $conn->prepare("UPDATE usuaris SET password = ? WHERE id = ?");
    $sql->execute(array(
        $pass,
        $id,
    ));
    eliminarToken($id);
}

?>