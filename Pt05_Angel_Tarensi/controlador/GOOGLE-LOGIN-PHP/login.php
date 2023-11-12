<?php
//Angel Tarensi
require_once 'config.php';

require_once 'google-api/vendor/autoload.php';

// Creating new google client instance
$client = new Google_Client();

// Enter your Client ID
$client->setClientId('693439287375-alcc1pi4k1qcuj60gkmqorl2e8cjdm77.apps.googleusercontent.com');
// Enter your Client Secrect
$client->setClientSecret('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');
// Enter the Redirect URL
$client->setRedirectUri('http://localhost/backEnd/uf1/Practiques/Backend/Pt05_Angel_Tarensi/controlador/google-login-php/login.php');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");


if(isset($_GET['code'])):

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if(!isset($token["error"])){

        $client->setAccessToken($token['access_token']);

        // getting profile information
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
    
        // Storing data into database
        $id = mysqli_real_escape_string($db_connection, $google_account_info->id);
        $email = mysqli_real_escape_string($db_connection, $google_account_info->email);

        // checking user already exists or not
        $get_user = mysqli_query($db_connection, "SELECT `google_id` FROM `usuaris` WHERE `google_id`='$id'");
        if(mysqli_num_rows($get_user) > 0){

            $_SESSION['email'] = $email; 
            header('Location: ../../index.admin.php');
            exit;

        }
        else{

            // if user not exists we will insert the user
            $insert = mysqli_query($db_connection, "INSERT INTO `usuaris`(`google_id`,`email`) VALUES('$id','$email')");

            if($insert){
                $_SESSION['email'] = $email; 
                header('Location: ./index.admin.php');
                exit;
            }
            else{
                echo "Sign up failed!(Something went wrong).";
            }

        }

    }
    else{
        //header('Location: index.php');
        exit;
    }
    
else: 

endif;
?>