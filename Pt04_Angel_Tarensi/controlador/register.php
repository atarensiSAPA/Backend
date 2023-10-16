<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/connexio.php';
require_once 'model/register.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Comprovar que las 2 contraseña son iguals y despues encriptarlas
        function compararEncriptar(){
            $password1 = comprovarPassword1();
            $password2 = comprovarPassword2();
            if($password1 == $password2){
                $password = password_hash($password1, PASSWORD_DEFAULT);
                return $password;
            }else{
                echo "Les contrasenyes no son iguals";
            }
        }
        function comprovarUsername(){
            $username = htmlspecialchars($_POST['nom_usuari']);
            if(isset($username)){
                return $username;
            }else{
                echo "El nom d'usuari no pot estar buit";
            }
        }
        function comprovarEmail(){
            $email = htmlspecialchars($_POST['email']);
            if(isset($email)  && filter_var($email, FILTER_VALIDATE_EMAIL)){
                return $email;
            }else{
                echo "El email no pot estar buit";
            }
        }
        function comprovarPassword1(){
            $password = htmlspecialchars($_POST['password1']);
            if(isset($password)){
                return $password;
            }else{
                echo "La contrasenya no pot estar buida";
            }
        }
        function comprovarPassword2(){
            $password = htmlspecialchars($_POST['password2']);
            if(isset($password)){
                return $password;
            }else{
                echo "La contrasenya no pot estar buida";
            }
        }
    }
?>