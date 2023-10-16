<!--Signatura del propietari: Angel Tarensi-->

<!--Trucar al controlador.php-->
<?php
    require_once 'controlador/controlador.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Practica_02_Angel_Tarensi</title>
        <!--Boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--CSS-->
        <link rel="stylesheet" href="estils/estils.css" type="text/css">

        <!--Responsius per els movils-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
            //Alerta per esborrar un usuari
            function esborrarAlert()
            {
            alert("Estas segur que vols eliminar aquest usuari?\nSi no vols eliminar-lo, presiona 'esc' i selecciona una altra opció.");
            }
        </script>
    </head>
    <body>
        <div class="container">
            <h3>Angel Tarensi</h3>
            <h1>Practica 2</h1><br>
        </div>
        <div class="container">
            <form method="post">
                <div>
                    <!--Camps per introduïr informació-->
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" name="dni" class="form-control" id="dni" placeholder="DNI:" value="<?php echo DNI();?>"/>
                    </div>
                    <div class="form-group">
                        <label for="nom">NOM</label>
                        <input type="text" name="nom" class="form-control" id="nom" placeholder="nom:"/>
                    </div>
                    <div class="form-group">
                        <label for="adreca">Adreça</label>
                        <input type="text" name="adreca" class="form-control" id="adreca" placeholder="Adreça:"/>
                    </div>
                    <div class="form-group">
                        <p><b>Què vols fer?</b></p>
                        <input type="radio" name="BD" value="inserir" id="inserir"> Inserir usuaris<br>
                        <input type="radio" name="BD" value="modificar" id="modificar"> Modificar usuaris<br>
                        <input type="radio" name="BD" value="esborrar" id="esborrar"> Eliminar usuaris<br>
                        <input type="radio" name="BD" value="consultar" id="consultar"> Consultar usuaris<br><i><u>per consultar tots el usuaris deixa els camps buits<br>per consultar un usuari introdueix el dni<br></u></i>

                    </div>
                </div>
                <button type="submit" onclick="consultarOperacio()"><b>Enviar</b></button><br>
                <div>
                    <?php
                        //comprovar que los campos tengas valor
                        valorsDades();
                    ?>
                </div>
                <?php
                    //si es selecciona una operació, es crida al controlador.php
                    inserirModificarI();
                    consultarI();
                ?>
                </table>
            </form> 
        </div>
    </body>
</html>