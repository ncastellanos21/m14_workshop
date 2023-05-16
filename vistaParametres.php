<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vista Parametros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>

<body>

    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>My First Bootstrap Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div><br><br>

    <div class="progress">
        <div class="progress-bar" style="width: 80%"></div>
    </div>

    <div class="container pt-5">

        <form action="workflow.php" method="post">

            <h3>Centro</h3>

            <div class="row">
                <div class="col-sm-4">
                    <label for="centerX" class="form-label">Introduzca centro X:</label>
                    <input type="number" class="form-control" id="centerX" placeholder="Introduzca posición X" name="centerX" step=".1" value="30">
                </div>
                <div class="col-sm-4">
                    <label for="centerY" class="form-label">Introduzca centro Y:</label>
                    <input type="number" class="form-control" id="centerY" placeholder="Introduzca posición Y" name="centerY" step=".1" value="10">
                </div>
                <div class="col-sm-4">
                    <label for="centerZ" class="form-label">Introduzca centro Z:</label>
                    <input type="number" class="form-control" id="centerZ" placeholder="Introduzca posición Z" name="centerZ" step=".1" value="10">
                </div>
            </div>
            <br>

            <h3>Tamaño</h3>
            <div class="row">
                <div class="col-sm-4">
                    <label for="sizeX" class="form-label">Introduzca tamaño X:</label>
                    <input type="number" class="form-control" id="sizeX" placeholder="Introduzca posición X" name="sizeX" step=".1" value="20" min="0.5">
                </div>
                <div class="col-sm-4">
                    <label for="sizeY" class="form-label">Introduzca tamaño Y:</label>
                    <input type="number" class="form-control" id="sizeY" placeholder="Introduzca posición Y" name="sizeY" step=".1" value="20" min="0.5">
                </div>
                <div class="col-sm-4">
                    <label for="sizeZ" class="form-label">Introduzca tamaño Z:</label>
                    <input type="number" class="form-control" id="sizeZ" placeholder="Introduzca posición Z" name="sizeZ" step=".1" value="20" min="0.5">
                </div>
            </div><br>

            <h3>Parámetros adicionales</h3>
            <div class="row">
                <div class="col-sm-4">
                    <label for="energia" class="form-label">Rango de energía:</label>
                    <input type="number" class="form-control" id="energia" placeholder="Introduzca energía" name="energia" step=".01" value="3">
                </div>
                <div class="col-sm-4">
                    <label for="exhaustividad" class="form-label">Introduzca exhaustividad:</label>
                    <input type="number" class="form-control" id="exhaustividad" placeholder="Introduzca exhaustividad" name="exhaustividad" value="8" min="1">
                </div>
                <div class="col-sm-4">
                    <label for="modosmodos" class="form-label">Introduzca número de modos:</label>
                    <input type="number" class="form-control" id="modos" placeholder="Introduzca exhaustividad" name="modos" value="9" min="1">
                </div>
            </div>

            <br>
            <button type="submit" name="back" value="2" class="btn btn-primary">Back</button>
            <button type="submit" name="next" value="4" class="btn btn-primary">Done</button>
        </form>

    </div>

</body>

</html>