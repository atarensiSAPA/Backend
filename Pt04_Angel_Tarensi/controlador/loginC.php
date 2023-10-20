<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/loginM.php';

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
                //Iniciem sessió
                session_start();
                ini_set('session.gc_maxlifetime', 1800);
                $_SESSION['username'] = $username;
                header('Location: index.admin.php');

            }
        }
        }
        function comprovarUsernameLogin(){
            $username = htmlspecialchars($_POST['usernameL']);
            if (isset($username)) {
                return $username;
            } else {
                echo "El nom d'usuari no pot estar buit";
                return false; // Username is empty
            }
        }
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
function usernameLogin(){
    if(isset($_POST['usernameL'])){
        return $_POST['usernameL'];
    }
}

?>