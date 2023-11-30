<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 align="center">Características de bicicletas</h1>

            <form action="<?= base_url('/cliente/bicicletas/caracteristicas'); ?>" method="GET">

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
        <?php foreach ($caracteristicas as $caracteristica): ?>
            <div class="col-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            Talla "
                            <?= $caracteristica->Talla_Cuadro ?>" con geometría "
                            <?= $caracteristica->Geometrias ?>"
                        </h5>
                        <p class="card-text"><strong>Material: </strong>
                            <?= $caracteristica->Material ?>
                        </p>
                        <p class="card-text"><strong>Límite de peso: </strong>
                            <?= $caracteristica->Limite_Peso ?>
                        </p>
                        <p class="card-text"><strong>Colores disponibles: </strong>
                            <?= $caracteristica->Colores_Disponibles ?>
                        </p>
                        <p class="card-text"><strong>Garantías válidas por </strong>
                            <?= $caracteristica->Garantia ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>