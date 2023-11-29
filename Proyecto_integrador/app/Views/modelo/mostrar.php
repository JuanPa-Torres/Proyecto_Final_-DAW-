<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Modelos</h2>
            <table class=" table table-bordered-stripped border-primary">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Modalidad</th>
                    <th>Año</th>
                    <th>Gama</th>
                   <th colspan="2"></th>

                </thead>
                <tbody>
                <?php foreach($modelos as $modelo): ?>
                    <tr>
                        <td><?=$modelo->idModelo ?></td>
                        <td><?=$modelo->Nombre ?></td>
                        <td><?=$modelo->Modalidad ?></td>
                        <td><?=$modelo->Año ?></td>
                        <td><?=$modelo->Gama ?></td>
                        <td>    
                            <a href="<?=base_url('/administrador/modelo/delete/'.$modelo->idModelo);?>">Eliminar</a>
                            <a href="<?=base_url('/administrador/modelo/editar/'.$modelo->idModelo);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>


