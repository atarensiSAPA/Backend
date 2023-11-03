<?php
require_once("connexio.php");
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

function idUsuariR($email){
    $connexio = connexio();
    $sql = $connexio->prepare("SELECT id FROM usuaris WHERE email = ?");
    $sql->execute(array(
        $email
    ));
    $id = $sql->fetch();
    return $id['id'];
}

function crearToken($id){
    $conn = connexio();
    $token = md5(uniqid(rand(), true));
    $sql = $conn->prepare("UPDATE usuaris SET token = ?, token_time = ? WHERE id = ?");
    $sql->execute(array(
        $token,
        date("Y-m-d H:i:s"),
        $id,
    ));
}

//funció per obtenir el token
function obtenirToken($id){ 
$conn = connexio();
$sql = $conn->prepare("SELECT * FROM usuaris WHERE id = ?");
$sql->execute(array(
    $id,
));
$resultat = $sql->fetch();
$tokenTime = $resultat['token_time'];
$resta = strtotime(date("Y-m-d H:i:s")) - strtotime($tokenTime);
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