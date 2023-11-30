<div class="container">
    <div class="row">

        <div class="col-8">
            <h2>Editar Usuarios</h2>
            <form action="<?= base_url('/administrador/usuario/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="idUsuario" value="<?= $usuario->idUsuario ?>">

                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="Nombre" id="Nombre" value="<?= $usuario->Nombre; ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label for="Apell_Paterno" class="form-label">Apellido paterno</label>
                    <input type="text" class="form-control" name="Apell_Paterno" id="Apell_Paterno"
                        value="<?= $usuario->Apell_Paterno; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="Pais" class="form-label">País de origen</label>
                    <input type="text" class="form-control" name="Pais" id="Pais" value="<?= $usuario->Pais; ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label for="Correo_Elec" class="form-label">Correo electónico:</label>
                    <input type="email" class="form-control" name="Correo_Elec" id="Correo_Elec"
                        value="<?= $usuario->Correo_Elec; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="Contraseña" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="Contraseña" id="Contraseña"
                        value="<?= $usuario->Contraseña; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="Perfil" class="form-label">Tipo de perfil</label>
                    <select name="Perfil" id="Perfil" class="form-control">
                        <option value="1">Administrador</option>
                        <option value="2">Cliente</option>
                    </select>
                    <div class="mb-3">
                    <select name="Perfil" class="form-control">
                        <option value="1" <?php if($usuario->Perfil=="1") echo 'selected'; ?>>Administrador</option>
                        <option value="2"<?php if($usuario->Perfil=="2") echo 'selected'; ?>> Cliente</option>
                    </select>
                </div>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>