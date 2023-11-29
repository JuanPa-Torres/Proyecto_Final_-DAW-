<div class="container">
    <div class="row">
        <?php
        if (isset($validation)) {
            print $validation->listErrors();
        }
        ?>

        <div class="col-8">
            <form action="<?= base_url('/administrador/bicicletas/agregar'); ?>" method="POST">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="Marca" class="form-label" style="font-size:x-large;">Marca</label>
                    <select class="col-12" name="Marca">
                        <?php foreach ($marcas as $marca): ?>
                            <option value="<?= $marca->idMarca ?>">
                                <?= $marca->Nombre ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="Modelo" class="form-label" style="font-size:x-large;">Modelo</label>
                    <select class="col-12" name="Modelo">
                        <?php foreach ($modelos as $modelo): ?>
                            <option value="<?= $modelo->idModelo ?>">
                                <?= $modelo->Nombre ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="Caracteristicas" class="form-label" style="font-size:x-large;">Características</label>
                    <select class="col-12" name="Caracteristicas">
                        <?php foreach ($caracteristicas as $caracteristica): ?>
                            <option value="<?= $caracteristica->idCaracteristicas ?>">
                                <?= $caracteristica->Talla_Cuadro . ", " . $caracteristica->Material . ", " . $caracteristica->Colores_Disponibles . ", " . $caracteristica->Geometrias . ", " . $caracteristica->Peso . ", " . $caracteristica->Limite_Peso . ", " . $caracteristica->Garantia ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Componentes" class="form-label" style="font-size:x-large;">Componentes</label>
                    <select class="col-12" name="Componentes">
                        <?php foreach ($componentes as $componente): ?>
                            <option value="<?= $componente->idComponentes ?>">
                                <?= $componente->Tija . ", " . $componente->Amortiguador . ", " . $componente->Llantas . ", " . $componente->Cambio_Delantero . ", " . $componente->Cambio_Trasero . ", " . $componente->Casstte . ", " . $componente->Frenos . ", " . $componente->Rotores_Frenos ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Precio" class="form-label" style="font-size:x-large;">Precio</label>
                    <input type="text" class="col-12" name="Precio">
                </div>

                <div class="mb-3">
                    <label for="Foto" class="form-label" style="font-size:x-large;">Fotografía</label>
                    <input type="text" name="Foto" class="col-12">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>