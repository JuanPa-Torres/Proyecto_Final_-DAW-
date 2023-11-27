<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?= base_url('index.php/historial_Medico/buscar/'); ?>" method="GET">
                <label for="estadoSalud">Estado de Salud</label>
                <input type="text" class="form-control" name="estadoSalud"
                minlength="1" maxlength ="30"pattern="[a-z - A-Z \s]{1,15}">

                <label for="alergias">Alergias</label>
                <input type="text" class="form-control" name="alergias"
                minlength="1" maxlength ="30" pattern="[a-z - A-Z \s]{1,100">

                <label for="vacunas">Vacunas</label>
                <input type="text" class="form-control" name="vacunas"
                minlength="1" maxlength ="30"pattern="[a-z - A-Z \s]{1,100}">

                <label for="tratamientos">Tratamientos</label>
                <input type="text" class="form-control" name="tratamientos"
                minlength="1" maxlength ="30"pattern="[a-z - A-Z \s]{1,100}">
               
               
                <input type="submit" class="btn btn-outline-success" value="Buscar">

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>

                    <th>Estado de Salud</th>
                    <th>Alergias</th>
                    <th>Vacunas</th>
                    <th>Tratamientos</th>

                </thead>
                <tbody>
                    <?php foreach ($historiales_Medicos as $historial_Medico): ?>
                        <tr>
                        <td><?=$historial_Medico->estadoSalud ?></td>
                        <td><?=$historial_Medico->alergias ?></td>
                        <td><?=$historial_Medico->vacunas ?></td>
                        <td><?=$historial_Medico->tratamientos ?></td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        
    </div>
