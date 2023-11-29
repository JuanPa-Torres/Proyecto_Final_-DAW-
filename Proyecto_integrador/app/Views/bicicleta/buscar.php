<div class="container">
    <div class="row">
        <div class="col-12">
        <h1 align="center">Buscar bicicleta</h1>

            <form action="<?= base_url('/administrador/bicicletas/buscar'); ?>" method="GET">

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
                    <input type="text" class="form-control" name="Valor" maxlength="30" pattern="[a-z - A-Z 0-9 \s]{1,15}">
                </div>
                    
                    <input type="submit" class="btn btn-outline-success" value="Buscar">

            </form>
        </div>
    </div>

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
                                    <a href="<?= base_url('index.php/administrador/bicicletas/editar/' . $bicicleta->idBicicleta); ?>">
                                    <img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar" class="service-img"
                                        width="40" height="40">
                                    </a>
                                </td>
                                <td>
                                    <a href="<?= base_url('index.php/administrador/bicicletas/delete/' . $bicicleta->idBicicleta); ?>">
                                    <img src="https://cdn-icons-png.flaticon.com/128/1828/1828843.png" alt="editar" class="service-img"
                                        width="40" height="40">
                                    </a>
                                </td>
                            </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>

</div>