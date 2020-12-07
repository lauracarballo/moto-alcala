<?php $current_page = $_SERVER['REQUEST_URI']; ?>
<header>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-black">
            <div class="header-address">
                <a href="https://goo.gl/maps/CnKGs7Y7tEGgyitr5" rel="noopener noreferrer nofollow" class="white" target="_blank">
                    <i class="header-contact fas fa-map-marker-alt"></i> C/ Virgen de
                    la Alegría, 7 - 28027 Madrid
                </a>
                <i class="header-contact fa-flip-horizontal fa-phone fas"></i> 91
                174 73 38
            </div>
            <a class="navbar-brand" href="/"><img class="main-logo" src="img-motoalcala/motoalcala-logo.png" /></a>
            <div class="collapse navbar-collapse navbar-container" id="navbarNavAltMarkup">
                <div class="navbar-nav m-auto">
                    <a class="<?php echo $current_page === '/' || $current_page === '/index.php'  ? "active" : "" ?> nav-item nav-link" href="/">Inicio </a>
                    <a class="<?php echo $current_page === '/tienda.php' ? "active" : "" ?> nav-item nav-link" href="tienda.php">Tienda</a>
                    <a class="<?php echo $current_page === '/venta-motos.php' ? "active" : "" ?> nav-item nav-link" href="venta-motos.php">Vende tu Moto</a>
                    <a class="<?php echo $current_page === '/contacto.php' ? "active" : "" ?> nav-item nav-link" href="contacto.php">Contacto</a>
                </div>
            </div>

            <div class="header-number">
                <a class="header-number-tel" href="tel:+34682383787">
                    <strong>Contacta ahora:</strong> <br />
                    <strong>682 383 787</strong>
                </a>
                <a href="https://wa.me/34682383787?text=Hola!%20Estoy%20interesado%20en%20comprar/vender%20mi%20moto" class="wa-icon" rel="noopener nofollow" target="_blank">
                    <i class="fab fa-3x fa-whatsapp"></i>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
</header>