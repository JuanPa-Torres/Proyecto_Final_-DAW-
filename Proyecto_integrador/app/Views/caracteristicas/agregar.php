<div class="container">
    <div class="row">
        <?php
        if (isset($validation)) {
            print $validation->listErrors();
        }
        ?>

        <div class="col-8">
            <h2>Agregar Características</h2>
            <form action="<?= base_url('/administrador/caracteristicas/agregar'); ?>" method="POST">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="Talla_Cuadro" class="form-label">Talla del cuadro</label>
                    <input type="text" class="form-control" name="Talla_Cuadro">

                </div>

                <div class="mb-3">
                    <label for="Material" class="form-label">Material</label>
                    <input type="text" class="form-control" name="Material">

                </div>

                <div class="mb-3">
                    <label for="Colores_Disponibles" class="form-label">Colores disponibles</label>
                    <input type="text" class="form-control" name="Colores_Disponibles" id="Colores_Disponibles">

                </div>


                <div class="mb-3">
                    <label for="Geometrias" class="form-label">Geometrías</label>
                    <input type="text" class="form-control" name="Geometrias">
                </div>

                <div class="mb-3">
                    <label for="Peso" class="form-label">Peso</label>
                    <input type="text" class="form-control" name="Peso">
                </div>

                <div class="mb-3">
                    <label for="Limite_Peso" class="form-label">Límite de peso</label>
                    <input type="text" class="form-control" name="Limite_Peso">
                </div>

                <div class="mb-3">
                    <label for="Garantia" class="form-label">Garantía</label>
                    <input type="number" class="form-control" name="Garantia">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>