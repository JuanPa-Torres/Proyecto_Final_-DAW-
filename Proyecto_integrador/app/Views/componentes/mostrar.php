<div class="container">
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
                        <td><?= $componente->idComponentes ?></td>
                        <td>
                            <ul>
                                <li><?= $componente->Ruedas_Delanteras ?></li>
                                <li><?= $componente->Cambio_Delantero ?></li>
                            </ul> 
                        </td>
                        <td>
                            <ul>
                                <li><?= $componente->Ruedas_Traseras ?></li>
                                <li><?= $componente->Cambio_Trasero ?></li>
                            </ul> 
                        </td>
                        <td>
                            <ul>
                                <li><?= $componente->Tija ?></li>
                                <li><?= $componente->Amortiguador ?></li>
                                <li><?= $componente->Bielas ?></li>
                                <li><?= $componente->Llantas ?></li>
                                <li><?= $componente->Casstte ?></li>
                                <li><?= $componente->Casstte ?></li>
                                <li><?= $componente->Frenos ?> con <?= $componente->Rotores_Frenos ?></li>
                            </ul> 
                        </td>
                       
                            <td>    
                                <a href="<?= base_url('administrador/componentes/delete/' . $componente->idComponentes); ?>">Eliminar</a>
                                <a href="<?= base_url('administrador/componentes/editar/' . $componente->idComponentes); ?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>


