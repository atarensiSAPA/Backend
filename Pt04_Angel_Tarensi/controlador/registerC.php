<?php
// Include necessary files
require_once 'model/connexio.php';
require_once 'model/registerM.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Function to compare and hash passwords
    function compararEncriptar(){
        $password1 = comprovarPassword($_POST['password1']);
        $password2 = comprovarPassword($_POST['password2']);

        if ($password1 == $password2) {
            return password_hash($password1, PASSWORD_DEFAULT);
        } else {
            echo "Las contrasenyes no son iguals";
            return false; // Passwords do not match
        }
    }

    // Function to sanitize and validate username
    function comprovarUsername(){
        $username = htmlspecialchars($_POST['username']);
        if (!empty($username)) {
            return $username;
        } else {
            echo "El nom d'usuari no pot estar buit";
            return false; // Username is empty
        }
    }

    // Function to sanitize and validate email
    function comprovarEmail(){
        $email = htmlspecialchars($_POST['email']);
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $email;
        } else {
            echo "El email no pot estar buit o no es valid";
            return false; // Email is empty or invalid
        }
    }

    // Function to sanitize and validate password
    function comprovarPassword($password){
        $password = htmlspecialchars($password);
        if (!empty($password)) {
            return $password;
        } else {
            echo "La contrasenya no pot estar buida";
            return false; // Password is empty
        }
    }

    function comprovacions(){
        // Check and sanitize input
        $username = comprovarUsername($_POST['username']);
        $email = comprovarEmail($_POST['email']);
        $password1 = comprovarPassword($_POST['password1']);
        $password2 = comprovarPassword($_POST['password2']);

        // Check if all input is valid
        if ($username && $email && $password1 && $password2) {
            // Compare and hash passwords
            $hashedPassword = compararEncriptar($password1, $password2);

            if ($hashedPassword) {
                // Call your registration function with sanitized data
                registrarUsuari($username, $email, $hashedPassword);

            }
        }
    }
}
?>
