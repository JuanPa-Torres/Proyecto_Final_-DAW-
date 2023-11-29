<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 align="center">Buscar características</h1>

            <form action="<?= base_url('/administrador/caracteristicas/buscar'); ?>" method="GET">

                <div class="col-5">
                    <label for="Campo">Buscar por: </label>
                    <select name="Campo" class="form-control">
                        <option value="Todo">Mostrar todo</option>
                        <option value="Material">Material</option>
                        <option value="Limite_Peso">Límite de peso</option>
                        <option value="Talla_Cuadro">Talla de cuadro</option>
                        <option value="Geometrias">Geometrías</option>
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
        <div class="col-12">
            <h2>Características</h2>
            <table class=" table table-bordered-stripped border-primary">
                <thead>
                    <th>ID</th>
                    <th>Cuadro</th>
                    <th>Material</th>
                    <th>Límite de peso</th>
                    <th>Colores disponibles</th>
                    <th>Garantia</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    <?php foreach ($caracteristicas as $caracteristica): ?>
                        <tr>
                            <td><?= $caracteristica->idCaracteristicas ?></td>
                            <td>Talla "<?= $caracteristica->Talla_Cuadro ?>" con geometría "<?= $caracteristica->Geometrias ?>"
                            </td>
                            <td><?= $caracteristica->Material ?></td>
                            <td><?= $caracteristica->Limite_Peso ?></td>
                            <td><?= $caracteristica->Colores_Disponibles ?></td>
                            <td><?= $caracteristica->Garantia ?></td>

                            <td>
                                <a
                                    href="<?= base_url('index.php/caracteristicas/delete/' . $caracteristica->idCaracteristicas); ?>">Eliminar</a>
                                <a
                                    href="<?= base_url('index.php/caracteristicas/editar/' . $caracteristica->idCaracteristicas); ?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>

</div>