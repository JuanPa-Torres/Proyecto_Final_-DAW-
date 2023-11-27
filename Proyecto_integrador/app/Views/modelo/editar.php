<div class="container">
    <div class="row">
  

        <div class="col-8">
            <h2>Editar Historial Medico</h2>
            <form action="<?= base_url('historial_Medico/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="idHistorial_Medico" value="<?= $historial_Medico->idHistorial_Medico; ?>" />

                <div class="mb-3">
                    <label for="estadoSalud" class="form-label">Estado de Salud</label>
                    <input type="text" class="form-control" name="estadoSalud" id="estadoSalud" value="<?= $historial_Medico->estadoSalud; ?>">
                </div>

                <div class="mb-3">
                    <label for="alergias" class="form-label">Alergias</label>
                    <input type="text" class="form-control" name="alergias" id="alergias" value="<?= $historial_Medico->alergias; ?>">
                </div>


                <div class="mb-3">
                    <label for="vacunas" class="form-label">Vacunas</label>
                    <input type="text" class="form-control" name="vacunas" id="vacunas" value="<?= $historial_Medico->vacunas; ?>">
                </div>

                <div class="mb-3">
                    <label for="tratamientos" class="form-label">Tratamientos</label>
                    <input type="text" class="form-control" name="tratamientos" id="tratamientos" value="<?= $historial_Medico->tratamientos; ?>">
                </div>



                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>