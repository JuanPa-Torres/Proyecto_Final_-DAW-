<div class="container">
    <div class="row">
    <!-- <?php print_r($mascota); ?> -->

        <div class="col-8">
            <h2>Editar Mascota</h2>
            <form action="<?= base_url('mascota/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="idMascota" value="<?= $mascota->idMascota; ?>" />

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $mascota->nombre; ?>">
                </div>

                <div class="mb-3">
                    <label for="especie" class="form-label">Especie</label>
                    <input type="text" class="form-control" name="especie" id="especie" value="<?= $mascota->especie; ?>">
                </div>

                <div class="mb-3">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo" class="form-control">
                        <?php if ($mascota->sexo == "Macho"): ?>
                            <option value="macho" selected>Macho</option>
                            <option value="hembra">Hembra</option>
                        <?php else: ?>
                            <option value="macho" >Macho</option>
                            <option value="hembra" selected>Hembra</option>
                        <?php endif ?>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
                    <input type="text" class="form-control" name="fechaNacimiento" id="fechaNacimiento" value="<?= $mascota->fechaNacimiento; ?>">
                </div>


                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>