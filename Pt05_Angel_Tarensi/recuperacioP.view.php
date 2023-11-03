<?php 
    require_once("controlador/CrecuperacioP.php");
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
            <div class="formulari">
                <form action="recuperacioP.view.php" method="POST">
                    <label for="emailR">Correu electrònic:</label>
                    <input type="email" name="emailR" id="emailR" placeholder="Correu electrònic" required>
                    <button type="submit" name="recuperar" value="Recuperar">Recuperar</button>
                </form>
            </div>
            <div class="enllaços">
                <button type="button" name="inici" onclick="window.location.href='./index.php'">Tornar a l'inici</button>
            </div>
        </div>
    </body>
</html>