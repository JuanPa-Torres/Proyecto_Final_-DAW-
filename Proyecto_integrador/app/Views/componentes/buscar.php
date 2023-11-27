<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?= base_url('index.php/raza/buscar/'); ?>" method="GET">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre"
                minlength="1" maxlength ="30"pattern="[a-z - A-Z \s]{1,15}">

                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" name="descripcion"
                minlength="1" maxlength ="30" pattern="[a-z - A-Z \s]{1,100">


                <label for="origen">Origen</label>
                <input type="text" class="form-control" name="origen"
                minlength="1" maxlength ="30"pattern="[a-z - A-Z \s]{1,100}">
               
                <input type="submit" class="btn btn-outline-success" value="Buscar">

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>

                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Origen</th>

                </thead>
                <tbody>
                    <?php foreach ($razas as $raza): ?>
                        <tr>
                        <td><?=$raza->nombre ?></td>
                        <td><?=$raza->descripcion?></td>
                        <td><?=$raza->origen ?></td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        
    </div>
