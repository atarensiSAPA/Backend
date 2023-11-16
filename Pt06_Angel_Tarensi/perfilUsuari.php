<?php
require_once 'model/MperfilUsuari.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Perfil de <?php //getUsername();?></title>
        <!--Boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--CSS-->
        <link rel="stylesheet" href="estils/estils.css" type="text/css">
    </head>
    <body>
        <div class="container"><h1 class="centrar">La teva informació</h1></div>
        <div class="container">
            <img src="imatges/profilePic.jpg" alt="default" width="250px" height="250px" class="imgProfile">
            <div class="textProfile">
                <h3>NOM D'USUARI</h3>
                <p><?php //getUsername();?></p>
                <a href="">Editar nom d'usuari</a><br>
                <a href="">Canviar contrasenya</a><br>
                <a href="" class="eliminarCompte">Eliminar compte</a>
            </div>
            <a href="" class="canviImg">Canviar la imatge de perfil </a>
        </div>
        
    </body>
</html>