<?php
//Angel Tarensi
//trucar a les funcions següents

//Si le da al botono de cerrar sesion, se destruye la sesion y se le redirige a la pagina de los articulos
function tancarSessio(){
    if(isset($_POST['close'])){
        session_start();
        session_destroy();
        header('Location: ../Pt05_Angel_Tarensi');
        exit();
    }
}
?>