<?php
require_once 'controlador/canviarP.php';
?>

<html>
<head>
    <title>Canviar contrasenya</title>
</head>
<body>
    <h1>Canviar contrasenya</h1>
    <form action="canviarP.view.php" method="POST">
        <label for="password">Contrasenya:</label>
        <input type="password" name="password1" id="password1" placeholder="Contrasenya" required><br>
        <label for="password2">Repeteix la contrasenya:</label>
        <input type="password" name="password2" id="password2" placeholder="Repeteix la contrasenya" required><br>
        <button type="submit" name="canviar" value="Canviar">Canviar</button>
    </form>
    <button type="button" onclick="window.location.href='index.php'">Tornar a l'index</button>
</html>