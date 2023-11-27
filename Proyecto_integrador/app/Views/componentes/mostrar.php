<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Raza</h2>
            <table class=" table table-bordered-stripped border-primary">
                <thead>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Origen</th>
                   

                </thead>
                <tbody>
                <?php foreach($razas as $raza): ?>
                    <tr>
                        <td><?=$raza->nombre ?></td>
                        <td><?=$raza->descripcion?></td>
                        <td><?=$raza->origen ?></td>
                        
                        
                        <td>    
                            <a href="<?=base_url('index.php/raza/delete/'.$raza->idRaza);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/raza/editar/'.$raza->idRaza);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>


