<div class="container">
    <div class="row">
        <?php
        if (isset($validation)) {
            print $validation->listErrors();
        }
        ?>

        <div class="col-8">
            <form action="<?= base_url('/administrador/distribuidor/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <h1>Agregar distribuidor</h1>
                </div>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre(s)</label>
                    <input type="text" class="form-control" name="Nombre" id="Nombre">
                </div>

                <div class="mb-3">
                    <label for="Ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" name="Ciudad" id="Ciudad">
                </div>

                <div class="mb-3">
                    <label for="Telefono" class="form-label">Telefono </label>
                    <input type="text" class="form-control" name="Telefono" id="Telefono">
                </div>

                <div class="mb-3">
                    <label for="Correo" class="form-label">Correo electrónico</label>
                    <input type="text" class="form-control" name="Correo" id="Correo">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>