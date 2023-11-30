<div class="container">
    <div class="row">
        <h1 align="center">Marcas disponibles</h1>
        <div class="col-12">
            <form action="<?= base_url('/cliente/bicicletas/marca'); ?>" method="GET">
                <div class="col-5">
                    <label for="columnaBusqueda">Buscar marca por:</label>
                    <select name="columnaBusqueda" class="form-control">
                        <option value="Todo">Todos los campos</option>
                        <option value="Nombre">Nombre</option>
                        <option value="Pais_Origen">País de origen</option>
                        <option value="Pais_Distribuidor">País de distribución</option>
                    </select>
                </div>
                <div class="col-5">
                    <label for="elementoBusqueda">Parecido a:</label>
                    <input type="text" class="form-control" name="elementoBusqueda">
                </div>

                <input type="image" class="btn btn-success mt-4" value="Realizar Consulta" src="">
            </form>
        </div>
    </div>

    <div class="row">

        <?php foreach ($marcas as $marca): ?>
            <div class="col-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $marca->Logo ?>" height="200">

                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $marca->Nombre ?>
                        </h5>
                        <p class="card-text"><strong>País de origen: </strong>
                            <?= $marca->Pais_Origen ?>
                        </p>
                        <p class="card-text"><strong>País de distribución: </strong>
                            <?= $marca->Pais_Distribuidor ?>
                        </p>
                        <?php foreach ($distribuidores as $distribuidor):
                            if ($distribuidor->idDistribuidor == $marca->Distribuidor): ?>

                                <p class="card-text"><strong>Distribuidor: </strong>
                                    <?= $distribuidor->Nombre ?>
                                </p>
                            <?php endif; endforeach ?>

                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>