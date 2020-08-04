<nav class="navbar navbar-expand-lg navbar-light bg-light nav">
  <a class="navbar-brand" href="#">
    <h1 class="nav__brand">Glowing Up</h1>
    <img src="<?php echo SERVERURL;?>src/LogoGlowingUp2.png" class="nav__brand--img" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav nav__list">
      <li class="nav-item active nav__item">
        <a class="nav-link nav__link" href="<?php echo SERVERURL;?>inicio/">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item nav__item">
        <a class="nav-link nav__link" href="<?php echo SERVERURL;?>catalogo/">Marcas</a>
      </li>
      <li class="nav-item nav__item">
        <a class="nav-link nav__link" href="<?php echo SERVERURL;?>catalogo/">Categorias</a>
      </li>
      <li class="nav-item nav__item">
        <a class="nav-link nav__link" href="<?php echo SERVERURL;?>nosotros/">Nosotros</a>
      </li>
      <li class="nav-item nav__item">
        <a class="nav-link nav__link" href="<?php echo SERVERURL;?>contacto/">Contactenos</a>
      </li>
      <li class="nav-item nav__item">
        <a class="nav-link nav__link" href="#">Bag</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo SERVERURL;?>productos/">CRUD Producto</a>
          <a class="dropdown-item" href="<?php echo SERVERURL;?>marcas/">CRUD Marcas</a>
          <a class="dropdown-item" href="<?php echo SERVERURL;?>categorias/">CRUD Categoria</a>
          <a class="dropdown-item" href="<?php echo SERVERURL;?>proveedor/">CRUD Proveedor</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo SERVERURL;?>usuarios/">CRUD Usuarios</a>
        </div>
      </li>
    </ul>
  </div>
</nav>