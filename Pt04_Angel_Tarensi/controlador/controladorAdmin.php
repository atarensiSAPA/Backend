<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/modelAdmin.php';

//Mientras no se haya iniciado sesión, no se podrá acceder a la página de administración
session_start();
if(!isset($_SESSION['username'])){
    header('Location: ../Pt04_Angel_Tarensi/');
    echo "a";
}

?>