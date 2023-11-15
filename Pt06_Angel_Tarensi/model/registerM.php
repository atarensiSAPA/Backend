<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/connexio.php';
require_once 'controlador/registerC.php';

    //Registrem l'usuari a la BD
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        function registrarUsuari($usernameR, $emailR, $passwordR){          
            //Comprovar que el nom d'usuari no existeixi a la BD
            $connexio = connexio();
            $username = htmlspecialchars($usernameR);
            $email = htmlspecialchars($emailR);
            $password = htmlspecialchars($passwordR);

            $sql = $connexio->prepare("SELECT * FROM usuaris WHERE username = ?");
            $sql->execute(array(
                $username,
            ));
            $comprovarUsername = $sql->fetch();
            //Comprovar que l'email no existeixi a la BD
            $sql = $connexio->prepare("SELECT * FROM usuaris WHERE email = ?");
            $sql->execute(array(
                $email
            ));
            $comprovarEmail = $sql->fetch();

            //Si no existeix el registrem a la BD
            if($comprovarUsername == null){
                if($comprovarEmail == null){
                    $sql = $connexio->prepare("INSERT INTO usuaris (username, password, email) VALUES (?, ?, ?)");
                    $sql->execute(array(
                        $username,
                        $password,
                        $email
                    ));
                    echo "Usuari registrat correctament, esperi 2 segons";
                    sleep(2);
                    header('Location: login.view.php');
                }else echo "L'email ja existeix";
            }else echo "L'username ja existeix";
        }
    }
    
?>