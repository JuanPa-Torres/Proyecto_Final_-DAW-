<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('/') ?>">World of Bike🗺️</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario🪪
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/usuario/agregar') ?>">Agregar usuario ➕</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/usuario/mostrar'); ?>">Mostrar usuarios 👁️</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/usuario/buscar'); ?>">Buscar usuario 🔍</a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Distribuidores 🚛
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/distribuidor/agregar') ?>">Agregar distribuidor ➕</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/distribuidor/mostrar'); ?>">Mostrar distribuidores 👁️</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/distribuidor/buscar'); ?>">Buscar distribuidores 🔍</a></li>

          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas ™
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/marca/agregar') ?>">Agregar marca ➕</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/marca/mostrar'); ?>">Mostrar marca 👁️</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/marca/buscar'); ?>">Buscar marca 🔍</a></li>

          </ul>
        </li>

    </div>
  </div>
</nav>