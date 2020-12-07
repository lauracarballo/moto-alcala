<?php
if ($_SERVER["PHP_AUTH_USER"] !== 'admin' || $_SERVER['PHP_AUTH_PW'] !== 'password') {
  // send header for the browser to show an authentication prompt box
  header('WWW-Authenticate: Basic realm="MotoAlcalaAuth"');
  header('HTTP/1.0 401 Unauthorized');
  echo "No Access";
  exit;
}

require("txtdb.class.php");

$db = new TxtDb();
$db_name = "motos";

if ($_POST) {

  if ($_POST['deleteId']) {
    $db->delete($db_name, $_POST['deleteId']);
  }

  $file = $_FILES["foto"];
  if ($file) {
    $target_dir = "uploads/";
    if (getimagesize($file["tmp_name"]) === false) {
      echo "Archivo " . $file["name"] . " no es una imagen.";
      exit;
    }
    $target_file = $target_dir . basename($file["name"]);
    if (file_exists($target_file)) {
      echo "El archivo " . $target_file . " ya existe.";
      exit;
    }
    if ($file["size"] > 1500000) {
      echo "El archivo es demasiado grande (Max. 1.5MB).";
      exit;
    }

    $upload = move_uploaded_file($file["tmp_name"], $target_file);

    if ($upload === false) {
      echo "Error en la subida del archivo.";
      exit;
    }

    $db->insert($db_name, [
      "nombre" => $_POST["nombre"],
      "matriculacion" => $_POST["matriculacion"],
      "kms" => $_POST["kms"],
      "precio" => $_POST["precio"],
      "file" => $target_file,
    ]);
  }
}
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Moto Alcalá - Admin</title>
  <link rel="icon" type="image/png" sizes="16x16" href="img-motoalcala/favicon-16x16.png" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link rel="stylesheet" href="CSS/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700" rel="stylesheet" />
  <link rel="stylesheet" href="CSS/font-awesome.min.css" />
  <link rel="stylesheet" href="CSS/styles.css" />
  <script src="JS/jquery.min.js"></script>
  <script src="JS/bootstrap.min.js"></script>
</head>

<body>
  <header>
    <div class="container">
      <div class="navbar-styling">
        <div class="navbar-brand"><img class="main-logo" src="img-motoalcala/motoalcala-logo.png" />
        </div>
        <div>
          <strong class="admin-title">Administrador Web</strong>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="inner-container">
      <h2>Añadir nuevas motos a la web</h2>
      <form method="POST" enctype="multipart/form-data">
        <div class="card" style="max-width: 50%;">
          <div class="custom-file">
            <input name="foto" type="file" class="custom-file-input" id="customFileLangHTML" required />
            <label class="custom-file-label" for="customFileLangHTML" data-browse="Seleccionar archivo">Seleccione fotos de su moto...</label>
          </div>
          <div class="card-body">
            <div class="card-text">
              <div class="form-row">
                <label>Nombre:</label>
                <input class="card-title" name="nombre" placeholder="Nombre de moto" required> <br>
              </div>
              <div class="form-row">
                <label>Año de matriculación:</label>
                <input type="text" name="matriculacion" placeholder="Año" required> <br>
              </div>
              <div class="form-row">
                <label>Kilómetros:</label>
                <input type="text" name="kms" placeholder="Kms" required> <br>
              </div>
              <div class="form-row">
                <label>Precio:</label>
                <input type="text" name="precio" placeholder="Precio" required> <br>
              </div>
              <div class="button-styling">
                <button type="submit" class="btn btn-md btn-secondary">Añadir</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="inner-container">
      <h2>Motos actuales en la web</h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
        <?php
        $motos = $db->select('motos');
        $index = 0;
        foreach ($motos as $moto) {
        ?>
          <div class="col flex mb-4">
            <div class="card">
              <img class="img-segunda-mano card-img-top" src="<?php print $moto['file']; ?>" alt="<?php print $moto['name']; ?>" />
              <div class="card-body">
                <h5 class="card-title">
                  <?php print $moto['nombre']; ?>
                </h5>
                <p class="card-text">
                  Año de matriculación: <?php print $moto['matriculacion']; ?> <br />
                  Kilómetros: <?php print $moto['kms']; ?> <br />
                  Precio: <?php print $moto['precio']; ?>
                </p>
                <form method="POST">
                  <input type="hidden" name="deleteId" value="<?php echo array_keys($motos)[$index++]; ?>" />
                  <button type="submit" class="btn btn-md btn-secondary">Borrar</button>
                </form>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <script>
    var emptyFileLabel = $(".custom-file-label").text();
    $(".custom-file-input").on("change", function(event) {
      var fileNames = Array.from(event.target.files)
        .map(function(file) {
          return file.name;
        })
        .join(", ");
      if (fileNames) {
        $(".custom-file-label").text(fileNames);
      } else {
        $(".custom-file-label").text(emptyFileLabel);
      }
    });
  </script>
</body>