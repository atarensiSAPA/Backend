<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/connexio.php';
require_once 'controlador/controlador.php';
    // Preparem la consulta SQL
    function consultaArticles(){
        try{
            $connexio = connexio();
            $final = numPostPagina();
            $inici = numPost();
            $comprovar = $connexio->prepare('SELECT * FROM articles');
                        

            $comprovar->execute();
            
            $resultats = $comprovar->fetch();

            // Comprovem que hagui articles, en cas contrari, rediriguim
            if(!$resultats){
                    header('Location: index.php');
            }else
            
            $statement = $connexio->prepare("SELECT * FROM articles LIMIT $inici, $final");

            // Executem la consulta
            $statement->execute();

            $resultats = $statement->fetchAll();
            //Els printo a una llistat
            foreach ($resultats as $article){ ?>
                <li><?php echo $article['id'] . '.-    ' . $article['article']?></li>
            <?php }
        }catch(PDOException $e){
            echo $e;
            echo "\no Error: No s'ha pogut connectar amb la base de dades!!" . "<br />";
            die();
        }

    }

    // Calculem el total d'articles per a poder conèixer el número de pàgines de la paginació
    function totalArticles(){
        try{
            $connexio = connexio();
            $statement = $connexio->prepare('SELECT * FROM articles');
            $statement->execute();
            $resultats = $statement->fetchAll();
            $total = count($resultats);
            return $total;
        }catch(PDOException $e){
            echo $e;
            echo "\n o Error: No s'ha pogut connectar amb la base de dades!!" . "<br />";
            die();
        }
    }

?>