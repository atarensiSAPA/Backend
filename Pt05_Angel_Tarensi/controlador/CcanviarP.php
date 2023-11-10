<?php
require_once 'model/McanviarP.php';
require_once 'registerC.php';

function canviarPass(){
    if(isset($_GET['id']))$id = htmlspecialchars($_GET['id'])?? "";
    if(isset($_POST['canviar'])){
        $password1 = $_POST['password1R'];
        $password2 = $_POST['password2R'];
        if($password1 == $password2){
            if(comprovarPassBD($password1, $id)){
                $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);
                canviarPassword($hashedPassword, $id);
                ?> <script>alert("S'ha modificat la contrasenya")</script><?php
                header('Location: login.view.php');
            }else{
                echo "<br>La contrasenya es la mateixa que l'anterior";
            }
        }else{
            echo "<br>Les contrasenyes no coincideixen";
        }
    }
}
?>