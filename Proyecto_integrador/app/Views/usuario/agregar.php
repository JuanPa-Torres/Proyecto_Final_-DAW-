<div class="container">
    <div class="row">
        <?php
        if (isset($validation)) {
            print $validation->listErrors();
        }
        ?>

        <div class="col-8">
            <form action="<?= base_url('/usuario/agregar'); ?>" method="POST">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre(s)</label>
                    <input type="text" class="form-control" name="Nombre" id="Nombre">
                </div>

                <div class="mb-3">
                    <label for="Apell_Paterno" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" name="Apell_Paterno" id="Apell_Paterno">
                </div>

                <div class="mb-3">
                    <label for="Pais" class="form-label">País</label>
                    <input type="text" class="form-control" name="Pais" id="Pais">
                </div>

                <div class="mb-3">
                    <label for="Correo_Elec" class="form-label">Correo electrónico</label>
                    <input type="text" class="form-control" name="Correo_Elec" id="Correo_Elec">
                </div>

                <div class="mb-3">
                    <label for="Contraseña" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="Contraseña" id="Contraseña">
                </div>

                <div class="mb-3">
                    <label for="Perfil">Perfil</label>
                    <select name="Perfil" id="Perfil" class="form-control">
                        <option value="1">Administrador</option>
                        <option value="2">Cliente</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-outline-success">
                </div>
            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>

 