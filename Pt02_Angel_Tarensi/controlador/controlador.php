<?php
//Angel Tarensi
//Validació de dades
function validarDades(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $banderaDNI = true;
        $banderaNOM = true;
        $banderaADRECA = true;
        //Si es consulta posar que pugui estar buit el dni, nom i adreça
        if(isset($_POST["BD"])){
            if($_POST["BD"] == "consultar" && empty($_POST["dni"]) && empty($_POST["nom"]) && empty($_POST["adreca"])){
                return true;
            }
        }
        //Si es esborrar que solament necesiti el dni
        if(isset($_POST["BD"])){
            if($_POST["BD"] == "esborrar" && !empty($_POST["dni"]) && empty($_POST["nom"]) && empty($_POST["adreca"])){
                return true;
            }
        }
        //si es modificar o inserir comprovar que el nom i l'adreça tinguin més de 1 caràcter
        if(isset($_POST["BD"])){
            if($_POST["BD"] == "inserir" || $_POST["BD"] == "modificar"){
                    //Comprovar que el nom i l'adreça tinguin més de 1 caràcter
                if(isset($_POST["nom"])){
                    $nom = htmlspecialchars($_POST["nom"]);
                    if(strlen($nom) < 1){
                        echo "El nom ha de tenir més de 1 caràcters<br>";
                        $banderaNOM = false;
                    }
                }else if(isset($_POST["adreca"])){
                    $adreca = htmlspecialchars($_POST["adreca"]);
                    if(strlen($adreca) < 1){
                        echo "L'adreça ha de tenir més de 1 caràcters<br>";
                        $banderaADRECA = false;
                    }
                }
            }
        }
        //Comprovar que el dni sigui correcte
        if(isset($_POST["dni"])){
            $dni = htmlspecialchars($_POST["dni"]);
            if(strlen($dni) != 9){
                echo "El dni ha de tenir 9 caràcters <br>";
                $banderaDNI = false;
            }
            $lletra = substr($dni, -1);
            $numeros = substr($dni, 0, -1);
            if(is_numeric($numeros)){
                $lletraCalculada = substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1);
                if($lletraCalculada != $lletra){
                    echo "El dni no és correcte<br>";
                    $banderaDNI = false;
                }
            }else{
                echo "El dni no és correcte<br>";
                $banderaDNI = false;
            }
        }
        //si el dni, nom i adreça son correctes retornar true
        if($banderaDNI && $banderaNOM && $banderaADRECA){
            return true;
        }
    }
    return false;
}
//Comprovar que els camps tinguin valors per que sorti un missatge d'error i també que s'hagi seleccionat una operació
function consultarOperacio(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(validarDades()){
            if(isset($_POST["BD"])){
                switch ($_POST["BD"]){
                    case 'inserir':
                        require_once 'model/inserir.php';
                        inserir();
                        break;
                    case 'modificar':
                        require_once 'model/modificar.php';
                        modificar();
                        break;
                    case 'esborrar':
                        require_once 'model/esborrar.php';
                        esborrar();
                        break;
                    case 'consultar':
                        require_once 'model/consultar.php';
                        triaConsulta();
                        break;
                    default:
                        echo "No s'ha seleccionat cap operació";
                        break;
                }
            }
        }
    }
}
//Mostrar a una altre pagina tots els usuaris
function mostrarPantalla(){
    header("Location: mostrar.php");
    die();
}
//si es selecciona una operació, es crida al controlador.php
function inserirModificarI(){
    if(isset($_POST["dni"])){
        if(isset($_POST["BD"]) && $_POST["BD"] == "inserir" || isset($_POST["BD"]) && $_POST["BD"] == "modificar" || isset($_POST["BD"]) && $_POST["BD"] == "esborrar"){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                
                echo consultarOperacio();
            }}};
}
//si es selecciona una operació, es crida al controlador.php
function consultarI(){
    if (isset($_POST["BD"]) && $_POST["BD"] == "consultar"){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            echo consultarOperacio();
        }
    }
}
//Comprovar que els camps tinguin valors per que sorti un missatge d'error i també que s'hagi seleccionat una operació
function valorsDades(){
    if(empty($_POST["BD"])){
        echo "No has seleccionat cap operació<br>";
    }
    if(empty($_POST["dni"])){
        echo "El dni no pot estar buit si vols inserir, modificar o esborrar<br>";
    }
}
//Retornar el dni si te valor, despres es comprova que sigui correcte a validarDades()
function DNI(){
    if(isset($_POST["dni"])){
        $dni = htmlspecialchars($_POST["dni"]);
        return $dni;
    }
}
?>