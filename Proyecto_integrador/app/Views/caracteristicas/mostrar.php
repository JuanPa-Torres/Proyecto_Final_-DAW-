<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Características</h2>
            <table class=" table table-bordered-stripped border-primary">
                <thead>
                    <th>ID</th>
                    <th>Cuadro</th>
                    <th>Material</th>
                    <th>Límite de peso</th>
                    <th>Colores disponibles</th>
                    <th>Garantia</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                <?php foreach($caracteristicas as $caracteristica): ?>
                    <tr>
                        <td><?=$caracteristica->idCaracteristicas ?></td>
                        <td>Talla "<?=$caracteristica->Talla_Cuadro?>" con geometría "<?=$caracteristica->Geometrias ?>"</td>
                        <td><?=$caracteristica->Material ?></td>
                        <td><?=$caracteristica->Limite_Peso ?></td>
                        <td><?=$caracteristica->Colores_Disponibles ?></td>
                        <td><?=$caracteristica->Garantia ?></td>

                        <td>
                            <a href="<?=base_url('index.php/caracteristicas/delete/'.$caracteristica->idCaracteristicas);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/caracteristicas/editar/'.$caracteristica->idCaracteristicas);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>


