<div class="container">
    <div class="row">
  

        <div class="col-8">
            <h2>Editar Raza</h2>
            <form action="<?= base_url('raza/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="idRaza" value="<?= $raza->idRaza; ?>" />

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $raza->nombre; ?>">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?= $raza->descripcion; ?>">
                </div>


                <div class="mb-3">
                    <label for="origen" class="form-label">Origen</label>
                    <input type="text" class="form-control" name="origen" id="origen" value="<?= $raza->origen; ?>">
                </div>


                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>