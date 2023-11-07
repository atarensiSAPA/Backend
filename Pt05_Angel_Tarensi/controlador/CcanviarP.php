<?php
require_once 'model/McanviarP.php';
require_once 'registerC.php';

if(isset($_POST['canviar'])){
    $password1 = $_POST['password1R'];
    $password2 = $_POST['password2R'];
    if($password1 == $password2){
        if(comprovarPassBD($password1)){
            $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);
            canviarPassword($hashedPassword);
            ?> <script>alert("S'ha modificat la contrasenya")</script><?php
            header('Location: login.view.php');
        }else{
            echo "La contrasenya es la mateixa que l'anterior";
        }
    }else{
        echo "Les contrasenyes no coincideixen";
    }
}
?>