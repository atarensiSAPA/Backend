<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/modelAdmin.php';
require_once 'controlador/GOOGLE-LOGIN-PHP/login.php';

//Mientras no se haya iniciado sesión, no se podrá acceder a la página de administración
if(!isset($_SESSION['email'])){
    header('Location: ../Pt05_Angel_Tarensi/');
}
?>