<?php 
//Angel Tarensi
//trucar a les funcions següents
require_once 'model/connexio.php';


try{
    // Ens connectem a la base de dades
    $connexio = connexio();
    // Establim el numero de pagina en la que l'usuari es troba.
    # si no troba cap valor, assignem la pagina 1.
    function paginaActual(){
        if(isset($_GET['pagina'])){
            $pagina = (int)$_GET['pagina'];
        }else{
            $pagina = 1;
        }
        return $pagina;
    }


    // definim quants post per pagina volem carregar.
    function numPostPagina(){
        if(isset($_GET["nArticles"])){
            $numpag = (int)$_GET["nArticles"];
        }else {
            $numpag = 5;
        }
        return $numpag;
    }


    // Revisem des de quin article anem a carregar, depenent de la pagina on es trobi l'usuari.
    # Comprovem si la pagina en la que es troba es més gran d'1, sino carreguem des de l'article 0.
    # Si la pagina es més gran que 1, farem un càlcul per saber des de quin post carreguem

    function numPost(){
        $numpag = numPostPagina();
        $pagina = paginaActual();
        if($pagina > 1){
            return ($pagina * $numpag) - $numpag;
        }else{
            return 0;
        }
    }

    // Calculem el numero de pagines que tindrà la paginació. Llavors hem de dividir el total d'articles entre els POSTS per pagina
    function numPagines(){
        $total = totalArticles();
        $numpag = numPostPagina();
        $pagines = ceil($total/$numpag);
        return $pagines;
    }

    // Mostrar els botons de la paginació
    function mostrarPagines(){
        $pagines = numPagines();
        $pagina = paginaActual();
        $numpag = numPostPagina();
        echo '<section class="paginacio"><ul>';

        // Botó per anar a la pagina anterior
        if ($pagina == 1) {
            echo '<li class="disabled"></li>';
            echo '<li class="disabled"></li>';
        } else {
            echo '<li><a href="?pagina=1&nArticles=' . ($numpag) .'">&laquo;</a></li>';
            echo '<li><a href="?pagina=' . ($pagina - 1) . '&nArticles=' . ($numpag) . '">&lt;</a></li>';
        }

        // Botons de paginació
        for ($i = 1; $i <= $pagines; $i++) {
            if ($pagina == $i) {
                echo "<li class='active'><a href='?pagina=$i&nArticles=" . ($numpag) ."'>$i</a></li>";
            } else {
                echo "<li><a href='?pagina=$i&nArticles=" . ($numpag) ."'>$i</a></li>";
            }
        }

        // Botó per anar a la següent pagina
        if ($pagina == $pagines) {
            echo '<li class="disabled"></li>';
            echo '<li class="disabled"></li>';
        } else {
            echo '<li><a href="?pagina=' . ($pagina + 1) . '&nArticles=' . ($numpag) . '">&gt;</a></li>';
            echo '<li><a href="?pagina=' . ($pagines) . '&nArticles=' . ($numpag) . '">&raquo;</a></li>';
        }
        echo '</ul></section>';
    }

}catch(PDOException $e){
    echo $e;
    echo "\n o Error: No s'ha pogut connectar amb la base de dades!!" . "<br />";
    die();
}

?>