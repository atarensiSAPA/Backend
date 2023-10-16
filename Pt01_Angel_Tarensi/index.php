<!--Signatura del propietari: Angel Tarensi-->

<!--Trucar al controlador.php-->
<?php require_once("controlador.php");?>
<!DOCTYPE html>
<html>
    <head>
        <title>Practica_1_Angel_Tarensi</title>
        <!--Boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--CSS-->
        <link rel="stylesheet" href="estils.css" type="text/css">

        <!--Responsius per els movils-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <h3>Angel Tarensi</h3>
            <h1>Practica 1</h1><br>
        </div>
        <div class="container">
            <form method="post">
                <div>
                    <!--Camps per introduïr informació-->
                    <div class="form-group">
                        <label for="nom">NOM</label>
                        <input type="text" name="nom" class="form-control" id="nom" placeholder="nom:" value="<?php echo nom()?>"/>
                    </div>
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="email:" value="<?php echo email()?>"/>
                    </div>
                    <div class="form-group">
                        <label for="text">TEXT</label><br>
                        <textarea name="text" id="text" class="form-control" placeholder="Text:" static><?php echo text()?></textarea>
                    </div>
                </div>
                <div>
                    <!--Text en vermell en cas de que estigui malament-->
                    <p class="vermell"><?php echo errorNom()?></p>
                    <p class="vermell"><?php echo errorEmail()?></p>
                    <p class="vermell"><?php echo errorText()?></p>
                </div>
                <div>
                <!--Comprovar que el formulari s'hagui enviat correctament-->
                <h2><?php echo serverPost() ?></h2>
                </div>
                <br>
                <button type="submit"><b>Enviar</b></button>
                <button type="reset" class="boto"><b>Reset</b></button>
            </form> 
        </div>
    </body>
</html>