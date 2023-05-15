<?php
if (isset($_FILES["proteinas"]) && $_POST["next"] == '2') {
    $prot_extenType = array('pdbqt');
    $prot_fileExtension = strtolower(pathinfo($_FILES["proteinas"]["name"], PATHINFO_EXTENSION));
    $_SESSION["nombre_fichero_proteina"] = $_FILES["proteinas"]["name"];
    if (in_array($prot_fileExtension, $prot_extenType)) {
        $_SESSION["rutaproteinas"] = "./files/" . $_FILES["proteinas"]["name"];

        if (move_uploaded_file($_FILES["proteinas"]["tmp_name"], "./files/" . $_FILES["proteinas"]["name"])) {
            $_SESSION["estat"] = '2';
        } else {
            echo "Algo ha fallado al subir el archivo.";
        }
    } else {
        echo "La extensión del archivo no es válida. Se permiten solo archivos con las extensiones: mol2, smi, tar.gz.";
    }
}
