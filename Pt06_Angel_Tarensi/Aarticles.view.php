<?php
//Angel Tarensi

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Afegir articles</title>
        <meta charset="UTF-8">
        <!--Boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Afegir articles</h1>
        </div>
        <div class="container">
            <form method="post">
                <div class="form-group">
                    <label for="article">Nou article</label>
                    <input type="text" class="form-control" name="article" placeholder="Article" required><br>
                </div>
                <div class="form-group">
                    <label for="nouArticle">Descprició</label>
                    <textarea class="form-control" name="nouArticle" placeholder="Descipció del article" required></textarea>
                </div>
                <button type="submit" name="modificar">Modificar</button>
                <button type="button" name="tornar" onclick="window.location.href='./index.admin.php'">Tornar</button>
            </form>
            <?php
            require_once 'model/modelAdmin.php';
            require_once 'controlador/controladorAdmin.php';
            if(isset($_POST['afegir'])){
                //afegirArticle();
            }
            ?>
        </div>
    </body>
</html>