<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#">Reservacion de Mesas</a>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Restaurant EX</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link mx-lg-2" aria-current="page" href="<?php echo APP_URL; ?>dashboard/">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#reservas">Reserva Ahora</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>nosotros/">Acerca de Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>contacto/">Contáctanos</a>
            </li>
          </ul>
        </div>
      </div>
      <a href="<?php echo APP_URL;?>login/" class="login-btn">Inicie Sesión</a>
      <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>