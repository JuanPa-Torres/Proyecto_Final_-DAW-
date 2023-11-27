<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?= base_url('index.php/mascota/buscar/'); ?>" method="GET">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre"
                minlength="1" maxlength ="30"pattern="[a-z - A-Z \s]{1,15}">

                <label for="especie">Especie</label>
                <input type="text" class="form-control" name="especie"
                minlength="1" maxlength ="30" pattern="[a-z - A-Z \s]{1,15}">

                <label for="sexo">Sexo</label>
                <select name="sexo" class="form-control" >
                    <option value=""></option>
                    <option value="macho">Macho</option>
                    <option value="hembra">Hembra</option>
                    </selct>

                <label for="fechaNacimiento">Fecha de Nacimiento</label>
                <input type="text" class="form-control" name="fechaNacimiento"
                minlength="1" maxlength ="30"pattern="[0-9]{4}-[0-9]{2}-[0-9]{1,15}">
               
                <input type="submit" class="btn btn-outline-success" value="Buscar">

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Sexo</th>
                    <th>Fecha de Nacimiento</th>
                </thead>
                <tbody>
                    <?php foreach ($mascotas as $mascota): ?>
                        <tr>
                        <td><?=$mascota->nombre ?></td>
                        <td><?=$mascota->especie?></td>
                        <td><?=$mascota->sexo ?></td>
                        <td><?=$mascota->fechaNacimiento ?></td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        
    </div>
