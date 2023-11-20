<!DOCTYPE html>
<html>
    <head>
        <title>Canviar contrasenya</title>
        <meta charset="UTF-8">
        <!--Boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--CSS-->
        <link rel="stylesheet" href="estils/estils.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <h1 class="centrar">Canvia la contrasenya</h1>
        </div>
        <div class="container">
            <form method="post">
                <div class="form-group">
                    <label for="actualPass">Contrasenya actual</label>
                    <input type="text" class="form-control" name="actualPass" placeholder="Contrasenya actual" required><br>
                </div>
                <div class="form-group">
                    <label for="newPass">Nova contrasenya</label>
                    <input type="password" class="form-control" name="newPass" placeholder="Nova contrasenya" required><br>
                </div>
                <div class="form-group">
                    <label for="newPassConfirm">Confirma la nova contrasenya</label>
                    <input type="password" class="form-control" name="newPassConfirm" placeholder="Confirma la nova contrasenya" required><br>
                </div>
                <button type="submit" name="modificarPass">Modificar</button>
                <button type="button" name="tornar" onclick="window.location.href='./perfilUsuari.php'">Tornar</button>
            </form>
        </div>
        <?php
            if(isset($_POST['modificarPass'])){
                require_once 'controlador/CcanviarPass.php';
                comprovarPass();
            }
        ?>
    </body>
</html>