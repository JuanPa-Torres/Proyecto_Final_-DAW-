<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Mostrar Características</h2>
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
                            <td>
                                <?= $caracteristica->idCaracteristicas ?>
                            </td>
                            <td>Talla "
                                <?= $caracteristica->Talla_Cuadro ?>" con geometría "
                                <?= $caracteristica->Geometrias ?>"
                            </td>
                            <td>
                                <?= $caracteristica->Material ?>
                            </td>
                            <td>
                                <?= $caracteristica->Limite_Peso ?>
                            </td>
                            <td>
                                <?= $caracteristica->Colores_Disponibles ?>
                            </td>
                            <td>
                                <?= $caracteristica->Garantia ?>
                            </td>

                            <td>
                                <a
                                    href="<?= base_url('index.php/caracteristicas/editar/' . $caracteristica->idCaracteristicas); ?>">
                                    <img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar"
                                        class="service-img" width="40" height="40">
                                </a>
                            </td>
                            <td>
                                <a
                                    href="<?= base_url('index.php/caracteristicas/delete/' . $caracteristica->idCaracteristicas); ?>">
                                    <img src="https://cdn-icons-png.flaticon.com/128/1828/1828843.png" alt="editar"
                                        class="service-img" width="40" height="40">
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>