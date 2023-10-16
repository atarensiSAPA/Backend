<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/connexio.php';
require_once 'controlador/controlador.php';
require_once 'taula.php';

function triaConsulta(){
    $dni = htmlspecialchars($_POST['dni']);
    $nom = htmlspecialchars($_POST['nom']);
    $adreca = htmlspecialchars($_POST['adreca']);

    //Si tots els camps estan buits, consultar tots els usuaris, si no, consultar un usuari
    if(empty($dni) && empty($nom) && empty($adreca)){
        mostrarPantalla();
    }else if(isset($dni) && isset($nom) && isset($adreca)){
        consultarUsuari($dni, $nom, $adreca);
    }else{
        echo "Posa tots els camps per buscar un usuari, o deixa'ls buits per consultar tots els usuaris";
    }

}
//Consultar tots els usuaris
function consultar(){
    try{
        $connexio = connexio();
        $statement = $connexio->prepare('SELECT * FROM usuaris');
        
        $statement->execute();

        $resultats = $statement->fetchAll();
        $resultats2 = "";
        //Com els printo a una taula faig tr i td
        foreach ($resultats as $usuari){
            $resultats2.="<tr><td>".$usuari[0]."</td><td>".$usuari[1]."</td><td>".$usuari[2]."</td></tr>";
        }

        echo $resultats2;
        $connexio = null;
    }catch(PDOException $e){
        echo "Error: no s'ha pogut consultar els usuaris!!";
        die();
    }
}


//Consultar un usuari
function consultarUsuari($dni, $nom, $adreca){
    try{
        $connexio = connexio();

        //Comrpovo que l'usuari buscat existeixi
        $comprovar = $connexio->prepare('SELECT * FROM usuaris WHERE dni = :dni');
        

        $comprovar->execute(array(
                ':dni' => $dni
        ));

        $resultats = $comprovar->fetch();

        if(!$resultats){
                echo "Aquest usuari no existeix";
                die();
        }else
    
        //Si l'usuari existeix el busco principalment per el dni, (ignoro el $nom i $adreca) ja que solament amb el dni es pot saber que usuari es
        $statement = $connexio->prepare('SELECT * FROM usuaris WHERE dni = :dni or adreca = :adreca or nom = :nom');
        
        $statement->execute(array(
            ':dni' => $dni,
            ':nom' => $nom,
            ':adreca' => $adreca
        ));
    
        $resultats = $statement->fetchAll();
        $resultats2 = "";
        //els printo a una taula
        foreach ($resultats as $usuari){
            $resultats2.="<tr><td>".$usuari[0]."</td><td>".$usuari[1]."</td><td>".$usuari[2]."</td></tr>";
        }
        //crido a la taula per printarla i despres printo els resultats
        echo taula();
        echo $resultats2;

        //tanco la conexio
        $connexio = null;
    }catch(PDOException $e){
        echo "Error: no s'ha pogut consultar l'usuari!!";
        die();
    }
}


//Consultar un usuari insertat o modificat
function consultarUsuariIM($dni, $nom, $adreca){
    try{
        $connexio = connexio();
    
        //comprovo que l'usuari existeixi
        $statement = $connexio->prepare('SELECT * FROM usuaris WHERE dni = :dni and adreca = :adreca and nom = :nom');
        
        $statement->execute(array(
            ':dni' => $dni,
            ':nom' => $nom,
            ':adreca' => $adreca
        ));
    
        $resultats = $statement->fetchAll();
        $resultats2 = "";
        //printo els resultats a una taula
        foreach ($resultats as $usuari){
            $resultats2.="<tr><td>".$usuari[0]."</td><td>".$usuari[1]."</td><td>".$usuari[2]."</td></tr>";
        }
        //crido a la taula per printarla i despres printo els resultats
        echo taula();
        echo $resultats2;
        
        //tanco la conexio
        $connexio = null;
    }catch(PDOException $e){
        echo "Error: no s'ha pogut consultar l'usuari!!";
        die();
    }
}

?>