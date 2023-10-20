<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'controlador/controladorAdmin.php';

function mostrarArticlesUsuari(){
    try{
        $connexio = connexio();
        $final = numPostPagina();
        $inici = numPost();
        $comprovar = $connexio->prepare('SELECT * FROM articles WHERE id_usuari = ?');
                    

        $comprovar->execute(array(
            $_SESSION['id'],
        ));
        
        $resultats = $comprovar->fetch();

        // Comprovem que hagui articles, en cas contrari, rediriguim
        if(!$resultats){
                header('Location: index.php');
        }else
        
        $statement = $connexio->prepare("SELECT * FROM articles WHERE id_usuari = ? LIMIT $inici, $final");

        // Executem la consulta
        $statement->execute(array(
            $_SESSION['id'],
        ));

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
?>