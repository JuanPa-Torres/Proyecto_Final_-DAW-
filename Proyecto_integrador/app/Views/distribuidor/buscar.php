<div class="container">
    <div class="row">
        <h1 align="center">Buscar distribuidores</h1>
        <div class="col-12">
            <form action="<?= base_url('/administrador/distribuidor/buscar/'); ?>" method="GET">
                <div class="col-5">
                    <label for="columnaBusqueda">Buscar distribuidor por:</label>
                    <select name="columnaBusqueda" class="form-control">
                        <option value="todo">Todos los campos</option>
                        <option value="nombre">Nombre</option>
                        <option value="ciudad">País</option>
                        <option value="correo">Correo</option>
                        <option value="telefono">Teléfono</option>
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
            <h2>Distribuidores</h2>
            <table class=" table table-bordered-stripped border-primary">
                <thead>
                    <th>Nombre</th>
                    <th>Ciudad</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    <?php foreach ($distribuidores as $distribuidor): ?>
                        <tr>
                            <td>
                                <?= $distribuidor->Nombre ?>
                            </td>
                            <td>
                                <?= $distribuidor->Ciudad ?>
                            </td>
                            <td>
                                <?= $distribuidor->Telefono ?>
                            </td>
                            <td>
                                <?= $distribuidor->Correo ?>
                            </td>

                            <td>
                                <a
                                    href="<?= base_url('/administrador/distribuidor/editar/' . $distribuidor->idDistribuidor); ?>">
                                    <img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar"
                                        class="service-img" width="40" height="40">
                                </a>
                            </td>
                            <td>
                                <a
                                    href="<?= base_url('/administrador/distribuidor/delete/' . $distribuidor->idDistribuidor); ?>">
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