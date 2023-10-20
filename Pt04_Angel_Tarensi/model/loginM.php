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
        $sql = $connexio->prepare("SELECT password FROM usuaris WHERE username = ?");
        $sql->execute(array(
            $username,
        ));
        $comprovarUsername = $sql->fetch();
        return $comprovarUsername['password'];
    }
}
?>