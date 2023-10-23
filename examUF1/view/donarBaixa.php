<?php
// Ex6 i Ex2
require_once '../model/pdo-users.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Donar-se de baixa</title>
    </head>
    <html>
        <h1>Donar-se de baixa</h1>
        <form method="post">
            <input type="text" placeholder="Nickname" id="nickname" name="nickname">
            <button type="submit" value="enviar">Enviar</button>
            <button type="button" onclick="window.location.href='../controller/index.php'">Torna</button>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    donarBaixa();
                }
            ?>
        </form>


    </html>
</html>