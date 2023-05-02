<?php

    function comprobador($id, $descriptor)
    {
        if (!empty($id) && !empty($descriptor)) {
            $_SESSION["estat"] = '1';
            $_SESSION["id"] = $id;
            $_SESSION["description"] = $descriptor;
        }
    }

    session_start();

    if(!isset($_SESSION["estat"])) {
        $_SESSION["estat"] = "0";
    } else {
        if(isset($_POST["next"])){
            if (isset($_POST["identifier"]) && isset($_POST["description"]) && $_POST["next"] == '1') {
                comprobador($_POST["identifier"], $_POST["description"]);
            } else if (isset($_FILES["farmacs"]["name"]) && $_SESSION["estat"] == '2') {
                move_uploaded_file($_FILES["farmacs"]["tmp_name"], "./files/".$_FILES["farmacs"]["name"]);
                $_SESSION["rutaFarmacs"] = "./files/". $_FILES["farmacs"]["name"];
            } else if (isset($_FILES["proteinas"]["name"]) && $_SESSION["estat"] == '3') {
                move_uploaded_file($_FILES["proteinas"]["tmp_name"], "./files/".$_FILES["proteinas"]["name"]);
                $_SESSION["rutaProteinas"] = "./files/". $_FILES["proteinas"]["name"];
            }
        } else {
            $_SESSION["estat"] = $_POST["back"];
        }
    }



    if 

    // Cargar vista

    // if($_SESSION["estat"] == '0') {
    //     include_once("vistaDades.php");
    // }

    // if ($_SESSION["estat"] == '1') {
    //     include_once("vistaFarmacs.php");
    // }

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
    }
?>