<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Moto Alcalá - Vende tu Moto</title>
  <link rel="icon" type="image/png" sizes="16x16" href="img-motoalcala/favicon-16x16.png" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link rel="stylesheet" href="CSS/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700" rel="stylesheet" />
  <link rel="stylesheet" href="CSS/font-awesome.min.css" />
  <link rel="stylesheet" href="CSS/styles.css" />

</head>

<body>

  <?php include('header.php'); ?>

  <!-- Form -->
  <section class="container form-container">
    <div class="row">
      <div class="col-md-4">
        <div class="info-venta">
          <h3>
            Compramos tu Moto
          </h3>

          <p>
            <strong>¿Quieres vender tu moto? ¿Quieres saber en cuanto está
              valorada?</strong>
          </p>
          <p>
            Te ofrecemos 2 opciones:
          </p>
          <ol>
            <li>
              La <strong>compramos directamente</strong> abonándote el importe
              en el acto.
            </li>
            <li>
              <strong>Gestionamos la venta</strong> de tu moto en nuestra
              tienda. Obtienes un mayor importe por tu moto y lo recibes en el
              momento que la tengamos vendida. Tú decides el tiempo que nos
              dejas a cargo de tu moto.
            </li>
          </ol>
          <p>
            Nos ocupamos de todo el proceso de venta y sin
            <strong>ningún coste para ti.</strong>
          </p>
          <p>Ofrecemos la <strong>mayor tasación</strong> por tu moto.</p>
          <p>
            Gestionamos toda la documentación y
            <strong>cambio de nombre</strong> totalmente
            <strong>gratis</strong>.
          </p>
          <img class="img-venta" src="img-motoalcala/negociacion.jpg" alt="negociacion" />
        </div>
      </div>
      <div class="col-md-8">
        <div class="form-area">
          <form action="https://formsubmit.co/laura.carballo14@gmail.com" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_subject" value="Nueva solicitud de Tasacion" />
            <input type="text" name="_honey" style="display: none;" />
            <input type="hidden" name="_next" value="https://motoalcala.es/gracias.php" />

            <p>
              <strong>
                Rellena este formulario y obtén una valoración gratuita en
                menos de 24h y sin compromiso.
              </strong>
            </p>
            <p>
              Si prefieres, siempre puedes contactarnos via
              <strong>WhatsApp</strong> o visitarnos en
              <strong>nuestra tienda</strong>.
            </p>
            <!-- Nombre y Apellidos -->
            <p>
              <strong>
                Datos de contacto
              </strong>
            </p>
            <div class="form-group">
              <div class="form-row">
                <div class="col">
                  <label for="form-name">Nombre</label>
                  <input name="Nombre" type="text" class="form-control form-control-sm" placeholder="" />
                </div>
                <div class="col">
                  <label for="form-surname">Apellidos</label>
                  <input name="Apellidos" type="text" class="form-control form-control-sm" placeholder="" />
                </div>
              </div>
            </div>
            <!-- Email y telefono -->
            <div class="form-group">
              <div class="form-row">
                <div class="col">
                  <label for="form-email">Email</label>
                  <input name="email" type="email" class="form-control form-control-sm" placeholder="" />
                </div>
                <div class="col">
                  <label for="form-phone">Teléfono de contacto</label>
                  <input name="Telefono" type="tel" class="form-control form-control-sm" placeholder="" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col">
                  <label for="form-address">Localidad o Provincia</label>
                  <input name="localidad" type="text" class="form-control form-control-sm" placeholder="" />
                </div>
              </div>
            </div>
            <p>
              <strong>
                Información sobre tu moto
              </strong>
            </p>
            <!-- Marca y modelo -->
            <div class="form-group">
              <div class="form-row">
                <div class="col">
                  <label for="form-brand">Marca</label>
                  <input name="Marca de moto" type="text" class="form-control form-control-sm" placeholder="" />
                </div>
                <div class="col">
                  <label for="form-model">Modelo</label>
                  <input name="Modelo de moto" type="text" class="form-control form-control-sm" placeholder="" />
                </div>
              </div>
            </div>
            <!-- Año y kms -->
            <div class="form-group">
              <div class="form-row">
                <div class="col">
                  <label for="form-year">Año</label>
                  <input name="Ano de la moto" type="number" class="form-control form-control-sm" placeholder="" />
                </div>
                <div class="col">
                  <label for="form-model">Kilometraje</label>
                  <input name="Kms" type="text" class="form-control form-control-sm" placeholder="" />
                </div>
              </div>
            </div>
            <!-- Estado de la moto -->
            <div class="form-group">
              <label for="form-comments">Estado general de la moto</label>
              <input name="Estado general" type="text" class="form-control form-control-sm" placeholder="Añada alguna información acerca del estado de su moto (última ITV, etc.)" />
            </div>
            <!-- Precio por moto -->
            <div class="form-group">
              <label for="form-comments">¿Cuánto pides por la moto?</label>
              <input name="precio estimado" type="text" class="form-control form-control-sm" placeholder="" />
            </div>
            <!-- Fotos -->
            <p>Sube fotos de tu moto (opcional)</p>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input name="Fotos" type="file" multiple class="custom-file-input" id="customFileLangHTML" />
                <label class="custom-file-label" for="customFileLangHTML" data-browse="Seleccionar archivo">Seleccione fotos de su moto...</label>
              </div>
            </div>
            <div class="btn-group-venta">
              <button type="submit" class="btn btn-md btn-secondary">
                Enviar formulario
              </button>
              <p class="space-text">o si prefieres</p>
              <a class="btn btn-md btn-success" href="https://wa.me/34682383787?text=Hola!%20Estoy%20interesado%20en%20comprar/vender%20mi%20moto" rel="noopener noreferrer nofollow" target="_blank" role="button">Contáctanos por WhatsApp</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <?php include('footer.php'); ?>
  <script src="JS/jquery.min.js"></script>
  <script src="JS/bootstrap.min.js"></script>
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

</html>