<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Marcas</h2>
            <table class=" table table-bordered-stripped border-primary">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Logo</th>
                    <th>País de origen</th>
                    <th>País de distribución</th>
                    <th>Distribuidor</th>
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
                                <a href="<?= base_url('index.php/marca/editar/' . $marca->idMarca); ?>">
                                    <img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar"
                                        class="service-img" width="40" height="40">
                                </a>
                            </td>
                            <td>
                                <a href="<?= base_url('index.php/marca/delete/' . $marca->idMarca); ?>">
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