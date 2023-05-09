<?php

session_start();

function comprobador_dades($id, $descriptor)
{
    if (!empty($id) && !empty($descriptor)) {
        $_SESSION["estat"] = '1';
        $_SESSION["id"] = $id;
        $_SESSION["description"] = $descriptor;
    }
}


if (!isset($_SESSION["estat"])) {
    $_SESSION["estat"] = "0";
} else {
    if (isset($_POST["next"])) {
        if (isset($_POST["identifier"]) && isset($_POST["description"]) && $_POST["next"] == '1') {
            comprobador_dades($_POST["identifier"], $_POST["description"]);
        }

        if (isset($_FILES["farmacos"]) && $_POST["next"]== '2') {
            $_SESSION["rutaFarmacs"] = "./files/" . $_FILES["farmacos"]["name"];
            if ( move_uploaded_file($_FILES["farmacos"]["tmp_name"], "./files/" . $_FILES["farmacos"]["name"])) {
                $_SESSION["estat"] = '2';
            } else {
                echo "Algo ha fallado al subir el archivo.";
            }
        }

        if (isset($_FILES["proteinas"]) && $_POST["next"] == '3') {
            $_SESSION["rutaProteinas"] = "./files/" . $_FILES["proteinas"]["name"];
            if (move_uploaded_file($_FILES["proteinas"]["tmp_name"], "./files/" . $_FILES["proteinas"]["name"])) {
                $_SESSION["estat"] = '3';
            } else {
                echo "Algo ha fallado al subir el archivo.";
            }

        }
        
        if (isset($_POST["centerX"]) && isset($_POST["centerY"]) && isset($_POST["centerZ"]) && isset($_POST["sizeX"]) && isset($_POST["sizeY"]) && isset($_POST["sizeZ"]) && isset($_POST["energia"]) && isset($_POST["exhaustividad"]) && isset($_POST["modos"]) && $_POST["next"] == '4') {
            if (!empty($_POST["centerX"]) && !empty($_POST["centerY"]) && !empty($_POST["centerZ"]) && !empty($_POST["sizeX"]) && !empty($_POST["sizeY"]) && !empty($_POST["sizeZ"]) && !empty($_POST["energia"]) && !empty($_POST["exhaustividad"]) && !empty($_POST["modos"])) {
                $_SESSION["estat"] = '4';
                $_SESSION["centerX"] =  $_POST["centerX"];
                $_SESSION["centerY"] = $_POST["centerY"];
                $_SESSION["centerZ"] = $_POST["centerZ"];
                $_SESSION["sizeX"] =  $_POST["sizeX"];
                $_SESSION["sizeY"] = $_POST["sizeY"];
                $_SESSION["sizeZ"] = $_POST["sizeZ"];
                $_SESSION["energia"] =  $_POST["energia"];
                $_SESSION["exhaustividad"] = $_POST["exhaustividad"];
                $_SESSION["modos"] = $_POST["modos"];
            }
        }

    } else {
        $_SESSION["estat"] = $_POST["back"];
    }
}


switch ($_SESSION["estat"]) {
    case '0':
        include_once("vistaDades.php");
        break;
    case '1':
        include_once("vistaFarmacs.php");
        break;
    case '2':
        include_once("vistaProteinas.php");
        break;
    case '3':
        include_once("vistaParametres.php");
        break;
    case '4':
        include_once("vistaCrearCarpetas.php");
        break;
    case '5':
        include_once("destroy.php");
}
?>