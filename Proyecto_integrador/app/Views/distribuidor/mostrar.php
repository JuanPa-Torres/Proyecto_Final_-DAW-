<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Distribuidores</h2>
            <table class=" table table-bordered-stripped border-primary">
                <thead>
                    <th>Nombre</th>
                    <th>Ciudad</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
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
                                <?= $distribuidor->Correo ?>
                            </td>
                            <td>
                                <a href="<?= base_url('index.php/distribuidor/editar/' . $distribuidor->idDistribuidor); ?>">
                                    <img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar"
                                        class="service-img" width="40" height="40">
                                </a>
                            </td>
                            <td>
                                <a
                                    href="<?= base_url('index.php/distribuidor/delete/' . $distribuidor->idDistribuidor); ?>">
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