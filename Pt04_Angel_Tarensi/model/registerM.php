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

            $sql = $connexio->prepare("SELECT * FROM usuaris WHERE username = ? AND email = ?");
            $sql->execute(array(
                $username,
                $email
            ));
            $comprovar = $sql->fetch();

            //Si no existeix el registrem a la BD
            if($comprovar == null){
                $sql = $connexio->prepare("INSERT INTO usuaris (username, password, email) VALUES (?, ?, ?)");
                $sql->execute(array(
                    $username,
                    $password,
                    $email
                ));
            }else{
                echo "L'usuari ja existeix";
            }
        }
    }
    
?>