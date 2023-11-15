<?php 
//Angel Tarensi
require_once("controlador/CrecuperacioP.php");

//Si l'usuari ja ha fet login, el redirigeix a la pàgina principal
if(isset($_SESSION['email'])){
    header('Location: index.admin.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recuperació de la contrasenya</title>
        <link rel="stylesheet" href="css/estils.css">
    </head>
    <body>
        <div class="contenidor">
            <div class="titol">
                <h1>Recuperació de la contrasenya</h1>
            </div>
            <div class="formulari" onchange="this.form.submit()">
                <form action="recuperacioP.view.php" method="POST">
                    <label for="emailR">Correu electrònic:</label>
                    <input type="email" name="emailR" id="emailR" placeholder="Correu electrònic" required>
                    <button type="submit" name="recuperar" value="Recuperar">Recuperar</button>
                </form>
            </div>
            <div class="enllaços">
                <button type="button" name="inici" onclick="window.location.href='./index.php'">Tornar a l'inici</button>
            </div>
            <?php
                if(isset($_POST['recuperar'])){
                    //trucar a la funció enviarCorreu() del controlador CrecuperacioP
                    enviarCorreu();
                }
            ?>
        </div>
    </body>
</html>