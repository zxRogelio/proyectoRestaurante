

 <section class="hero-section" style="background: url('<?php echo APP_URL; ?>app/views/img/inicio.png') no-repeat center center; background-size: cover;">
        <div class="container d-flex align-items-center justify-content-center flex-column">
            <h1 class="display-2 font-weight-bold my-3">Mesas 24/7</h1>
            <h2 class="display-4 mb-5">Cuando más lo necesites</h2>
            <a class="btn btn-lg btn-primary" href="#reservas">Reservar Ahora</a>
        </div>
    </section>

  <div class="reservacion-contenedor container my-5" id="reservas">
    <h1 class="text-center mb-4">Encuentra tu mesa para cualquier restaurante</h1>
    <form>
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label for="date" class="form-label">Fecha:</label>
          <input type="date" id="date" name="date" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label for="time" class="form-label">Hora:</label>
          <input type="time" id="time" name="time" class="form-control" required>
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Solicitar Mesa</button>
      </div>
    </form>
    <div class="buscador mt-4">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar">
        <button type="button" class="btn btn-outline-secondary">Buscar</button>
      </div>
    </div>
  </div>
  <hr>

  <nav class="navbarr d-flex align-items-center justify-content-center my-4">
    <div class="nav-item d-flex align-items-center">
      <q class="me-2">¿No sabes en donde se ubican los restaurantes en tu zona? Encuéntralos</q>
      <a href="https://www.google.es/maps" id="verUbicacion" target="_blank">Ver Ubicación</a>
    </div>
  </nav>

  <p class="head-r text-center">Reserva para llevar a esa persona especial</p>
  <div class="container my-4">
    <div class="row">
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="<?php echo APP_URL; ?>/r1" ><img src="<?php echo APP_URL; ?>app/views/img/R1.png" alt="Restaurante1" class="img-fluid"></a>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="<?php echo APP_URL; ?>/r2" ><img src="<?php echo APP_URL; ?>app/views/img/R2.png" alt="Restaurante2" class="img-fluid"></a>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="<?php echo APP_URL; ?>/r3" ><img src="<?php echo APP_URL; ?>app/views/img/R3.png" alt="Restaurante3" class="img-fluid"></a>
      </div>
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="<?php echo APP_URL; ?>/r1" ><img src="<?php echo APP_URL; ?>app/views/img/R4.png" alt="Restaurante4" class="img-fluid"></a>
      </div>
    </div>
  </div>

  <footer class="text-center py-4">
    &copy; 2024 Actualizado. Todos los derechos reservados para las páginas recopiladoras de información.
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
