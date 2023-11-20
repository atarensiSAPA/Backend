<?php
require_once 'model/McanviarPass.php';

function comprovarPass(){
    $actualPass = htmlspecialchars($_POST['actualPass']);
    $newPass = htmlspecialchars($_POST['newPass']);
    $newPassConfirm = htmlspecialchars($_POST['newPassConfirm']);

    if(comprovarNovaPass($actualPass, $newPass, $newPassConfirm)){
        header("Location: ./perfilUsuari.php");
    }
}
?>