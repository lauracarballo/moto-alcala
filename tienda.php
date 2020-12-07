<?php
require("txtdb.class.php");
$db = new TxtDb();
$db_name = "motos";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Moto Alcalá - Tienda</title>
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

  <section id="content-tienda">
    <!-- Marcas nuevas -->
    <div class="container">
      <div class="inner-container">
        <h3>Nuestra Tienda</h3>
        <h4>Distribuidor Autorizado</h4>
        <div class="marquee">
          <div class="inner-marquee">
            <img class="honda logo" src="img-motoalcala/logo-marcas/honda-logo-png.png" alt="honda-logo" />
            <img class="kymco logo" src="img-motoalcala/logo-marcas/kymco-logo.png" alt="kymco-logo" />
            <img class="piaggio logo" src="img-motoalcala/logo-marcas/piaggio-1-logo.png" alt="piaggio-logo" />
            <img class="vespa logo" src="img-motoalcala/logo-marcas/vespa-logo.png" alt="vespa-logo" />
            <img class="aprilia logo" src="img-motoalcala/logo-marcas/aprilia-logo.png" alt="aprilia-logo" />
            <img class="moto-guzzi logo" src="img-motoalcala/logo-marcas/moto-guzzi-logo.png" alt="moto-guzzi-logo" />
            <img class="gilera logo" src="img-motoalcala/logo-marcas/gilera-logo.png" alt="gilera-logo" />
            <img class="daelim logo" src="img-motoalcala/logo-marcas/daelim-logo.png" alt="daelim-logo" />
            <img class="derbi logo" src="img-motoalcala/logo-marcas/derbi-logo.png" alt="derbi-logo" />
            <img class="setter logo" src="img-motoalcala/logo-marcas/setter-logo.png" alt="setter-logo" />
            <img class="peugeot logo" src="img-motoalcala/logo-marcas/peugeot-logo.jpeg" alt="peugeot-logo" />
            <!-- Duplicate -->
            <img class="honda logo" src="img-motoalcala/logo-marcas/honda-logo-png.png" alt="honda-logo" />
            <img class="kymco logo" src="img-motoalcala/logo-marcas/kymco-logo.png" alt="kymco-logo" />
            <img class="piaggio logo" src="img-motoalcala/logo-marcas/piaggio-1-logo.png" alt="piaggio-logo" />
            <img class="vespa logo" src="img-motoalcala/logo-marcas/vespa-logo.png" alt="vespa-logo" />
            <img class="aprilia logo" src="img-motoalcala/logo-marcas/aprilia-logo.png" alt="aprilia-logo" />
            <img class="moto-guzzi logo" src="img-motoalcala/logo-marcas/moto-guzzi-logo.png" alt="moto-guzzi-logo" />
            <img class="gilera logo" src="img-motoalcala/logo-marcas/gilera-logo.png" alt="gilera-logo" />
            <img class="daelim logo" src="img-motoalcala/logo-marcas/daelim-logo.png" alt="daelim-logo" />
            <img class="derbi logo" src="img-motoalcala/logo-marcas/derbi-logo.png" alt="derbi-logo" />
            <img class="setter logo" src="img-motoalcala/logo-marcas/setter-logo.png" alt="setter-logo" />
            <img class="peugeot logo" src="img-motoalcala/logo-marcas/peugeot-logo.jpeg" alt="peugeot-logo" />
          </div>
        </div>
        <h3>Motos Nuevas</h3>
        <p>
          En <strong>MotoAlcalá</strong> trabajamos con gran parte de marcas,
          te asesoraremos para que encuentres la mejor opción.
        </p>
        <p>
          También <strong>aceptamos tu moto como forma de pago</strong> tanto
          en motos nuevas como en motos de segunda mano.
        </p>
        <div class="marcas-nuevas inner-container scroll-container">
          <div class="row">
            <div class="col-sm-4">
              <img class="img-nuevas" src="img-motoalcala/motos-nuevas/01.png" alt="img-01" />
              <img class="img-nuevas" src="img-motoalcala/motos-nuevas/02.jpg" alt="img-02" />
              <img class="img-nuevas" src="img-motoalcala/motos-nuevas/03.png" alt="img-03" />
            </div>

            <div class="col-sm-4">
              <img class="img-nuevas" src="img-motoalcala/motos-nuevas/04.png" alt="img-04" />
              <img class="img-nuevas" src="img-motoalcala/motos-nuevas/05.png" alt="img-05" />
              <img class="img-nuevas" src="img-motoalcala/motos-nuevas/06.jpg" alt="img-06" />
            </div>
            <div class="col-sm-4">
              <img class="img-nuevas" src="img-motoalcala/motos-nuevas/07.jpg" alt="img-07" />
              <img class="img-nuevas" src="img-motoalcala/motos-nuevas/08.jpg" alt="img-08" />
              <img class="img-nuevas" src="img-motoalcala/motos-nuevas/09.png" alt="img-09" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Oferta  -->

    <div class="oferta inner-container">
      <div class="container">
        <div class="oferta-inner-text">
          <!-- <h3 class="oferta-title">Regalo Casco y Antirrobo</h3> -->
          <p class="oferta-title">
            <strong>Casco, antirrobo y 25% en equipación con la compra de tu moto
              nueva</strong>
          </p>
        </div>

        <div class="oferta-inner-img">
          <img class="img-oferta" src="img-motoalcala/oferta/antirrobo.png" alt="antirrobo" />
          <img class="img-oferta" src="img-motoalcala/oferta/casco.png" alt="casco" />
          <img class="img-oferta" src="img-motoalcala/oferta/guantes.png" alt="guantes" />
        </div>
      </div>
    </div>

    <!-- Motos de segunda mano -->
    <div class="container">
      <div class="motos-segunda inner-container">
        <h3>Motos de ocasión y segunda Mano</h3>
        <p>
          Nuestras motos pasan diversos controles de estado mecánico,
          documentación e historial, cuando hemos comprobado todo, es el
          momento de ofrecértela, la ponemos a punto y hacemos todos los
          trámites de documentación en nuestra tienda. Trabajamos con todas
          las marcas del mercado para poder ofrecerte la mayor variedad
          posible, ya sean
          <strong>
            Scooter, custom, deportiva, naked, Trail, enduro, etc.</strong>
        </p>
        <div class="inner-container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
            <?php
            $motos = $db->select('motos');
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
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Equipación y accesorios  -->
    <div class="container">
      <div class="inner-container">
        <h3>Equipación para tu Moto</h3>
        <p>
          Si te mueves a dos ruedas aquí encontrarás equipación, accesorios y
          complementos como
          <strong>cascos, guantes, térmicos, antirrobos, escapes, etc.</strong>
          y más para equiparte tú y tu moto, ya sea para la ciudad o cualquier
          entorno.
        </p>
      </div>
      <div class="container">
        <div class="marquee">
          <div class="inner-marquee">
            <img class="acerbis logo" src="img-motoalcala/logo-equipacion/acerbis.jpg" alt="acerbis-logo" />
            <img class="artago logo" src="img-motoalcala/logo-equipacion/artago.jpg" alt="artago-logo" />
            <img class="brombo logo" src="img-motoalcala/logo-equipacion/brombo.jpg" alt="brombo-logo" />
            <img class="bs logo" src="img-motoalcala/logo-equipacion/bs.jpg" alt="bs-logo" />
            <img class="castrol logo" src="img-motoalcala/logo-equipacion/castrol.jpg" alt="castrol-logo" />
            <img class="galfer logo" src="img-motoalcala/logo-equipacion/galfer.jpg" alt="galfer-logo" />
            <img class="givi logo" src="img-motoalcala/logo-equipacion/givi.jpg" alt="givi-logo" />
            <img class="hjc logo" src="img-motoalcala/logo-equipacion/hjc.jpg" alt="hjc-logo" />
            <img class="ls2 logo" src="img-motoalcala/logo-equipacion/ls2.png" alt="ls2-logo" />
            <img class="malossi logo" src="img-motoalcala/logo-equipacion/malossi.jpg" alt="malossi-logo" />
            <img class="polini logo" src="img-motoalcala/logo-equipacion/polini.jpg" alt="polini-logo" />
            <img class="puig logo" src="img-motoalcala/logo-equipacion/PUIG.jpg" alt="puig-logo" />
            <img class="shad logo" src="img-motoalcala/logo-equipacion/shad.jpg" alt="shad-logo" />
            <img class="sw-motech logo" src="img-motoalcala/logo-equipacion/swmotech.jpg" alt="sw-motech-logo" />
            <img class="tucano logo" src="img-motoalcala/logo-equipacion/tucano.jpg" alt="tucano-logo" />
            <img class="unik logo" src="img-motoalcala/logo-equipacion/unik.jpg" alt="unik-logo" />
            <img class="urban logo" src="img-motoalcala/logo-equipacion/urban.jpg" alt="urban-logo" />
            <img class="yuasa logo" src="img-motoalcala/logo-equipacion/yuasa.jpg" alt="yuasa-logo" />
          </div>
        </div>
      </div>
      <div class="inner-container scroll-container">
        <div class="row">
          <img class="img-equipacion" src="img-motoalcala/equipacion/baul.jpg" alt="baul" />
          <img class="img-equipacion" src="img-motoalcala/equipacion/casco.png" alt="casco" />
          <img class="img-equipacion" src="img-motoalcala/equipacion/escape.jpg" alt="escape" />
          <img class="img-equipacion" src="img-motoalcala/equipacion/guantes.jpg" alt="guantes" />
          <img class="img-equipacion" src="img-motoalcala/equipacion/lock.jpg" alt="lock" />
          <img class="img-equipacion" src="img-motoalcala/equipacion/tucano.jpg" alt="tucano" />
        </div>
      </div>
    </div>
    <!-- Financiación y seguro -->
    <div class="container">
      <div class="inner-container">
        <div class="container">
          <div class="container-content">
            <div class="row">
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-lg-12">
                    <h3>Contrata aquí tu seguro</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <img class="img-financiacion amv" src="img-motoalcala/financiacion-seguro/amv-seguro.jpg" alt="amv" />
                  </div>
                  <div class="col-md-6">
                    <p>
                      Encontramos tu seguro de moto a medida y al mejor precio
                      con las coberturas que realmente necesitas
                    </p>
                    <ul>
                      <li>
                        Especialistas en seguros de moto
                      </li>
                      <li>
                        Más de 700.000 personas confían en AMV Seguros
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-lg-12">
                    <h3>Financiación a tu medida</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <img class="img-financiancion cetelem" src="img-motoalcala/financiacion-seguro/cetelem2.png" alt="cetelem" />
                  </div>
                  <div class="col-md-6">
                    <p>
                      ¡Ya puedes financiar tu motocicleta! <br />
                      Te ofrecemos el crédito pensado para financiar cualquier
                      tipo de motocicleta.
                    </p>
                    <ul>
                      <li>
                        Sin cambiar de banco.
                      </li>
                      <li>
                        Un crédito a tu medida.
                      </li>
                      <li>
                        Hasta 96 meses de plazo devolución.
                      </li>
                      <li>
                        Tu dinero disponible en 48 horas.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Transporte -->
    <div class="container">
      <div class="inner-container">
        <div class="row">
          <div class="col-md-5">
            <div class="transporte">
              <img class="img-transporte" src="img-motoalcala/transporte.jpg" alt="transporte" />
            </div>
          </div>
          <div class="col-md-7">
            <div class="transporte">
              <h3>¿Necesitas ayuda con el Transporte?</h3>
              <div class="container-content">
                <p>
                  Trabajamos con empresas de transporte de motos
                  especializadas en el sector para que recibas tu moto en
                  cualquier parte de la península lo antes posible desde 90€.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <?php include('footer.php'); ?>
</body>

</html>