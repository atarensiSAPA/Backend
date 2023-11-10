<?php
//Angel Tarensi
//trucar a les funcions següents
require_once 'controlador/controladorAdmin.php';
require_once 'model.php';
require_once 'connexio.php';

function idUsuari(){
    $connexio = connexio();
    $sql = $connexio->prepare("SELECT id FROM usuaris WHERE email = ?");
    $sql->execute(array(
        $_SESSION['email'],
    ));
    $id = $sql->fetch();
    return $id['id'];
}

function mostrarArticlesUsuari(){
    try{
        $connexio = connexio();
        $final = numPostPagina();
        $inici = numPost();
        $id = idUsuari();
        $sql = "";
        $comprovar = $connexio->prepare('SELECT * FROM articles WHERE id_usuari = ?');
                    
        $comprovar->execute(array(
            $id,
        ));
        $resultats = $comprovar->fetch();

        // Comprovem que hagui articles, en cas contrari, rediriguim
        if(!$resultats){
                ?> <li>No hi ha articles per mostrar</li> <?php
                return;
        }else
        
        $sql = $connexio->prepare("SELECT * FROM articles WHERE id_usuari = ? LIMIT $inici, $final");

        // Executem la consulta
        $sql->execute(array(
            $id,
        ));

        $resultats = $sql->fetchAll();
        //Els printo a una llistat
        foreach ($resultats as $article){ ?>
            <li><?php echo $article['id'] . '.-    ' ?> <input type="text" name="article" id="article" value="<?php echo $article['article'] ?>">
                    <button type="submit" name="afegir" id="afegir">
                        <img src="imatges/afegir.png" alt="afegir" width="35px" height="35px" onclick="<?php afegirArticleUser(); ?>">
                    </button>
                    <button type="submit" name="eliminar" id="eliminar">
                        <img src="imatges/eliminar.jpg" alt="editar" width="43px" height="43px" onclick="<?php eliminarArticleUser() ?>">
                    </button>
            </li>
        <?php }
    }catch(PDOException $e){
        echo $e;
        echo "\no Error: No s'ha pogut connectar amb la base de dades!!" . "<br />";
        die();
    }
}
    // Calculem el total d'articles per a poder conèixer el número de pàgines de la paginació
    function totalArticlesUsuari(){
        try{
            $connexio = connexio();
            $statement = $connexio->prepare('SELECT * FROM articles WHERE id_usuari = ?');
            $id = idUsuari();
            $statement->execute(array(
                $id,
            ));
            $resultats = $statement->fetchAll();
            $total = count($resultats);
            return $total;
        }catch(PDOException $e){
            echo $e;
            echo "\n o Error: No s'ha pogut connectar amb la base de dades!!" . "<br />";
            die();
        }
    }
    //Afegir articles de l'usuari
    function afegirArticleUser(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
                $connexio = connexio();
                $id = idUsuari();
                $article = $_POST['articleUser']?? "";
                $sql = $connexio->prepare("INSERT INTO articles (article, id_usuari) VALUES (?, ?)");
                $sql->execute(array(
                    $article,
                    $id,
                ));
                header('Location: index.admin.php');
            }catch(PDOException $e){
                echo $e;
                echo "\no Error: No s'ha pogut connectar amb la base de dades!!" . "<br />";
                die();
            }
        }
    }
    //Eliminar articles de l'usuari
    function eliminarArticleUser(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
                $connexio = connexio();
                $id_user = idUsuari();
                /*
                $statement = $connexio->prepare('SELECT article FROM articles WHERE id_usuari = ?');
                $statement->execute(array(
                    $id,
                ));
                $statement->fetch();
                if($statement == ""){
                    echo "No hi ha articles per eliminar";
                    die();
                }else
                */
                $article = $_POST['article']?? "";
                $id_article = $connexio->prepare('SELECT id FROM articles WHERE article = ?');
                $id_article->execute(array(
                    $article,
                ));
                $id_article = $id_article->fetch();

                $sql = $connexio->prepare("DELETE FROM articles WHERE id = ? AND id_usuari = ?");
                $sql->execute(array(
                    $id_article['id'],
                    $id_user,
                ));
                header('Location: index.admin.php');
            }catch(PDOException $e){
                echo $e;
                echo "\no Error: No s'ha pogut connectar amb la base de dades!!" . "<br />";
                die();
            }
        }
    }
?>