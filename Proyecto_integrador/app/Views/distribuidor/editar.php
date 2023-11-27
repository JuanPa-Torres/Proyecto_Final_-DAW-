<div class="container">
    <div class="row">
        <?php
        if (isset($validation)) {
            print $validation->listErrors();
        }
        ?>

        <div class="col-8">
            <form action="<?= base_url('distribuidor/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="idDistribuidor" value="<?= $distribuidor->idDistribuidor; ?>" />
                <div class="mb-3">
                    <label for="Nombre" class="form-label" value="<?= $distribuidor->Nombre?>">Nombre(s)</label>
                    <input type="text" class="form-control" name="Nombre" id="Nombre">
                </div>

                <div class="mb-3">
                    <label for="Ciudad" class="form-label"value="<?= $distribuidor->Ciudad?>">Ciudad</label>
                    <input type="text" class="form-control" name="Ciudad" id="Ciudad">
                </div>

                <div class="mb-3">
                    <label for="Telefono" class="form-label" value="<?= $distribuidor->Telefono?>">Telefono </label>
                    <input type="number" class="form-control" name="Telefono" id="Telefono">
                </div>

                <div class="mb-3">
                    <label for="Correo" class="form-label"value="<?= $distribuidor->Correo?>">Correo electrónico</label>
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