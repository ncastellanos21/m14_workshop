<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <title>Vista Farmacs</title>
</head>

<body>
  <div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Fármacos</h1>
    <p>Introduce el fichero del fármaco</p>
  </div><br><br>
  <div class="progress">
    <div class="progress-bar" style="width: 20%"></div>
  </div><br>
  <form action="workflow.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="farmacos" class="form-label">Farmaco (mol2, smi o tar.gz):</label>
      <input type="file" class="form-control" id="farmacos" placeholder="Enter password" name="farmacos">
    </div>
    <button type="submit" name="back" value="0" class="btn btn-primary">Back</button>
    <button type="submit" name="next" value="2" class="btn btn-primary">Next</button>
  </form>
</body>

</html>