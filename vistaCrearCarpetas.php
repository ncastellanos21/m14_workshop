<?php
$identifier = "text_" . date("Y-m-d-H:i:s");
$description = "Descripcion del experimento " . $identifier;
if(isset($_SESSION['identifier']) && $_SESSION['identifier ']!="" )$identifier = $_SESSION['identifier'];
if(isset($_SESSION['description']) && $_SESSION['description']!="" )$description = $_SESSION['description'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Crear Carpeta</title>
    </title>
</head>
<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Información inicial</h1>
        <p>Vamos a preparar un Docking</p>
    </div>
<?php
echo "<h1>Aquí la creación de la carpeta</h1>";
$nombre = "simulacions\docking". hash('sha256', $identifier);

echo $nombre;
if(!mkdir($nombre)){
    die("Error al crear la carpeta");
} else {
    echo ("carpeta ". $nombre . " creada");
    mkdir($nombre."/farmacos");
    mkdir($nombre."/proteinas");
    copy($_SESSION["rutaFarmacs"], $nombre."//farmacos/". hash('sha256', $identifier));
    copy($_SESSION["rutaProteinas"], $nombre."//proteinas/". hash('sha256', $identifier));
}
?>
    <div class="progress">
        <div class="progress-bar"></div>
    </div>

    <form action="workflow.php" method="post">
            <button type="submit" name="next" class="btn btn-primary">Done</button>
    </form>

</body>
</html>