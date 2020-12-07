<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Moto Alcalá - Contacto</title>
  <link rel="icon" type="image/png" sizes="16x16" href="img-motoalcala/favicon-16x16.png" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link rel="stylesheet" href="CSS/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700" rel="stylesheet" />
  <link rel="stylesheet" href="CSS/font-awesome.min.css" />
  <link rel="stylesheet" href="CSS/styles.css" />
  <script defer src="JS/jquery.min.js"></script>

  <script defer src="JS/bootstrap.min.js"></script>
</head>

<body>

  <?php include('header.php'); ?>

  <!-- Contact Form -->
  <div class="container">
    <div class="inner-container">
      <div class="row">
        <div class="col-lg-8">
          <div class="contact-form">
            <form action="https://formsubmit.co/motoalcala@motoalcala.es" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_subject" value="Nuevo Mensaje desde página de Contacto" />
              <input type="text" name="_honey" style="display: none;" />
              <input type="hidden" name="_captcha" value="false" />
              <input type="hidden" name="_next" value="https://motoalcala.es/gracias.php" />
              <h3>
                Contacta con nosotros
              </h3>
              <div class="form-group">
                <label for="form-name">Nombre y Apellidos</label>
                <input name="Nombre y Apellidos" type="text" class="form-control form-control-sm" placeholder="" />
              </div>
              <div class="form-group">
                <label for="form-email">Email o Teléfono de contacto</label>
                <input name="Forma de contacto" type="text" class="form-control form-control-sm" placeholder="" />
              </div>
              <div class="form-group">
                <label for="form-textarea">Mensaje</label>
                <textarea name="Mensaje" class="form-control" id="form-text-area" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-secondary btn-sm">
                Enviar mensaje
              </button>
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-details">
            <h4><strong>Moto Alcalá</strong></h4>
            <p>C/Virgen de la Alegría, 7 <br />Madrid <br />28027</p>
            <a href="https://goo.gl/maps/CnKGs7Y7tEGgyitr5">Cómo llegar</a>
            <div class="phone-details">
              <div>
                <a class="contact-link" href="mailto:motoalcala@motoalcala.es"><i class="far fa-envelope"></i> motoalcala@motoalcala.es
                </a>
              </div>
              <div>
                <a class="contact-link" href="tel:+34682383787"><i class="fab fa-whatsapp"></i> 682 383 787
                </a>
              </div>
              <div>
                <a class="contact-link" href="tel:+34911747338"><i class="fa-flip-horizontal fa-phone fas"> </i> 91 174 73
                  38
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>

</html>