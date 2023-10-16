<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/connexio.php';
require_once 'model/consultar.php';

function modificar(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            //mirar si la conexio a la BD es correcta
            $connexio = connexio();
            echo "<b>Connexio correcta a la BD!!</b>" . "<br />". "<br />";
            //agafar dni, nom y adreca (ja estan comprovats ja que es fa al controlador)
            $dni = htmlspecialchars($_POST['dni']);
            $nom = htmlspecialchars($_POST['nom']);
            $adreca = htmlspecialchars($_POST['adreca']);
            
            //Faig un select per comprovar que el usuari que vols modificar existeix
            $comprovar = $connexio->prepare('SELECT * FROM usuaris WHERE dni = :dni');
                        

            $comprovar->execute(array(
                    ':dni' => $dni
            ));

            $resultats = $comprovar->fetch();

            if($resultats == false){
                    echo "Aquest usuari no existeix";
                    die();
            }else
        
            //Despres de comprovar que no existeix el modifico
            $statement = $connexio->prepare('UPDATE usuaris SET adreca = :adreca, nom = :nom WHERE dni = :dni');
            
            $statement->execute(array(
                    ':dni' => $dni,
                    ':nom' => $nom,
                    ':adreca' => $adreca
            ));

            //mostro per pantalla que s'ha modificat correctament i despres mostro el usuari que s'ha inserit
            echo "S'ha modificat l'usuari correctament<br />";
            consultarUsuariIM($dni, $nom, $adreca);
            //tanco la conexio
            $connexio = null;
        }catch(PDOException $e){
            echo "Error: no s'ha pogut modificar l'usuari!!";
            die();
        }
    }

}

?>