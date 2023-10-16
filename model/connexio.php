<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/db-constants.php';

function connexio(){
    try{
        //la varaible connexio es la que fa la conexio a la BD, els valors DB... son constants definidas globalment a db-constants.php
        $connexio = new PDO(sprintf('mysql:host=%s;dbname=%s',DB_HOST, DB_NAME), DB_USER, DB_PASS);

        
        //si es null es que no s'ha pogut conectar
        if($connexio == null){
            die();
        }else
        
        //retorna la conexio per les alters funcions
        return $connexio;
    }catch(PDOException $e){
            echo "Error: No s'ha pogut connectar amb la base de dades!!" . "<br />";
            die();
    }
}
?>