<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Dirección</h2>
            <table class=" table table-bordered-stripped border-primary">
                <thead>
                    <th>Estado</th>
                    <th>Ciudad</th>
                    <th>Calle</th>
                    <th>Numero Exterior</th>
                    <th>CP</th>
                    
                </thead>
                <tbody>
                <?php foreach($direcciones as $direccion): ?>
                    <tr>
                        <td><?=$direccion->estado ?></td>
                        <td><?=$direccion->ciudad ?></td>
                        <td><?=$direccion->calle ?></td>
                        <td><?=$direccion->noExterior ?></td>
                        <td><?=$direccion->cp ?></td>

                        
                        <td>
                            <a href="<?=base_url('index.php/direccion/delete/'.$direccion->idDireccion);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/direccion/editar/'.$direccion->idDireccion);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>


