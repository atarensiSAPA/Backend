<?php
//Signatura del propietari: Angel Tarensi


//Importacio de la llibreria PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Carguem els fitxers de la llibreria PHPMailer
require 'C:\xampp\PHPMailer-master\src\Exception.php';
require 'C:\xampp\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\PHPMailer-master\src\SMTP.php';

//Enviar email amb php.ini
/*
function serverPost(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nom = htmlspecialchars($_POST["nom"]);
        $email = htmlspecialchars($_POST["email"]);
        $text = htmlspecialchars($_POST["text"]);

        if(!empty($nom) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($text)){
            $to = $email;
            $subject = "Formulario de contacto";
            $message = $text;
            $headers = "From: testdevirusyprovas@gmail.com";
            
            if (mail($to, $subject, $message, $headers)){
                echo "<h2>Enviat correctament</h2>";
            }else{
                echo "<h2>Algo ha fallat</h2>";
            }
        }
    }
}
*/


//Enviar email amb PHPMailer

function serverPOST(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nom = htmlspecialchars($_POST["nom"]);
        $email = htmlspecialchars($_POST["email"]);
        $text = htmlspecialchars($_POST["text"]);

        if(!empty($nom) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($_POST["text"])){
            $to = $email;
            $nom = $nom;
            $message = $text;
            
            enviarMail($to, $nom, $message);
        }
    }
}

//Funcio per enviar el mail
function enviarMail($email, $nom, $text){

    
    $mail = new PHPMailer(true);
    
    try {

        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'testdevirusyprovas@gmail.com';                     //SMTP username
        $mail->Password   = 'yxnd lamp xauk hrzr';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($email, $nom);
        $mail->addAddress($email);               //Name is optional
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Formulari de contacte amb PHPMailer';
        $mail->Body    = $text;
    
        $mail->send();
        echo 'Enviat correctament';
    } catch (Exception $e) {
        echo "Algo ha fallat: {$mail->ErrorInfo}";
    }

}


//Guardar les dades en cas que estiguin bé
    function nom(){
        if(isset($_POST["nom"]) && filter_var($_POST["nom"])){
            $nom = htmlspecialchars($_POST["nom"]);
            return $nom;
        }
    }
//Guardar les dades en cas que estiguin bé, el filter_var valida que sigui un email
    function email(){
        if(isset($_POST["email"])  && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $email = htmlspecialchars($_POST["email"]);
            return $email;
        }
    }
//Guardar les dades en cas que estiguin bé
    function text(){
        if(isset($_POST["text"]) && filter_var($_POST["text"])){
            $text = htmlspecialchars($_POST["text"]);
            return $text;
        }
    }
    
//Comprovar que els camps no estiguin buits
    function errorNom(){
        if(empty($_POST["nom"])){
            return "Introdueix un valor al camp nom";
        }
    }
//Comprovar que els camps no estiguin buits i que el email sigui valid
    function errorEmail(){
        if(empty($_POST["email"])){
            return "Introdueix un valor al camp email";
        }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            return "El email no es valid";
        }
    }
//Comprovar que els camps no estiguin buits
    function errorText(){
        if(empty($_POST["text"])){
            return "Introdueix un valor al camp text";
        }
    }

?>