<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Mostrar Distribuidores</h2>

            <button type="button" class="btn btn-success"
                onclick="location.href='/administrador/distribuidor/agregar'">Agregar</button>


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