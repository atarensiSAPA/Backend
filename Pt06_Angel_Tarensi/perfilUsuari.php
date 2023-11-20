<?php
require_once 'model/MperfilUsuari.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Perfil de <?php getUsername();?></title>
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
                <h5><?php getUsername();?></h5>
                <a href="./canviarNom.view.php">Editar nom d'usuari</a><br>
                <a href="./canviarPass.view.php">Canviar contrasenya</a><br>
                <a href="" class="eliminarCompte">Eliminar compte</a><br><br>
                <button type="button" name="tornar" onclick="window.location.href='./index.admin.php'">Tornar</button>
            </div>
            <a href="" class="canviImg">Canviar la imatge de perfil </a>
        </div>
        
    </body>
</html>