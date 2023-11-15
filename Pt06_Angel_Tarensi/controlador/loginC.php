<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/loginM.php';
require_once 'reCaptcha.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Comprovem que l'usuari existeixi a la BD
        function comprovacionsLogin(){
        // Check and sanitize input
        $username = comprovarUsernameLogin();
        $password = comprovarPasswordLogin($_POST['passwordL']);

        // Check if all input is valid
        if ($username && $password) {
            // compare $password with the hashed password in the database
            $desencryptedPassword = password_verify($password, hashPassword($username));
            if ($desencryptedPassword) {
                if(reCaptcha() || $_COOKIE['intents'] >= 1){
                    //Iniciem sessió
                    //posem el intents a 3
                    $_COOKIE['intents'] = 3;
                    session_start();
                    ini_set('session.gc_maxlifetime', 1800);
                    $_SESSION['email'] = getEmail($username);
                    header('Location: index.admin.php');
                }else {
                    echo "<br>reCaptcha incorrecte";
                }   
            }else {
                echo "<br>Contrasenya incorrecta";
                //restem un intent cada cop que la contrasenya sigui incorrecte
                setcookie('intents', $_COOKIE['intents'] - 1);
            }
        }
        }
        //funció per comprovar que l'username no estigui buit i retornar-lo
        function comprovarUsernameLogin(){
            $username = htmlspecialchars($_POST['usernameL']);
            if (isset($username)) {
                return $username;
            } else {
                echo "El nom d'usuari no pot estar buit";
                return false;
            }
        }
        //funció per comprovar que la contrasenya no estigui buida i retornar-la
        function comprovarPasswordLogin($password){
            $password = htmlspecialchars($password);
            if (isset($password)) {
                return $password;
            } else {
                echo "La contrasenya no pot estar buida";
                return false; // Password is empty
            }
        }
}
//funció per quan falli el login, retornar el username
function usernameLogin(){
    if(isset($_POST['usernameL'])){
        return $_POST['usernameL'];
    }
}

?>