<?php
//Angel Tarensi

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Modificar articles</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Modificar articles</h1>
        <form method="post">
            <input type="text" name="article" placeholder="Article" required><br>
            <input type="text" name="nouArticle" placeholder="Nou article" required>
            <button type="submit" name="modificar">Modificar</button>
        </form>
        <?php
        require_once 'model/modelAdmin.php';
        require_once 'controlador/controladorAdmin.php';
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //modificarArticle();
        }
        ?>
    </body>
</html>