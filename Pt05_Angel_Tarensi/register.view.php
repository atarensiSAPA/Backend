<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/registerM.php';
require_once 'controlador/registerC.php';

//Si l'usuari ja ha fet login, el redirigeix a la pàgina principal
if(isset($_SESSION['email'])){
    header('Location: index.admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <!--Boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--CSS-->
        <link rel="stylesheet" href="estils/estils.css" type="text/css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>
    <div class="contenidor">
        <form method="post">
            <h1>Register</h1>
            <div class="form-group">
                <p>Username:</p>
                <input type="text" name="username" placeholder="Username" id="username" value="<?php echo username()?>" required>
            </div>
            <div class="form-group">
                <p>Email:</p>
                <input type="text" name="email" placeholder="email" id="email" value="<?php echo email()?>" required>
            </div>
            <div class="form-group">
                <p>Password:</p>
                <input type="password" name="password1" placeholder="Password" id="password1" required>                
            </div>
            <div class="form-group">
                <p>Torna a introduir la password:</p>
                <input type="password" name="password2" placeholder="Password" id="password2" required>
            </div>
            <button type="submit" value="Register" onclick="comprovacions()">Registrar-se</button>
            <button type="button" value="login" onclick="window.location.href='login.view.php'">Log-in</button>
            <br><br>
            <button type="button" value="Articles" onclick="window.location.href='index.php'">Articles</button><br>
            <div>
                <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    //trucar a la funció comprovacions() del controlador Cregister
                    comprovacions();
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>