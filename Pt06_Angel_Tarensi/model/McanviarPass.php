<?php
require_once 'model/connexio.php';
require_once 'controlador/controladorAdmin.php';

function comprovarNovaPass($actualPass, $newPass, $newPassConfirm){
    try{
        $conn = connexio();
        $email = $_SESSION['email'];
    
        $sql = $conn->prepare("SELECT * FROM usuaris WHERE email = ?");
        $sql->execute(array(
            $email,
        ));
        $resultat = $sql->fetch();
        if(password_verify($actualPass, $resultat['password'])){
            if($newPass == $newPassConfirm){
                $newPass = password_hash($newPass, PASSWORD_DEFAULT);
                $sql = $conn->prepare("UPDATE usuaris SET password = ? WHERE email = ?");
                $sql->execute(array(
                    $newPass,
                    $email,
                ));
                ?> <script>alert('S\'ha canviat la contrasenya');</script> <?php

                return true;
            }else{
                ?> <script>alert('Les contrasenyes no coincideixen');</script> <?php
                return false;
            }
        }else{
            ?> <script>alert('La contrasenya actual no coincideix amb la BD');</script> <?php
            return false;
        }   
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}
?>