<div class="container">
    <div class="row">
        <?php
        if (isset($validation)) {
            print $validation->listErrors();
        }
        ?>

        <div class="col-8">
            <h2>Editar bicicleta</h2>

            <form action="<?= base_url('/administrador/bicicletas/editar/' . $bicicleta->idBicicleta); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="idBicicleta" value="<?= $bicicleta->idBicicleta ?>">
                <div class="mb-3">
                    <label for="Marca" class="form-label" style="font-size:x-large;">Marca</label>
                    <select class="col-12" name="Marca">
                        <option value="<?= $bicicleta->Marca ?>" default>
                            <?php
                            $db = \Config\Database::connect();
                            $query = "SELECT Nombre FROM marca WHERE idMarca = $bicicleta->Marca";
                            $resultado = $db->query($query)->getResultArray();
                            echo $resultado[0]["Nombre"];
                            ?>
                        </option>
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
                        <option value="<?= $bicicleta->Modelo ?>" default>
                            <?php
                            $db = \Config\Database::connect();
                            $query = "SELECT Nombre FROM modelo WHERE idModelo = $bicicleta->Modelo";
                            $resultado = $db->query($query)->getResultArray();
                            echo $resultado[0]["Nombre"];
                            ?>
                        </option>
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

                        <option value="<?= $bicicleta->Caracteristicas ?>" default>
                            <?php
                            $db = \Config\Database::connect();
                            $query = "SELECT Talla_Cuadro,Material,Colores_Disponibles,Geometrias,Peso,Limite_Peso,Garantia FROM caracteristicas WHERE idCaracteristicas = $bicicleta->Caracteristicas";
                            $resultado = $db->query($query)->getResultArray();
                            echo $resultado[0]["Talla_Cuadro"] . ", " . $resultado[0]['Material'] . ", " . $resultado[0]['Colores_Disponibles'] . ", " . $resultado[0]['Geometrias'] . ", " . $resultado[0]['Peso'] . ", " . $resultado[0]['Limite_Peso'] . ", " . $resultado[0]['Garantia'];
                            ?>
                        </option>

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
                    <input type="text" class="col-12" name="Precio" value="<?= $bicicleta->Precio ?>">
                </div>

                <div class="mb-3">
                    <label for="Foto" class="form-label" style="font-size:x-large;">Fotografía</label>
                    <input type="text" name="Foto" class="col-12" value="<?= $bicicleta->Foto ?>">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>