<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/connexio.php';
require_once 'model/consultar.php';

function esborrar(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            //mirar si la conexio a la BD es correcta
            $connexio = connexio();
            echo "<b>Connexio correcta a la BD!!</b>" . "<br />". "<br />";
            //agafar dni (ja estan comprovats ja que es fa al controlador)
            $dni = htmlspecialchars($_POST['dni']);

            //Faig un select per comprovar que el usuari que vols esborrar existeix
            $comprovar = $connexio->prepare('SELECT * FROM usuaris WHERE dni = :dni');
                        

            $comprovar->execute(array(
                    ':dni' => $dni
            ));

            $resultats = $comprovar->fetch();

            if($resultats == false){
                    echo "Aquest usuari no existeix";
                    die();
            }else
            //Agafo de la BD el nom y adreca mirant el dni
            $nom = $resultats[1];
            $adreca = $resultats[2];
            //mostro l'script pero si el vol eliminar o no
            echo "<script>esborrarAlert()</script>";
            //mosotro que s'ha esborrat correctament
            echo "S'ha esborrat l'usuari correctament<br />";
            //mostro el usuari que s'ha esborrat
            consultarUsuariIM($dni, $nom, $adreca);

            //Ara faig el DELETE per esborrar l'usuari, ja que si ho faig adalt no puc agafar els valors $dni $nom i $adreca
            $statement = $connexio->prepare('DELETE FROM usuaris WHERE dni = :dni');
            //cojer nom y adreca de la BD
            $statement->execute(array(
                    ':dni' => $dni
                    
            ));
            //tanco connexio
            $connexio = null;
        }catch(PDOException $e){
            echo "Error: no s'ha pogut esborrar l'usuari!!";
            die();
        }
    }
}

?>