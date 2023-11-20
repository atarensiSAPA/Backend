<?php
//Angel Tarensi

function comprovarNom(){
    $nouNom = htmlspecialchars($_POST['nouNom']);
    $actualPass = htmlspecialchars($_POST['actualPass']);

    require_once 'model/McanviarNom.php';
    if(McomprovarNomAntic($nouNom) && McomprovarNom($nouNom)){
        if(MupdateNom($nouNom, $actualPass)){
            header("Location: ./perfilUsuari.php");
        }
    }
}

function saveName(){
    if(isset($_POST['nouNom'])){
        return $_POST['nouNom'];
    }
}
?>