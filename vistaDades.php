<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Vista Dades</title>
    </title>
</head>
<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Información inicial</h1>
        <p>Vamos a preparar un Docking</p>
    </div>

    <div class="progress">
        <div class="progress-bar"></div>
    </div>

    <form action="workflow.php" method="post">
        <div class="mb-3 mt-3">
            <label for="identifier" class="form-label">Nombre identificador: </label>
            <input type="text" class="form-control" id="identifier" placeholder="Introduzco el id" name="identidier">
        </div>
        <div class="mb-3 mt-3">
            <label for="description" class="form-label">Descripción: </label>
            <textarea type="text" class="form-control" id="description" cols="30" rows="10" name="description"></textarea>
        </div>
        <button type="submit" name="next" value="1" class="btn btn-primary">Next</button>
    </form>

</body>
</html>