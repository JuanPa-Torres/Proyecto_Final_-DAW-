<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?= base_url('index.php/direccion/buscar/'); ?>" method="GET">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" name="estado"
                minlength="1" maxlength ="30" pattern="[a-z - A-Z \s]{1,15}">
               
                <label for="ciudad">Ciudad</label>
                <input type="text" class="form-control" name="ciudad"
                minlength="1" maxlength ="30" pattern="[a-z - A-Z \s]{1,15}">

                <label for="calle">Calle</label>
                <input type="text" class="form-control" name="calle"
                minlength="1" maxlength ="30" pattern="[a-z - A-Z \s]{1,15}">

                <label for="noExterior">Numero Exterior</label>
                <input type="text" class="form-control" name="noExterior"
                minlength="1" maxlength ="30" pattern="[0-9 \s]{1,80}">

                <label for="cp">CP</label>
                <input type="text" class="form-control" name="cp"
                minlength="1" maxlength ="30" pattern="[0-9 \s]{1,5}">

               

                
                <input type="submit" class="btn btn-outline-success" value="Buscar">

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <th>Estado</th>
                    <th>Ciudad</th>
                    <th>Calle</th>
                    <th>Numero Exterior</th>
                    <th>CP</th>
                </thead>
                <tbody>
                    <?php foreach ($direcciones as $direccion): ?>
                        <tr>
                        <td><?=$direccion->estado ?></td>
                        <td><?=$direccion->ciudad?></td>
                        <td><?=$direccion->calle ?></td>
                        <td><?=$direccion->noExterior ?></td>
                        <td><?=$direccion->cp ?></td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        
    </div>
