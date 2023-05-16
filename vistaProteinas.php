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
    <h1>Proteina</h1>
    <p>Añade la proteina</p>
  </div><br><br>
  <div class="progress">
    <div class="progress-bar" style="width: 40%"></div>
  </div><br>

  <form action="workflow.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="proteinas" class="form-label">Proteinas (pdb o pdbqt): </label>
      <input type="file" class="form-control" id="proteinas" placeholder="Enter password" name="proteinas">
    </div>
    <button type="submit" name="back" value="1" class="btn btn-primary">Back</button>
    <button type="submit" name="next" value="3" class="btn btn-primary">Next</button>
  </form>
</body>

</html>