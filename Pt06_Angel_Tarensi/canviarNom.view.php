<!DOCTYPE html>
<html>
    <head>
        <title>Canviar nom d'usuari</title>
        <meta charset="UTF-8">
        <!--Boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--CSS-->
        <link rel="stylesheet" href="estils/estils.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <h1 class="centrar">Canvia el teu nom d'usuari</h1>
        </div>
        <div class="container">
            <form method="post">
                <div class="form-group">
                    <label for="nouNom">Nou nom d'usuari</label>
                    <input type="text" class="form-control" name="nouNom" placeholder="Nou nom que vols que es mostri" required><br>
                </div>
                <div class="form-group">
                    <label for="actualPass">Contrasenya actual</label>
                    <input type="password" class="form-control" name="actualPass" placeholder="Contrasenya actual de l'usuari" required><br>
                </div>
                <button type="submit" name="modificarNom">Modificar</button>
                <button type="button" name="tornar" onclick="window.location.href='./perfilUsuari.php'">Tornar</button>
            </form>
        </div>
        <?php
            if(isset($_POST['modificarNom'])){
                require_once 'controlador/CcanviarNom.php';
                comprovarNom();
            }
        ?>
    </body>
</html>