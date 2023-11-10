<?php
require_once 'controlador/CcanviarP.php';
require_once 'MrecuperacioP.php';

function comprovarPassBD($pass, $id){
    $conn = connexio();

    $sql = $conn->prepare("SELECT * FROM usuaris WHERE id = ?");
    $sql->execute(array(
        $id,
    ));
    $resultat = $sql->fetch();
    $oldPass = $resultat['password'];
    echo "oldpass: ".$oldPass."<br>";
    echo "pass: ".$pass;
    if(password_verify($pass, $oldPass)){
        return true;
    }else{
        return false;
    }
}

function canviarPassword($pass, $id){
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