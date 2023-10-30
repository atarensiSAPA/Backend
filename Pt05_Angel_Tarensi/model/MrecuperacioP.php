<?php
require_once("model/connectaBD.php");
require_once("controlador/CrecuperacioP.php");

function comprovaEmail($email) {
    $conn = connexio();
    $sql = $conn->prepare("SELECT * FROM usuaris WHERE email = ?");
    $sql->execute(array(
        $email,
    ));
    $resultat = $sql->fetch();
    if($resultat == false){
        return false;
    }else{
        return true;
    }
}

//funció per obtenir el token
function obtenirToken($id){
$conn = connexio();
$sql = $conn->prepare("SELECT * FROM usuaris WHERE id = ?");
$sql->execute(array(
    $id,
));
$resultat = $sql->fetch();
$resta = strtotime(date("Y-m-d H:i:s")) - strtotime($resultat['token_time']);
if($resta > 14400){
    ?> <script>alert("El token ha caducat");</script> <?php
    eliminarToken($id);
    return false;
}else{
    return $resultat['token'];
}

}

function eliminarToken($id){
    $conn = connexio();
    $sql = $conn->prepare("UPDATE usuaris SET token = NULL, token_time = NULL WHERE id = ?");
    $sql->execute(array(
        $id,
    ));
}
?>