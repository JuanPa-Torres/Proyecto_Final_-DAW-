<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Mascota</h2>
            <table class=" table table-bordered-stripped border-primary">
                <thead>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Sexo</th>
                    <th>Fecha de Nacimiento</th>

                </thead>
                <tbody>
                <?php foreach($mascotas as $mascota): ?>
                    <tr>
                        <td><?=$mascota->nombre ?></td>
                        <td><?=$mascota->especie?></td>
                        <td><?=$mascota->sexo ?></td>
                        <td><?=$mascota->fechaNacimiento ?></td>
                        
                        <td>    
                            <a href="<?=base_url('index.php/mascota/delete/'.$mascota->idMascota);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/mascota/editar/'.$mascota->idMascota);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>


