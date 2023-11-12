<?php
//Angel Tarensi
require_once 'model/MrecuperacioP.php';

//Importacio de la llibreria PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Carguem els fitxers de la llibreria PHPMailer
require 'controlador/PHPMailer-master\src\Exception.php';
require 'controlador/PHPMailer-master\src\PHPMailer.php';
require 'controlador/PHPMailer-master\src\SMTP.php';

if(isset($_POST['recuperar'])){
function enviarCorreu(){
    $email = $_POST['emailR'];
    if(comprovaEmail($email)){
        //obtenir id de l'usuari a partir de l'email
        $id = idUsuariR($email);
        //crear token
        crearToken($id);
        //obtenir token
        $token = obtenirToken($id);
        if($token != false){
            $link = "http://localhost/backEnd/uf1/Practiques/Backend/Pt05_Angel_Tarensi/canviarP.view.php?id=".$id."&token=".$token;
            $missatge = "Has demanat recuperar la contrasenya, si vols recuperar-la clica al següent enllaç: ".$link;
            mailRecuperarP($email, "Recuperar contrasenya", $missatge);
            echo "S'ha enviat un correu electrònic a ".$email;
        }
    }else{
        echo "El correu electrònic no existeix";
    }
}
}

//Enviar correu electrònic per recuperar la contrasenya
function mailRecuperarP($email, $subject, $message){

        
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
        $mail->setFrom($email);
        $mail->addAddress($email);               //Name is optional
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
    
        $mail->send();
        if($mail->send()){
            header("Location: ./enviarEmail.php");
        }
    } catch (Exception $e) {
        echo "Algo ha fallat: {$mail->ErrorInfo}";
    }

}
?>