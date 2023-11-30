<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 align="center">Buscar componentes</h1>

            <form action="<?= base_url('/administrador/componentes/buscar'); ?>" method="GET">

                <div class="col-5">
                    <label for="Campo">Buscar por: </label>
                    <select name="Campo" class="form-control">
                        <option value="Todo">Mostrar todo</option>
                        <option value="Casstte">Cassette </option>
                        <option value="Bielas">Bielas</option>
                        <option value="Cambio">Cambio</option>
                        <option value="Ruedas">Ruedas</option>
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
            <h2>Componentes</h2>
            <table class=" table table-bordered-stripped border-primary">
                <thead>
                    <th>ID</th>
                    <th>Parte delantera</th>
                    <th>Parte Trasera</th>
                    <th>Otros componentes</th>
                    <th colspan="2"></th>

                </thead>
                <tbody>
                    <?php foreach ($componentes as $componente): ?>
                        <tr>
                            <td>
                                <?= $componente->idComponentes ?>
                            </td>
                            <td>
                                <ul>
                                    <li>
                                        <?= $componente->Ruedas_Delanteras ?>
                                    </li>
                                    <li>
                                        <?= $componente->Cambio_Delantero ?>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>
                                        <?= $componente->Ruedas_Traseras ?>
                                    </li>
                                    <li>
                                        <?= $componente->Cambio_Trasero ?>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>
                                        <?= $componente->Tija ?>
                                    </li>
                                    <li>
                                        <?= $componente->Bielas ?>
                                    </li>
                                    <li>
                                        <?= $componente->Amortiguador ?>
                                    </li>
                                    <li>
                                        <?= $componente->Llantas ?>
                                    </li>
                                    <li>
                                        <?= $componente->Casstte ?>
                                    </li>
                                    <li>
                                        <?= $componente->Casstte ?>
                                    </li>
                                    <li>
                                        <?= $componente->Frenos ?> con
                                        <?= $componente->Rotores_Frenos ?>
                                    </li>
                                </ul>
                            </td>

                            <td>
                                <a
                                    href="<?= base_url('/administrador/componentes/editar/' . $componente->idComponentes); ?>">
                                    <img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar"
                                        class="service-img" width="40" height="40">
                                </a>
                            </td>
                            <td>
                                <a
                                    href="<?= base_url('/administrador/componentes/delete/' . $componente->idComponentes); ?>">
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