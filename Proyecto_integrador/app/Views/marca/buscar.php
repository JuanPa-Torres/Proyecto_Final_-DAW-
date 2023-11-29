<div class="container">
    <div class="row">
        <h1 align="center">Buscar marca</h1>
        <div class="col-12">
            <form action="<?= base_url('/administrador/marca/buscar/'); ?>" method="GET">
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
        <div class="col-12">
            <h2>Dieta</h2>
            <table class=" table table-bordered-stripped border-primary">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Logo</th>
                    <th>País de origen</th>
                    <th>País de distribución</th>
                    <th>Distribuidor</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    <?php foreach ($marcas as $marca): ?>
                        <tr>
                            <td>
                                <?= $marca->idMarca ?>
                            </td>
                            <td>
                                <?= $marca->Nombre ?>
                            </td>
                            <td>
                                <img src="<?= $marca->Logo ?>" width="90" height="90"> </img>
                            </td>
                            <td>
                                <?= $marca->Pais_Origen ?>
                            </td>
                            <td>
                                <?= $marca->Pais_Distribuidor ?>
                            </td>
                            <td>
                                <?= $marca->Distribuidor ?>
                            </td>
                            <td>
                                <a href="<?= base_url('/administrador/marca/editar/' . $marca->idMarca); ?>">
                                    <img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar"
                                        class="service-img" width="40" height="40">
                                </a>
                            </td>
                            <td>
                                <a href="<?= base_url('/administrador/marca/delete/' . $marca->idMarca); ?>">
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