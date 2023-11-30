<div class="container">
    <div class="row">
        <?php
        if (isset($validation)) {
            print $validation->listErrors();
        }
        ?>

        <div class="col-8">
            <h2>Editar Distribuidores</h2>

            <form action="<?= base_url('/administrador/distribuidor/editar/' . $distribuidor->idDistribuidor); ?>"
                method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="idDistribuidor" value="<?= $distribuidor->idDistribuidor; ?>" />
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre(s)</label>
                    <input type="text" class="form-control" name="Nombre" id="Nombre"
                        value="<?= $distribuidor->Nombre ?>">
                </div>

                <div class="mb-3">
                    <label for="Ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" name="Ciudad" id="Ciudad"
                        value="<?= $distribuidor->Ciudad ?>">
                </div>

                <div class="mb-3">
                    <label for="Telefono" class="form-label">Telefono </label>
                    <input type="text" class="form-control" name="Telefono" id="Telefono"
                        value="<?= $distribuidor->Telefono ?>">
                </div>

                <div class="mb-3">
                    <label for="Correo" class="form-label">Correo electrónico</label>
                    <input type="text" class="form-control" name="Correo" id="Correo"
                        value="<?= $distribuidor->Correo ?>">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>