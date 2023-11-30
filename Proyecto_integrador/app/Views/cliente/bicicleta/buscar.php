<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 align="center">Bicicletas disponibles</h1>

            <form action="<?= base_url('/cliente/bicicletas'); ?>" method="GET">

                <div class="col-5">
                    <label for="Campo">Buscar por: </label>
                    <select name="Campo" class="form-control">
                        <option value="Todo">Mostrar todo</option>
                        <option value="Marca">Marca</option>
                        <option value="Modelo">Modelo</option>
                        <option value="Precio">Precio</option>
                    </select>
                </div>


                <div class="col-5">
                    <label for="Valor">Parecido a:</label>
                    <input type="text" class="form-control" name="Valor" maxlength="30"
                        pattern="[a-z - A-Z 0-9 \s]{1,15}">
                </div>

                <input type="submit" class="btn btn-outline-success" value="Buscar">

            </form>
        </div>
    </div>

    <div class="row">
        <h2>Bicicletas</h2>

        <?php foreach ($bicicletas as $bicicleta): ?>
            <div class="col-3 mb-3">

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $bicicleta->Foto ?>" alt="" weight="200" height="200">
                    <div class="card-body">
                        <p class="card-text"><strong>Marca:</strong>
                            <?php foreach ($marcas as $marca):
                                if ($marca->idMarca == $bicicleta->Marca): ?>
                                    <?= $marca->Nombre ?> (
                                    <?= $marca->Pais_Origen ?>)
                                <?php endif; endforeach ?>
                        </p>

                        <p class="card-text"><strong>Modelo:</strong>
                            <?php foreach ($modelos as $modelo):
                                if ($modelo->idModelo == $bicicleta->Modelo): ?>
                                    <?= $modelo->Nombre ?> -
                                    <?= $modelo->Modalidad ?>
                                <?php endif; endforeach ?>
                        </p>

                        <p class="card-text"><strong>Precio:</strong>
                            $
                            <?= $bicicleta->Precio ?> MXN
                        </p>

                        <p class="card-text"><strong>Carecterísticas:</strong>
                            <?php foreach ($caracteristicas as $caracteristica):
                                if ($caracteristica->idCaracteristicas == $bicicleta->Caracteristicas): ?>
                                <ul>
                                    <li>Talla "
                                        <?= $caracteristica->Talla_Cuadro ?>" con geometría "
                                        <?= $caracteristica->Geometrias ?>"
                                    </li>
                                    <li>
                                        Hecha de
                                        <?= $caracteristica->Material ?>
                                    </li>
                                    <li>
                                        Límite de peso:
                                        <?= $caracteristica->Limite_Peso ?> kg
                                    </li>
                                    <li>
                                        Colores disponibles:
                                        <?= $caracteristica->Colores_Disponibles ?>
                                    </li>
                                    <li>
                                        Garantía:
                                        <?= $caracteristica->Garantia ?>
                                    </li>
                                </ul>
                            <?php endif; endforeach ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>