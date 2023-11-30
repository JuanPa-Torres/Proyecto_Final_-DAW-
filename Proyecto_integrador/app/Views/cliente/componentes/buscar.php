<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 align="center">Componentes disponibles</h1>

            <form action="<?= base_url('/cliente/bicicletas/componentes'); ?>" method="GET">

                <div class="col-5">
                    <label for="Campo">Buscar componentes por: </label>
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

        <?php foreach ($componentes as $componente): ?>
            <div class="col-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            Juego de componentes #
                            <?= $componente->idComponentes ?>
                        </h5>
                        <ul class="list-group list-group-flush"><strong>Parte delantera</strong>
                            <li class="list-group-item">
                                <?= $componente->Ruedas_Delanteras ?>
                            </li>
                            <li class="list-group-item">
                                <?= $componente->Cambio_Delantero ?>
                            </li>
                        </ul>

                        <ul class="list-group list-group-flush"><strong>Parte trasera</strong>
                            <li class="list-group-item">
                                <?= $componente->Ruedas_Traseras ?>
                            </li>
                            <li class="list-group-item">
                                <?= $componente->Cambio_Trasero ?>
                            </li>
                        </ul>

                        <ul class="list-group list-group-flush"><strong>Otros componentes</strong>
                            <li class="list-group-item">
                                <?= $componente->Tija ?>
                            </li>
                            <li class="list-group-item">
                                <?= $componente->Bielas ?>
                            </li>
                            <li class="list-group-item">
                                <?= $componente->Amortiguador ?>
                            </li>
                            <li class="list-group-item">
                                <?= $componente->Llantas ?>
                            </li>
                            <li class="list-group-item">
                                <?= $componente->Casstte ?>
                            </li>
                            <li class="list-group-item">
                                <?= $componente->Frenos ?> con
                                <?= $componente->Rotores_Frenos ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>