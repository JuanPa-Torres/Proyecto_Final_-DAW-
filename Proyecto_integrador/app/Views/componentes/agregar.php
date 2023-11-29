<div class="container">
    <div class="row">
    <?php 
        if(isset($validation)){
                print $validation->listErrors();
        }
     ?>
       
        <div class="col-8">
            <form action="<?= base_url('componentes/agregar'); ?>" method="POST">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="Tija" class="form-label">Tija</label>
                    <input type="text" class="form-control" name="Tija" id="Tija" >
                </div>
                
                <div class="mb-3">
                    <label for="Amortiguador" class="form-label">Amortiguador</label>
                    <input type="text" class="form-control" name="Amortiguador" id="Amortiguador" >
                </div>


                <div class="mb-3">
                    <label for="Ruedas_Delanteras" class="form-label">Ruedas Delanteras</label>
                    <input type="text" class="form-control" name="Ruedas_Delanteras" id="Ruedas_Delanteras" >
                </div>

                <div class="mb-3">
                    <label for="Ruedas_Traseras" class="form-label">Ruedas Traseras</label>
                    <input type="text" class="form-control" name="Ruedas_Traseras" id="Ruedas_Traseras" >
                </div>
                <div class="mb-3">
                    <label for="Llantas" class="form-label">Llantas</label>
                    <input type="text" class="form-control" name="Llantas" id="Llantas" >
                </div>

                <div class="mb-3">
                    <label for="Cambio_Delantero" class="form-label">Cambio_Delantero</label>
                    <input type="text" class="form-control" name="Cambio_Delantero" id="Cambio_Delantero" >
                </div>

                <div class="mb-3">
                    <label for="Cambio_Trasero" class="form-label">Cambio_Trasero</label>
                    <input type="text" class="form-control" name="Cambio_Trasero" id="Cambio_Trasero" >
                </div>

                <div class="mb-3">
                    <label for="Casstte" class="form-label">Cassette</label>
                    <input type="text" class="form-control" name="Casstte" id="Casstte" >
                </div>
                <div class="mb-3">
                    <label for="Bielas" class="form-label">Bielas</label>
                    <input type="text" class="form-control" name="Bielas" id="Bielas" >
                </div>
                <div class="mb-3">
                    <label for="Frenos" class="form-label">Frenos</label>
                    <input type="text" class="form-control" name="Frenos" id="Frenos" >
                </div>
                <div class="mb-3">
                    <label for="Rotores_Frenos" class="form-label">Rotores para los frenos</label>
                    <input type="text" class="form-control" name="Rotores_Frenos" id="Rotores_Frenos" >
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>