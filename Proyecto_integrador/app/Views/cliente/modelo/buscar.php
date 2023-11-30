<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 align="center">Modelos disponibles</h1>

            <form action="<?= base_url('/cliente/bicicletas/modelo'); ?>" method="GET">

                <div class="col-5">
                    <label for="Campo">Buscar por: </label>
                    <select name="Campo" class="form-control">
                        <option value="Todo">Mostrar todo</option>
                        <option value="Nombre">Nombre </option>
                        <option value="Modalidad">Modalidad</option>
                        <option value="Gama">Gama</option>
                        <option value="Año">Año</option>
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
        <?php foreach ($modelos as $modelo): ?>
            <div class="col-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $modelo->Nombre ?>
                        </h5>
                        <p class="card-text"><strong>Modalidad: </strong>
                            <?= $modelo->Modalidad ?>
                        </p>
                        <p class="card-text"><strong>Año de vigencia: </strong>
                            <?= $modelo->Año ?>
                        </p>
                        <p class="card-text"><strong>Gama: </strong>
                            <?= $modelo->Gama ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>