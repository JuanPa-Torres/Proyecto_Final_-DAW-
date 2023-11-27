<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Historial Medico</h2>
            <table class=" table table-bordered-stripped border-primary">
                <thead>
                    <th>Estado de Salud</th>
                    <th>Alergias</th>
                    <th>Vacunas</th>
                    <th>Tratamientos</th>
                   

                </thead>
                <tbody>
                <?php foreach($historiales_Medicos as $historial_Medico): ?>
                    <tr>
                        <td><?=$historial_Medico->estadoSalud ?></td>
                        <td><?=$historial_Medico->alergias ?></td>
                        <td><?=$historial_Medico->vacunas ?></td>
                        <td><?=$historial_Medico->tratamientos ?></td>
                        
                        
                        <td>    
                            <a href="<?=base_url('index.php/historial_Medico/delete/'.$historial_Medico->idHistorial_Medico);?>">Eliminar</a>
                            <a href="<?=base_url('index.php/historial_Medico/editar/'.$historial_Medico->idHistorial_Medico);?>">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>
</div>


