<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 align="center">Buscar modelos</h1>

            <form action="<?= base_url('/administrador/modelo/buscar'); ?>" method="GET">

                <div class="col-5">
                    <label for="Campo">Buscar por: </label>
                    <select name="Campo" class="form-control">
                        <option value="Todo">Mostrar todo</option>
                        <option value="Nombre">Nombre </option>
                        <option value="Modalidad">Modalidad</option>
                        <option value="Gama">Gama</option>
                        <option value="Año">Año</option>
                    </select>
                </div>


                <div class="col-5">
                    <label for="Valor">Parecido a:</label>
                    <input type="text" class="form-control" name="Valor" maxlength="30"
                        pattern="[a-z - A-Z 0-9 \s]{1,15}">
                </div>

                <input type="submit" class="btn btn-outline-success" value="Buscar">

            </form>
        </div>
    </div>

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
                            <a href="<?=base_url('/administrador/modelo/editar/'.$modelo->idModelo);?>">
                                <img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar"
                                    class="service-img" width="40" height="40">
                            </a>
                        </td>
                        <td>
                            <a
                            href="<?=base_url('/administrador/modelo/delete/'.$modelo->idModelo);?>">
                                <img src="https://cdn-icons-png.flaticon.com/128/1828/1828843.png" alt="editar"
                                    class="service-img" width="40" height="40">
                            </a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


        </div>
    </div>

</div>