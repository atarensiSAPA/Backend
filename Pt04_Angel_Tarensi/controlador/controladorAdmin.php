<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/modelAdmin.php';

function tancarsessio(){
//Si le da al botono de cerrar sesion, se destruye la sesion y se le redirige a la pagina de los articulos
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        session_start();
        session_destroy();
        header('Location: ../Pt04_Angel_Tarensi/');
    }   
}

//Mientras no se haya iniciado sesión, no se podrá acceder a la página de administración
session_start();
if(!isset($_SESSION['username'])){
    header('Location: ../Pt04_Angel_Tarensi/');
}

?>