<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Bicicletas</h2>
            <table class=" table table-bordered-stripped border-primary">
                <thead>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Componentes</th>
                    <th>Características</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                <?php foreach ($bicicletas as $bicicleta): ?>
                            <tr>
                                <td><?= $bicicleta->idBicicleta ?></td>

                                <?php foreach ($marcas as $marca):
                                    if ($marca->idMarca == $bicicleta->Marca): ?>
                                                    <td><?= $marca->Nombre ?> (<?= $marca->Pais_Origen ?>)</td>
                                        <?php endif; endforeach ?>

                                <?php foreach ($modelos as $modelo):
                                    if ($modelo->idModelo == $bicicleta->Modelo): ?>
                                                    <td><?= $modelo->Nombre ?> - <?= $modelo->Modalidad ?></td>
                                        <?php endif; endforeach ?>

                                <?php foreach ($componentes as $componente):if ($componente->idComponentes == $bicicleta->Componentes): ?>
                                                    <td>                        
                                                        <ul>
                                                            <li><?= $componente->Ruedas_Delanteras ?></li>
                                                            <li><?= $componente->Cambio_Delantero ?></li>
                                                            <li><?= $componente->Ruedas_Traseras ?></li>
                                                            <li><?= $componente->Cambio_Trasero ?></li>
                                                            <li><?= $componente->Tija ?></li>
                                                            <li><?= $componente->Amortiguador ?></li>
                                                            <li><?= $componente->Llantas ?></li>
                                                            <li><?= $componente->Casstte ?></li>
                                                            <li><?= $componente->Casstte ?></li>
                                                            <li><?= $componente->Frenos ?> con <?= $componente->Rotores_Frenos ?></li>
                                                        </ul> 
                                                    </td>                        
                                        <?php endif; endforeach ?>

                                <?php foreach ($caracteristicas as $caracteristica):
                                    if ($caracteristica->idCaracteristicas == $bicicleta->Caracteristicas): ?>
                                                    <td>
                                                        <ul>
                                                            <li>Talla "<?= $caracteristica->Talla_Cuadro ?>" con geometría "<?= $caracteristica->Geometrias ?>"</li>
                                                            <li><?= $caracteristica->Material ?></li>
                                                            <li><?= $caracteristica->Limite_Peso ?></li>
                                                            <li><?= $caracteristica->Colores_Disponibles ?></li>
                                                            <li><?= $caracteristica->Garantia ?></li>
                                                        </ul>
                                                    </td>
                                            <?php endif; endforeach ?>

                                <td>$<?= $bicicleta->Precio ?> MXN</td>
                                <td><img src="<?= $bicicleta->Foto ?>" alt="" weight="100" height="100" ></td>
                                <td>    
                                    <a href="<?= base_url('index.php/bicicleta/delete/' . $bicicleta->idBicicleta); ?>">Eliminar</a>
                                    <a href="<?= base_url('index.php/bicicleta/editar/' . $bicicleta->idBicicleta); ?>">Editar</a>
                                </td>
                            </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>


