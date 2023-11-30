<div class="container">
    <div class="row">
        <?php
        if (isset($validation)) {
            print $validation->listErrors();
        }
        ?>

        <div class="col-8">
            <h2>Editar Modelo</h2>

            <form action="<?= base_url('/administrador/modelo/editar/' . $modelo->idModelo); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" value="<?= $modelo->idModelo ?>" name="idModelo">
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="Nombre" value="<?= $modelo->Nombre ?>">
                </div>

                <div class="mb-3">
                    <label for="Modalidad" class="form-label">Modalidad</label>
                    <input type="text" class="form-control" name="Modalidad" value="<?= $modelo->Modalidad ?>">
                </div>

                <div class="mb-3">
                    <label for="Año" class="form-label">Año</label>
                    <input type="text" class="form-control" name="Año" value="<?= $modelo->Año ?>">
                </div>

                <div class="mb-3">
                    <label for="Gama" class="form-label">Gama</label>
                    <input type="text" class="form-control" name="Gama" value="<?= $modelo->Gama ?>">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>