<?php
require_once 'controlador/CcanviarP.php';
require_once 'MrecuperacioP.php';

function comprovarPassBD($pass){
    $conn = connexio();
    $sql = $conn->prepare("SELECT password FROM usuaris WHERE id = ?");
    $sql->execute(array(
        $_GET['id']?? "",
    )); 
    $resultat = $sql->fetch();
    $oldPass = $resultat;
    if(password_verify($pass, $oldPass)){
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
        $_GET['id']?? "",
    ));
    eliminarToken($_GET['id']?? "");
}

?>