<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/connexio.php';
require_once 'controlador/register.php';

    //Registrem l'usuari a la BD
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        function registrarUsuari(){          
            //Comprovar que el nom d'usuari no existeixi a la BD
            $connexio = connexio();
            $username = comprovarUsername();
            $password = compararEncriptar();
            $email = comprovarEmail();

            $sql = "SELECT * FROM usuaris WHERE username = $username AND email = $email";
            $query = $connexio->prepare($sql);
            $query->execute();
            $comprovar = $query->fetch();
            
            //Si no existeix el registrem a la BD
            if($comprovar == null){
                $sql = "INSERT INTO usuaris (nom_usuari, password, email) VALUES ($username, $password, $email)";
                $query = $connexio->prepare($sql);
                $query->execute();
            }else{
                echo "L'usuari ja existeix";
            }
        }
    }
    
?>