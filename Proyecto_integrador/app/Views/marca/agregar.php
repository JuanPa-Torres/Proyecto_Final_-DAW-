<div class="container">
    <div class="row">
        <?php
        if (isset($validation)) {
            print $validation->listErrors();
        }
        ?>

        <div class="col-8">
            <form action="<?= base_url('/administrador/marca/agregar'); ?>" method="POST">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="Nombre" id="Nombre">
                </div>

                <div class="mb-3">
                    <label for="Pais_Origen" class="form-label">País de origen</label>
                    <input type="text" class="form-control" name="Pais_Origen" id="Pais_Origen">
                </div>

                <div class="mb-3">
                    <label for="Logo" class="form-label">Logo</label>
                    <input type="text" class="form-control" name="Logo" id="Logo">
                </div>

                <div class="mb-3">
                    <label for="Pais_Distribuidor" class="form-label">País distribuidor</label>
                    <input type="text" class="form-control" name="Pais_Distribuidor" id="Pais_Distribuidor">
                </div>

                <div class="mb-3">
                    <label for="Distribuidor" class="form-label">Distribuidor</label>
                    <select name="Distribuidor" class="form-control">
                        <?php foreach ($distribuidores as $distribuidor): ?>
                            <option value="<?= $distribuidor->idDistribuidor ?>">
                                <?= $distribuidor->Nombre ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>