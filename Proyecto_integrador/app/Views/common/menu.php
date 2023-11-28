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
            Usuarios 👤
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('administrador/usuario/agregar') ?>">Agregar usuario ➕</a></li>
            <li><a class="dropdown-item" href="<?= base_url('administrador/usuario'); ?>">Mostrar usuarios 👁️</a></li>
            <li><a class="dropdown-item" href="<?= base_url('administrador/usuario/buscar'); ?>">Buscar usuario 🔍</a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Distribuidores 🚛
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('administrador/distribuidor/agregar') ?>">Agregar distribuidor ➕</a></li>
            <li><a class="dropdown-item" href="<?= base_url('administrador/distribuidor'); ?>">Mostrar distribuidores 👁️</a></li>
            <li><a class="dropdown-item" href="<?= base_url('administrador/distribuidor/buscar'); ?>">Buscar distribuidores 🔍</a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Bicicletas 🚲
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('administrador/bicicletas/agregar') ?>">Agregar bicicletas ➕</a></li>
            <li><a class="dropdown-item" href="<?= base_url('administrador/bicicletas'); ?>">Mostrar bicicletas 👁️</a></li>
            <li><a class="dropdown-item" href="<?= base_url('administrador/bicicletas/buscar'); ?>">Buscar bicicletas 🔍</a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Características 📋
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('administrador/caracteristicas/agregar') ?>">Agregar caracteristicas ➕</a></li>
            <li><a class="dropdown-item" href="<?= base_url('administrador/caracteristicas'); ?>">Mostrar caracteristicas 👁️</a></li>
            <li><a class="dropdown-item" href="<?= base_url('administrador/caracteristicas/buscar'); ?>">Buscar caracteristicas 🔍</a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas ™
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('administrador/marca/agregar') ?>">Agregar marca ➕</a></li>
            <li><a class="dropdown-item" href="<?= base_url('administrador/marca'); ?>">Mostrar marca 👁️</a></li>
            <li><a class="dropdown-item" href="<?= base_url('administrador/marca/buscar'); ?>">Buscar marca 🔍</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Modelos 🗃
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('administrador/modelo/agregar') ?>">Agregar modelo ➕</a></li>
            <li><a class="dropdown-item" href="<?= base_url('administrador/modelo'); ?>">Mostrar modelo 👁️</a></li>
            <li><a class="dropdown-item" href="<?= base_url('administrador/modelo/buscar'); ?>">Buscar modelo 🔍</a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Componentes ⚙
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('administrador/componentes/agregar') ?>">Agregar componentes ➕</a></li>
            <li><a class="dropdown-item" href="<?= base_url('administrador/componentes'); ?>">Mostrar componentes 👁️</a></li>
            <li><a class="dropdown-item" href="<?= base_url('administrador/componentes/buscar'); ?>">Buscar componentes 🔍</a></li>

          </ul>
        </li>
    </div>
  </div>
</nav>