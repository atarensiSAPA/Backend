<?php
require_once 'model/McanviarP.php';
require_once 'registerC.php';

session_start();
if(!isset($_SESSION['idR'])){
    $_SESSION['idR'] = $_GET['id'];
    $_SESSION['tokenR'] = $_GET['token'];
}

function canviarPass(){
$id = $_SESSION['idR'];
$token = $_SESSION['tokenR'];

    if(isset($_POST['canviar'])){
        if(isset($_POST['canviar'])){
            $password1 = $_POST['password1R'];
            $password2 = $_POST['password2R'];
            if($password1 == $password2){
                if(comprovarPassBD($password1, $id)){
                    $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);
                    canviarPassword($hashedPassword, $id, $token);
                }else{
                    echo "<br>La contrasenya es la mateixa que l'anterior";
                }
            }else{
                echo "<br>Les contrasenyes no coincideixen";
            }
        }
    }
}
?>