<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/connexio.php';
require_once 'controlador/loginC.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    function hashPassword($usernameL){
        $username = htmlspecialchars($usernameL);
        //Cojer la password de la BD y devolverla
        $connexio = connexio();
        //comprovar que l'username existeixi a la BD
        $sql = $connexio->prepare("SELECT * FROM usuaris WHERE username = ?");
        $sql->execute(array(
            $username,
        ));
        $comprovarUsername = $sql->fetch();
        //Si no existeix el registrem a la BD
        if(!$comprovarUsername == null){
            $sql = $connexio->prepare("SELECT password FROM usuaris WHERE username = ?");
            $sql->execute(array(
                $username,
            ));
            $pass = $sql->fetch();
            if($pass['password'] == null){
                echo "L'usuari no existeix";
            }else
            return $pass['password'];
        }else echo "L'usuari no existeix";
    }
    //funció per retornar l'email a partir de l'username
    function getEmail($username){
        $connexio = connexio();
        $sql = $connexio->prepare("SELECT * FROM usuaris WHERE username = ?");
        $sql->execute(array(
            $username,
        ));
        $email = $sql->fetch();
        return $email['email'];
    }
}
?>