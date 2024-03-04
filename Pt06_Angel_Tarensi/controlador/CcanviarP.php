<?php
//Angel Tarensi
require_once 'model/McanviarP.php';
require_once 'registerC.php';

//Agafem l'id i el token de la url i la guardem abans de que canvi
session_start();
if(!isset($_SESSION['idR'])){
    $_SESSION['idR'] = $_GET['id'];
    $_SESSION['tokenR'] = $_GET['token'];
}

//funció per comprovar que les dues contrasenyes siguin iguals, encriptarla i canviar la contrasenya
function canviarPass(){
$id = $_SESSION['idR'];
$token = $_SESSION['tokenR'];

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
?>