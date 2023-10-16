<?php
    //Angel Tarensi
    //trucar a les funcions següents
    require_once 'model/consultar.php';
    require_once 'taula.php';
?>
<!Doctype html>
<html>
    <head>
        <title>Usuaris</title>
        <!--Boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--CSS-->
        <link rel="stylesheet" href="estils/estils.css" type="text/css">

        <!--Responsius per els movils-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div>
                <?php
                    //mostra taula
                    taula();
                    //consulta amb tots els usuaris
                    echo consultar();
                ?>
            </table>
        </div>
        <!--Boto per tornar a la pagina inicial-->
        <button onclick="window.location.href='../Pt02_Angel_Tarensi'" class="centrarBoton">Tornar</button>
    </body>
</html>