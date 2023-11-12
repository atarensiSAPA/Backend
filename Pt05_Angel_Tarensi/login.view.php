<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/loginM.php';
require_once 'controlador/loginC.php';
require_once 'controlador/reCaptcha.php';
require_once 'controlador/GOOGLE-LOGIN-PHP/login.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <!--Boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--CSS-->
        <link rel="stylesheet" href="estils/estils.css" type="text/css">
	<title>Login</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <div class="contenidor">
        <form id="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <h1>Login</h1>
            <div class="form-group">
                <p>Username:</p>
                <input type="text" name="usernameL" placeholder="Username" id="usernameL" value="<?php echo usernameLogin() ?>" required>
            </div>
            <div class="form-group">
                <p>Password:</p>
                <input type="password" name="passwordL" placeholder="Password" id="passwordL" required>
            </div>
            <br><br>
            <button type="submit" value="login" name="login">Login</button>
            <button type="button" value="register" onclick="window.location.href='./register.view.php'">Registrar-se</button>
		
            <br>
            <button type="button" value="Articles" onclick="window.location.href='./index.php'">Articles</button>
            <button type="button" value="recuperarP" onclick="window.location.href='./recuperacioP.view.php'">Recuperar Password</button>
            <div>
                <div>
                    <br><a type="button" class="login-with-google-btn" href="<?php echo $client->createAuthUrl(); ?>">
                        Sign in with Google
                    </a>
                </div><br>
                <?php
                echo '<div class="g-recaptcha" data-sitekey="6LetJAEpAAAAAPDNBGroPVVe_P8rPSW_Bpt-XU5r" hidden></div>';
                mostrarReCaptcha();
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    comprovacionsLogin();
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>