<?php
require_once 'controlador/CcanviarP.php';
?>

<html>
<head>
    <title>Canviar contrasenya</title>
</head>
<body>
    <h1>Canviar contrasenya</h1>
    <form action="canviarP.view.php" method="POST">
        <label for="password">Contrasenya:</label>
        <input type="password" name="password1R" id="password1R" placeholder="Contrasenya" required><br>
        <label for="password2">Repeteix la contrasenya:</label>
        <input type="password" name="password2R" id="password2R" placeholder="Repeteix la contrasenya" required><br>
        <button type="submit" name="canviar" id="canviar" value="Canviar">Canviar</button><br>
        <button type="button" onclick="window.location.href='index.php'">Tornar a l'index</button>
        <?php 
        canviarPass();
        ?>
    </form>
</html>