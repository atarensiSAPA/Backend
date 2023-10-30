<?php
require_once("model/MrecuperacioP.php");
require_once("model/modelAdmin.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    if(comprovaEmail($email)){
        $id = idUsuari($email);
        $token = obtenirToken($id);
        if($token != false){
            $link = "http://localhost/pt05_Angel_Tarensi/recuperacioP.view.php?id=".$id."&token=".$token;
            $missatge = "Has demanat recuperar la contrasenya, si vols recuperar-la clica al següent enllaç: ".$link;
            mail($email, "Recuperar contrasenya", $missatge);
            echo "S'ha enviat un correu electrònic a ".$email;
        }
    }else{
        echo "El correu electrònic no existeix";
    }
}

?>