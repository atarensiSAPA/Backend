<?php
require_once "model/McanviarP.php";
require_once "registerC.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $password1 = comprovarPassword($_POST['password1']);
    $password2 = comprovarPassword($_POST['password2']);
    if($password1 == $password2){
        $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);
        canviarPassword($hashedPassword);
        header('Location: index.php');
    }
}
?>