<div class="container">
  <div class="row">
    <div class="col-12">
      <h2>Usuario</h2>
      <table class=" table table-bordered-stripped border-primary">
        <thead>
          <th>Nombre</th>
          <th>Apellido Paternos</th>
          <th>País de origen</th>
          <th>Correo</th>
          <th>Contraseña</th>
          <th colspan="2"></th>
        </thead>
        <tbody>
          <?php foreach ($usuarios as $usuario): ?>
            <tr>
              <td>
                <?= $usuario->Nombre ?>
              </td>
              <td>
                <?= $usuario->Apell_Paterno ?>
              </td>
              <td>
                <?= $usuario->Pais ?>
              </td>
              <td>
                <?= $usuario->Correo_Elec ?>
              </td>
              <td>
                <?= $usuario->Contraseña ?>
              </td>
              <td>
                <a href="<?= base_url('/administrador/usuario/editar/' . $usuario->idUsuario); ?>">
                  <img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar" class="service-img"
                    width="40" height="40">
                </a>
              </td>
              <td>
                <a href="<?= base_url('/administrador/usuario/delete/' . $usuario->idUsuario); ?>">
                  <img src="https://cdn-icons-png.flaticon.com/128/1828/1828843.png" alt="editar" class="service-img"
                    width="40" height="40">
                </a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <div aria-label="Orange and tan hamster running in a metal wheel" role="img" class="wheel-and-hamster">
        <div class="wheel"></div>
        <div class="hamster">
          <div class="hamster__body">
            <div class="hamster__head">
              <div class="hamster__ear"></div>
              <div class="hamster__eye"></div>
              <div class="hamster__nose"></div>
            </div>
            <div class="hamster__limb hamster__limb--fr"></div>
            <div class="hamster__limb hamster__limb--fl"></div>
            <div class="hamster__limb hamster__limb--br"></div>
            <div class="hamster__limb hamster__limb--bl"></div>
            <div class="hamster__tail"></div>
          </div>
        </div>
        <div class="spoke"></div>
      </div>
    </div>
  </div>
</div>