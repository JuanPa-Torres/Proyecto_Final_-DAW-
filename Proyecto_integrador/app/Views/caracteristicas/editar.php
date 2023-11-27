<div class="container">
    <div class="row">
        <!-- <?php print_r($direccion); ?> -->

        <div class="col-8">
            <h2>Editar Direccion</h2>
            <form action="<?= base_url('direccion/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="idDireccion" value="<?= $direccion->idDireccion; ?>" />

                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" class="form-control" name="estado" id="estado" value="<?= $direccion->estado; ?>">
                </div>

                <div class="mb-3">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" id="estado" value="<?= $direccion->ciudad; ?>">
                </div>

                <div class="mb-3">
                    <label for="calle" class="form-label">Calle</label>
                    <input type="text" class="form-control" name="calle" id="calle" value="<?= $direccion->calle; ?>">
                </div>

                <div class="mb-3">
                    <label for="noExterior" class="form-label">Numero Exterior</label>
                    <input type="text" class="form-control" name="noExterior" id="noExterior" value="<?= $direccion->noExterior; ?>">
                </div>

                <div class="mb-3">
                    <label for="cp" class="form-label">CP</label>
                    <input type="text" class="form-control" name="cp" id="cp" value="<?= $direccion->cp; ?>">
                </div>


                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>